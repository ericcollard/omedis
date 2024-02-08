<?php

namespace App\Http\Controllers;

use App\DataTables\VariantDataTable;
use App\Models\Attribute;
use App\Models\AttributeListValue;
use App\Models\Product;
use App\Models\Variant;
use App\Models\VariantAttributes;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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

    public function validate_datas($products)
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

        // todo : vaidation structure

        $record_counter = 0;
        if (!key_exists('product',$products))
        {
            $errors .= "<p>File structural error : missing 'product' tag. See OMEDIS documentation</p>";
            return $errors;
        }
        if (!is_array($products))
        {
            $errors .= "<p>File structural error : need to have array of product. See OMEDIS documentation</p>";
            return $errors;
        }
        foreach ($products['product'] as $product) {
            if (!key_exists('variant',$product))
            {
                var_dump($product);
                $errors .= "<p>File structural error : missing 'variant' tag. See OMEDIS documentation</p>";
                return $errors;
            }
            if (!is_array($product))
            {
                $errors .= "<p>File structural error : need to have array of variant. See OMEDIS documentation</p>";
                return $errors;
            }
            foreach ($product['variant'] as $variant) {
                $record_counter++;
                // autres validations (champs non obligatoires & listes)
                if (!is_array($variant))
                {
                    dd($variant);
                    $errors .= "<p>File structural error : need to have array of attributes. See OMEDIS documentation</p>";
                    return $errors;
                }
                foreach ($variant as $attributeName => $attributeValue) {
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

                    // correction des nombres


                }

                $validator = Validator::make($variant, $validationRule);

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
                foreach ($variant as $attributeName => $attributeValue) {
                    // Pictures field validation
                    if ($attributeName == "pictures" and strlen($attributeValue > 0))
                    {
                        $picturePaths = explode(";", $attributeValue);
                        foreach ($picturePaths as $picturePath)
                        {
                            // formatage lien
                            if (!strtolower(substr($picturePath,4)) == 'http')
                            {
                                $errors .= "Line #" . $record_counter . " - <strong>pictures</strong> field value validation errors";
                                $errors .= "<br/>Erronous supplied value : <span class='text-red-500'>" . $picturePaths . "</span>";
                                $errors .= "<br/>picture url ".$picturePath." has to contain 'http' string";
                            }
                            // existence fichier
                            //Log::debug('validate '.$picturePath.' :'.$this->check_url($picturePath));
                            if ($this->check_url($picturePath) == false) {
                                $errors .= "Line #" . $record_counter . " - <strong>pictures</strong> field value validation errors";
                                $errors .= "<br/>picture url: ".$picturePath." can't be reached";
                            }
                        }

                    }

                    //season validation
                    if ($attributeName == "season" and strlen($attributeValue > 0))
                    {
                        if ((int)$attributeValue < 1990 or (int)$attributeValue > 2100 ) {
                            $errors .= "Line #" . $record_counter . " - <strong>season</strong> field value validation errors";
                            $errors .= "<br/>value ".$attributeValue." should be between 1990 and 2100";
                        }
                    }

                }

            }
        }
        return $errors;
    }

    public function check_url($path)
    {
        $file_headers = @get_headers($path);
        if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
            return false;
        }
        else {
            return true;
        }
    }

    public function process_table_data($products,$product_template_supplied = false)
    {
        // Supprimer les données existantes
        $variants = Variant::where('user_id', '=', Auth::id())->get();
        foreach ($variants as $variant) {
            $variant->delete();
        }

        // créer les nouveaux variant
        foreach ($products['product'] as $productData) {
            $product = new Product(['user_id' => Auth::id()]);
            $product->save();
            foreach ($productData['variant'] as $variantData) {
                $variant = new Variant([
                    'user_id' => Auth::id(),
                    'product_id' => $product->id
                ]);
                $variant->save();
                foreach ($variantData as $attributeName => $attributeValue) {
                    if ($attributeValue) {
                        //dd($attributeName,$attributeValue);  // brand > duotone
                        $attribute = Attribute::where('name', $attributeName)->first();
                        $variantAttributeValueArr = [];
                        $variantAttributeValueArr['variant_id'] = $variant->id;
                        $variantAttributeValueArr['attribute_id'] = $attribute->id;

                        switch ($attribute->dataType->name) {
                            case "selection":
                                $value_id = AttributeListValue::where('name', $attributeValue)
                                    ->where('attribute_list_id',$attribute->attribute_list_id)
                                    ->pluck('id')->first();
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
                            case "url":
                                $variantAttributeValueArr['value_txt'] = $attributeValue;
                                break;
                        }
                        /*
                        if ($attributeName=='supplier' and $attributeValue=="vola")
                            dd($variantAttributeValueArr);*/

                        $variantAttributeValue = new VariantAttributes($variantAttributeValueArr);
                        $variantAttributeValue->save();

                    }
                }
            }

            $product->convert2odoo();
        }
    }

    public function decodecsv(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048',
            'delimiter' => 'required',
            'enclosure' => 'required',
            'escape' => 'required'
        ]);

        $fileName = time().'-'.$request->file->getClientOriginalName();
        $request->file->storeAs('uploads', $fileName);

        $fileRelPath = 'uploads/'.$fileName;
        $fileFullPath = storage_path('app/'.$fileRelPath);
        $delimiter = $request->delimiter;
        $enclosure = $request->enclosure;
        $escape = $request->escape;

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
        $csv->setDelimiter($delimiter);
        $csv->setEnclosure($enclosure);
        $csv->setEscape($escape);

        $csv->setHeaderOffset(0);
        $csv->skipEmptyRecords();
        try {
            $fieldNames = $csv->getHeader();
            $records = $csv->getRecords();
        } catch (Exception $e) {
            abort(404, "Errors in the ".$fileRelPath." file ".$e->getMessage());
        }

        // vérification que tous les champs soient valides
        log::debug($fieldNames);
        $invalidFields = '';
        foreach ($fieldNames as $fieldName) {
            if (strlen(trim($fieldName)) == 0)
            {
                $invalidFields = $invalidFields . 'empty fieldname,';
            }
            else
            {
                $attribute = Attribute::where('name', $fieldName)->first();
                if (!$attribute)
                {
                    $invalidFields = $invalidFields . $fieldName . ',';
                }
            }
        }
        if (strlen($invalidFields)>0) {
            abort(403, "Errors in the ".$fileRelPath." file. Following fields are not valid : ".$invalidFields);
        }

        // classement des variants avant détection des produits
        $records->rewind();
        if ($records->current()['season'])
        {
            $records = $csv->sorted(function(array $recordA, array $recordB)
            {
                return $recordA['brand'] <=> $recordB['brand']
                    ?: $recordA['season'] <=> $recordB['season']
                        ?: $recordA['name'] <=> $recordB['name']
                            ?: $recordA['wholesale-price'] <=> $recordB['wholesale-price'];
            });
        }
        else
        {
            $records = $csv->sorted(function(array $recordA, array $recordB)
            {
                return $recordA['brand'] <=> $recordB['brand']
                    ?: $recordA['name'] <=> $recordB['name']
                        ?: $recordA['wholesale-price'] <=> $recordB['wholesale-price'];
            });
        }

        // transformation en tableau
        $data = [];
        $variant_counter = 0;
        foreach ($records as $record) {
            $variant_counter++;
            $data[$variant_counter] = [];
            foreach ($record as $attributeName => $attributeValue) {
                $data[$variant_counter][$attributeName] = $attributeValue;
            }
        }

        // détection produits et variants
        $last_identifier = "";
        $products = ['product' => []];
        $product_counter = 0;
        foreach ($data as $variant_data) {
            $current_identifier = $variant_data['brand'].$variant_data['name'];
            if (array_key_exists('season',$variant_data))
                $current_identifier.=$variant_data['season'];
            if ($last_identifier != $current_identifier)
            {
                // new product
                $product_counter++;
                $products['product'][$product_counter] = ['variant' => []];
                $last_identifier = $current_identifier;
            }
            $products['product'][$product_counter]['variant'][] = $variant_data;
        }

        Log::debug($products);


        // validation des variants
        $errors = $this->validate_datas($products);
        if (strlen($errors) == 0)
        {
            // extraction des variants
            $this->process_table_data($products);
            return redirect()->route('product.index')
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
        $xml = simplexml_load_string($xmlString,        null,   0);

        // conversion en tableau
        $json = json_encode((array)$xml);
        $json = str_replace("{}",'""',$json);  // évite les variables tableaux pour les champs vides
        $products = json_decode($json,TRUE);

        // vérification structure xml
        if (!key_exists('product',$products))
        {
            $errors = "<p>File structural error : missing 'product' tag. See OMEDIS documentation</p>";
            return view('variant.checkfailed', compact('errors'));
        }
        if (!is_array($products['product']))
        {
            $errors = "<p>File structural error : need to have array of product. See OMEDIS documentation</p>";
            return view('variant.checkfailed', compact('errors'));
        }
        foreach ($products['product'] as $keyproct=>$product) {
            if (!key_exists('variant', $product)) {
                $errors = "<p>File structural error : missing 'variant' tag. See OMEDIS documentation</p>";
                return view('variant.checkfailed', compact('errors'));
            }
            if (!is_array($product['variant'])) {
                $errors = "<p>File structural error : need to have array of variant. See OMEDIS documentation</p>";
                return view('variant.checkfailed', compact('errors'));
            }
            // correction des produits à une variante
            $firstVariant = $product['variant'];
            if (!key_exists(0, $firstVariant)) {
                // Le décodage du xml avec 1 seule variante enlève 1 niveau de tableau
                $products['product'][$keyproct]['variant'][] = $firstVariant;
                foreach ($firstVariant as $keyname=>$attrvalue)
                {
                    unset ($products['product'][$keyproct]['variant'][$keyname]);
                }
            }
        }

        // validation des données internes variants
        $errors = $this->validate_datas($products);

        if (strlen($errors) == 0)
        {
            $this->process_table_data($products);
            return redirect()->route('product.index')
                ->with(['alert' => 'success', 'message' => 'Data loaded - file is conform to OMEDIS' ]);
        }
        else
        {
            return view('variant.checkfailed', compact('errors'));
        }
    }

    public function convert2odoo(Variant $variant)
    {
        $variant->convert2odoo();
    }



}
