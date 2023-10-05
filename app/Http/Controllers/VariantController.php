<?php

namespace App\Http\Controllers;

use App\DataTables\VariantDataTable;
use App\Models\Attribute;
use App\Models\Variant;
use App\Models\VariantAttributes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

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

    public function decodecsv(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:text,csv|max:2048', //'required|mimes:text/csv|max:2048',
        ]);

        $fileName = time().'-'.$request->file->getClientOriginalName();
        $request->file->storeAs('uploads', $fileName);

        $fileRelPath = 'uploads/'.$fileName;
        $fileFullPath = storage_path('app/'.$fileRelPath);


        if (!Storage::exists($fileRelPath))
        {
            abort(404, "Impossible to find ".$fileRelPath." file");
        }

        // lecture du fichier
        try {
            $fileStream = fopen($fileFullPath, "r");
        }
        catch (\Exception $e) {
            abort(500, "Error when opening ".$filePath."file : ".$e->getMessage());
        }

        $fieldNames = [];
        $lines = [];
        $rowCount = 0;
        while (($data = fgetcsv($fileStream, 1000, ",")) !== FALSE) {
            $rowCount++;
            if ($rowCount == 1)
                $fieldNames =$data;
            else
                $lines[] = $data;
        }
        fclose($fileStream);

        $errors = "";

        // Vérification de la consistance du csv
        $sizeTitle = count($fieldNames);
        foreach ($lines as $key => $line)
        {
            if ( count($line) != $sizeTitle)
            {
                abort(500, "Line ".$key." has not correct number of items. Waiting for ".$sizeTitle.", found ".count($line)."<br/>".json_encode($line));
            }
        }

        // CRéation des variants
        $variantsArr = [];
        for ($i = 1; $i <= $sizeTitle; $i++) {
            $variantsArr[] = [];
        }

        // vérification de présence des champs obligatoires
        $resquiredAttributes = Attribute::where('required', '1')->get();
        foreach ($resquiredAttributes as $key => $resquiredAttribute)
        {
            // vérifier que la valeur est bien dans $listValues
            if (! $pos = array_search($resquiredAttribute->name, $fieldNames)) {
                // valeur non valide
                $errors.= "<br/>Missing required field ".$resquiredAttribute->name;
            }
        }

        // cartographie des champs utilisés
        $attributes = [];
        foreach ($fieldNames as $fieldname)
        {
            $attribute = Attribute::where('name', $fieldname)->first();
            if (!$attribute)
            {
                $errors.= "<br/>Invalid attribute named ".$fieldname;
            }
            $attributes[] = $attribute;
        }

        // vérification des valeurs d'attributs
        $errors = "";
        foreach ($attributes as $attribute_key => $attribute)
        {
            // champ obligatoire
            if ($attribute->required == 1)
            {
                foreach ($lines as $key_line => $line)
                {
                    $lineValue = $line[$attribute_key];
                    if (strlen($lineValue) == 0)
                    {
                        $errors.= "<br/>Required value for ".$attribute->name." attribute, line #".$key_line;
                    }
                }
            }

            switch ($attribute->dataType->name) {
                case "selection":
                    // valeurs possibles pour cet attribut
                    $listValues = ($attribute->attributeList->attributeListValues->pluck('name','id')->toArray());
                    // balayage des lignes
                    foreach ($lines as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            // vérifier que la valeur est bien dans $listValues
                            if (! $value_key = array_search($lineValue, $listValues)) {
                                // valeur non valide
                                $errors.= "<br/>Invalid value '".$lineValue."' for ".$attribute->name." attribute, line #".$key_line;
                            }
                            else
                            {
                                $variantAttribute = [
                                    'attribute_id' => $attribute->id,
                                    'value_int' => $value_key
                                ];
                                $variantsArr[$key_line][] = $variantAttribute;
                            }
                        }
                    }
                    break;
                case "string":
                    foreach ($lines as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            if (strlen($lineValue) >= 256)
                            {
                                $errors.= "<br/>String too long '".$lineValue."' for ".$attribute->name." attribute, line #".$key_line;
                            }
                            else
                            {
                                $variantAttribute = [
                                    'attribute_id' => $attribute->id,
                                    'value_str' => $lineValue
                                ];
                                $variantsArr[$key_line][] = $variantAttribute;
                            }
                        }
                    }
                    break;
                case "text":
                    foreach ($lines as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            $variantAttribute = [
                                'attribute_id' => $attribute->id,
                                'value_txt' => $lineValue
                            ];
                            $variantsArr[$key_line][] = $variantAttribute;
                        }
                    }
                    break;
                case "boolean":
                    foreach ($lines as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            if ($lineValue != '1' and $lineValue !='0')
                            {
                                $errors.= "<br/>Invalid boolean value '".$lineValue."' for ".$attribute->name." attribute : should be 1 or 0, line #".$key_line;
                            }
                            else
                            {
                                $variantAttribute = [
                                    'attribute_id' => $attribute->id,
                                    'value_int' => $lineValue
                                ];
                                $variantsArr[$key_line][] = $variantAttribute;
                            }
                        }
                    }
                    break;
                case "integer":
                    foreach ($lines as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            if (!is_numeric($lineValue))
                            {
                                $errors.= "<br/>Invalid integer value '".$lineValue."' for ".$attribute->name." attribute : should be numeric, line #".$key_line;
                            }
                            elseif ((int)$lineValue != (float)$lineValue)
                            {
                                $errors.= "<br/>Invalid integer value '".$lineValue."' for ".$attribute->name." attribute : should not have decimal part, line #".$key_line;
                            }
                            elseif ((float) $lineValue > 2147483647)
                            {
                                $errors.= "<br/>Invalid integer value '".$lineValue."' for ".$attribute->name." attribute : should be less than 2147483647, line #".$key_line;
                            }
                            else
                            {
                                $variantAttribute = [
                                    'attribute_id' => $attribute->id,
                                    'value_int' => (int)$lineValue
                                ];
                                $variantsArr[$key_line][] = $variantAttribute;
                            }
                        }
                    }
                    break;
                case "float":
                    foreach ($lines as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            if (strpos($lineValue,',') !=0) {
                                $errors.= "<br/>Invalid float value '".$lineValue."' for ".$attribute->name." attribute : comma character not allowed (seperator should be .)', line #".$key_line;
                            }
                            elseif (strpos($lineValue,"'") !=0) {
                                $errors.= "<br/>Invalid float value '".$lineValue."' for ".$attribute->name." attribute : quote character not allowed', line #".$key_line;
                            }
                            elseif (!is_numeric($lineValue))
                            {
                                $errors.= "<br/>Invalid float value '".$lineValue."' for ".$attribute->name." attribute : should be numeric, line #".$key_line;
                            }
                            else
                            {
                                $decimalPart = "";
                                $pos = strpos($lineValue,'.');
                                if ($pos >0)
                                    $decimalPart = substr($lineValue,$pos+1);
                                if (strlen($decimalPart) > 4)
                                {
                                    $errors.= "<br/>Invalid float value '".$lineValue."' for ".$attribute->name." attribute : max 4 digits decimal part, line #".$key_line;
                                }
                                else
                                {
                                    $variantAttribute = [
                                        'attribute_id' => $attribute->id,
                                        'value_float' => (float)$lineValue
                                    ];
                                    $variantsArr[$key_line][] = $variantAttribute;
                                }
                            }

                        }
                    }
                    break;
                case "money":
                    foreach ($lines as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            if (strpos($lineValue,',') !=0) {
                                $errors.= "<br/>Invalid money value '".$lineValue."' for ".$attribute->name." attribute : comma character not allowed (seperator should be .)', line #".$key_line;
                            }
                            elseif (strpos($lineValue,"'") !=0) {
                                $errors.= "<br/>Invalid money value '".$lineValue."' for ".$attribute->name." attribute : quote character not allowed', line #".$key_line;
                            }
                            elseif (!is_numeric($lineValue))
                            {
                                $errors.= "<br/>Invalid money value '".$lineValue."' for ".$attribute->name." attribute : should be numeric, line #".$key_line;
                            }
                            else
                            {
                                $decimalPart = "";
                                $pos = strpos($lineValue,'.');
                                if ($pos >0)
                                    $decimalPart = substr($lineValue,$pos+1);
                                if (strlen($decimalPart) > 2)
                                {
                                    $errors.= "<br/>Invalid money value '".$lineValue."' for ".$attribute->name." attribute : max é digits decimal part, line #".$key_line;
                                }
                                else
                                {
                                    $variantAttribute = [
                                        'attribute_id' => $attribute->id,
                                        'value_float' => (float)$lineValue
                                    ];
                                    $variantsArr[$key_line][] = $variantAttribute;
                                }
                            }
                        }
                    }
                    break;
            }
        }

        if (strlen($errors) == 0)
        {
            // pas d'erreurs

            // Supprimer les données existantes
            $variants = Variant::where('user_id' ,'=', Auth::id())->get();
            foreach ($variants as $variant)
            {
                $variant->delete();
            }

            // créer les nouveaux variant
            foreach ($variantsArr as $key_line => $variantArr)
            {
                $variant = new Variant(['user_id' => Auth::id()]);
                $variant->save();
                foreach ($variantArr as $variantAttributeValueArr)
                {
                    $variantAttributeValueArr['variant_id'] = $variant->id;
                    $variantAttributeValue = new VariantAttributes($variantAttributeValueArr);
                    $variantAttributeValue -> save();
                }
            }
            return redirect()->route('variant.index')
                ->with(['alert' => 'success', 'message' => 'Data loaded - file is conform to OMEDIS' ]);
        }
        else {
            return view('variant.checkfailed', compact('errors'));
        }

    }
}
