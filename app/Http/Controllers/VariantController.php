<?php

namespace App\Http\Controllers;

use App\DataTables\VariantDataTable;
use App\Models\Attribute;
use App\Models\AttributeListValue;
use App\Models\Variant;
use App\Models\VariantAttributes;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Fluent;
use Illuminate\Validation\Rule;
use League\Csv\Reader;
use League\Csv\XMLConverter;
use SimpleXMLElement;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VariantDataTable $dataTable)
    {
        return $dataTable->render('variant.index');
    }

    public function truncate()
    {

        $variants = Variant::all();
        foreach ($variants as $variant)
        {
            $variant->delete();
        }

        return redirect()->route('variant.index')
            ->with(['alert' => 'success', 'message' => 'table truncated' ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Variant $variant)
    {
        return view('variant.show', compact('variant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Variant $variant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Variant $variant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variant $variant)
    {
        //
    }

    public function uploadcsv()
    {
        return view('variant.uploadcsv');
    }

    public function uploadxml()
    {
        return view('variant.uploadxml');
    }

    public function process_table_data($records)
    {
        // validation des données
        $errors = "";
        // validation des champs obligatoires
        $validationRule = [];
        $resquiredAttributes = Attribute::where('required', '1')->get();
        foreach ($resquiredAttributes as $key => $resquiredAttribute) {
            if ($resquiredAttribute->dataType->name != 'selection')
                $validationRule[$resquiredAttribute->name] = "required|" . $resquiredAttribute->dataType->validation_str;
        }

        $record_counter = 0;
        foreach ($records as $record) {
            $record_counter++;

            // autres validations (champs non obligatoires & listes)
            foreach ($record as $attributeName => $attributeValue) {
                $attribute = Attribute::where('name', $attributeName)->first();
                if (!$attribute->required)
                    $validationRule[$attribute->name] = "nullable|" . $attribute->dataType->validation_str;

                if ($attribute->dataType->name == 'selection') {
                    $validationRule[$attribute->name] = [
                        ($attribute->required == 1) ? 'required' : 'nullable',
                        Rule::exists('attribute_list_values', 'name')
                            ->where('attribute_list_id', $attribute->attribute_list_id),
                    ];
                }
            }

            $validator = Validator::make($record, $validationRule);

            if ($validator->fails()) {
                $fieldsWithErrorMessagesArray = $validator->messages()->get('*');
                foreach ($fieldsWithErrorMessagesArray as $fieldName => $fieldWithErrorMessagesArray) {
                    $errors .= "<p>";
                    $errors .= "Line #" . $record_counter . " - field <strong>" . $fieldName . "</strong> field value validation errors";
                    //dd($validator->getData()[$fieldName],$fieldName,$fieldWithErrorMessagesArray,$validationRule,$record);
                    $errors .= "<br/>Erronous supplied value : <span class='text-red-500'>" . $validator->getData()[$fieldName] . "</span>";
                    $errors .= "<ul>";
                    foreach ($fieldWithErrorMessagesArray as $fieldWithErrorMessage) {
                        $errors .= "<li><i>";
                        $errors .= $fieldWithErrorMessage;
                        $errors .= "</i></li>";
                    }
                    $errors .= "</ul>";
                    $errors .= "</p>";

                }
            }

            // todo : special validations (pictures, etc.)

        }

        if (strlen($errors) == 0) {
            // pas d'erreurs

            // Supprimer les données existantes
            $variants = Variant::where('user_id', '=', Auth::id())->get();
            foreach ($variants as $variant) {
                $variant->delete();
            }

            // créer les nouveaux variant
            foreach ($records as $record) {
                $variant = new Variant(['user_id' => Auth::id()]);
                $variant->save();
                foreach ($record as $attributeName => $attributeValue) {
                    if ($attributeValue) {
                        //dd($attributeName,$attributeValue);  // brand > duotone
                        $attribute = Attribute::where('name', $attributeName)->first();
                        $variantAttributeValueArr = [];
                        $variantAttributeValueArr['variant_id'] = $variant->id;
                        $variantAttributeValueArr['attribute_id'] = $attribute->id;

                        switch ($attribute->dataType->name) {
                            case "selection":
                                $value_id = AttributeListValue::where('name', $attributeValue)->pluck('id')->first();
                                $variantAttributeValueArr['value_int'] = $value_id;
                                break;
                            case "string":
                                $variantAttributeValueArr['value_str'] = $attributeValue;
                                break;
                            case "text":
                                $variantAttributeValueArr['value_txt'] = $attributeValue;
                                break;
                            case "integer":
                                $variantAttributeValueArr['value_int'] = (int)$attributeValue;
                                break;
                            case "float":
                                $variantAttributeValueArr['value_float'] = (float)$attributeValue;
                                break;
                            case "money":
                                $variantAttributeValueArr['value_float'] = (float)$attributeValue;
                                break;
                            case "boolean":
                                $variantAttributeValueArr['value_int'] = (int)$attributeValue;
                                break;
                        }
                        $variantAttributeValue = new VariantAttributes($variantAttributeValueArr);
                        $variantAttributeValue->save();

                    }
                }
            }

        }

        return $errors;
    }

    public function decodecsv(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv|max:2048',
        ]);

        $fileName = time().'-'.$request->file->getClientOriginalName();
        $request->file->storeAs('uploads', $fileName);

        $fileRelPath = 'uploads/'.$fileName;
        $fileFullPath = storage_path('app/'.$fileRelPath);


        if (!Storage::exists($fileRelPath))
        {
            abort(404, "Impossible to find ".$fileRelPath." file");
        }

        // lecture du fichier texte
        try {
            $csvFile = Storage::get($fileRelPath);
        }  catch (Exception $e) {
            abort(404, "Impossible to open ".$fileRelPath." file");
        }

        // déchiffrage csv
        $csv = Reader::createFromString($csvFile);

        $csv->setHeaderOffset(0);
        $csv->skipEmptyRecords();
        try {
            $fieldNames = $csv->getHeader();
            $records = $csv->getRecords();
        } catch (Exception $e) {
            abort(404, "Errors in the ".$fileRelPath." file ".$e->getMessage());
        }

        $errors = $this->process_table_data($records);
        if (strlen($errors) == 0)
        {
            return redirect()->route('variant.index')
                ->with(['alert' => 'success', 'message' => 'Data loaded - file is conform to OMEDIS' ]);
        }
        else
        {
            return view('variant.checkfailed', compact('errors'));
        }
    }


    public function decodexml(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xml|max:2048',
        ]);

        $fileName = time().'-'.$request->file->getClientOriginalName();
        $request->file->storeAs('uploads', $fileName);

        $fileRelPath = 'uploads/'.$fileName;
        $fileFullPath = storage_path('app/'.$fileRelPath);


        if (!Storage::exists($fileRelPath))
        {
            abort(404, "Impossible to find ".$fileRelPath." file");
        }

        // lecture du fichier texte
        try {
            $xmlString = Storage::get($fileRelPath);
        }  catch (Exception $e) {
            abort(404, "Impossible to open ".$fileRelPath." file");
        }
        $xml = new SimpleXMLElement($xmlString);

        // conversion en tableau`
        $json = json_encode((array)$xml);
        $json = str_replace("{}",'""',$json);  // évite les variables tableaux pour les champs vides
        $records = json_decode($json,TRUE);

        $errors = $this->process_table_data($records['product']);
        if (strlen($errors) == 0)
        {
            return redirect()->route('variant.index')
                ->with(['alert' => 'success', 'message' => 'Data loaded - file is conform to OMEDIS' ]);
        }
        else
        {
            return view('variant.checkfailed', compact('errors'));
        }
    }
}
