<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\AttributeList;
use App\Models\DataType;
use App\Models\Unit;
use Exception;
use Illuminate\Http\Request;
use App\DataTables\AttributeDataTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use PDOException;


class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AttributeDataTable $dataTable)
    {
        return $dataTable->render('attribute.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('udpate-data');
        $action = URL::route('attribute.store');
        $method = 'POST';

        $attribute = new attribute();
        $attribute->required = false;
        $attributelists = AttributeList::all();
        $units = Unit::all();
        $datatypes = DataType::all();
        return view('attribute.edit', compact('action','attribute', 'method','attributelists','units','datatypes' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('udpate-data');
        $this->validate(request(), [
                'name' => 'required',
                'data_type_id' =>  'required',
                'attribute_list_id' => 'required_if:data_type_id,1',
                'unit_id' => 'required_unless:data_type_id,1'
            ]
        );

        try {
            $data = $request->all();
            $attribute = Attribute::create($data);
            // logique
            $attribute->applyLogic();
            $attribute->save();

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "Impossible to create new data");
        }

        return redirect(route('attribute.index'))->with( ['message' => 'Data created', 'alert' => 'success']);
    }

    public function duplicate(Attribute $attribute)
    {
        $data = [
            'name' => $attribute->name.'-copy',
            'comment' => $attribute->comment,
            'required' => $attribute->required,
            'attribute_list_id' => $attribute->attribute_list_id,
            'unit_id' => $attribute->unit_id,
            'user_id' => $attribute->user_id,
            'data_type_id' => $attribute->data_type_id,
        ];
        $newAttribute = Attribute::create($data);
        return redirect(route('attribute.edit',$newAttribute))->with( ['message' => 'Data duplicated', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {
        return view('attribute.show', compact('attribute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attribute)
    {
        Gate::authorize('udpate-data');
        $action = URL::route('attribute.update',['attribute' => $attribute]);
        $method = 'PATCH';

        $attributelists = AttributeList::all();
        $units = Unit::all();
        $datatypes = DataType::all();
        return view('attribute.edit', compact('action', 'method','attribute','attributelists','units','datatypes'  ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attribute $attribute)
    {
        Gate::authorize('udpate-data');
        $request->validate([
            'name' => 'required',
            'data_type_id' =>  'required',
            'attribute_list_id' => 'required_if:data_type_id,1',
            'unit_id' => 'required_unless:data_type_id,1'
        ]);


        $attribute->name = $request->name;
        $attribute->comment = $request->comment;
        $attribute->required = $request->required;
        if (! $request->required)
            $attribute->required = 0;
        $attribute->attribute_list_id = $request->attribute_list_id;
        $attribute->unit_id = $request->unit_id;
        $attribute->data_type_id = $request->data_type_id;

        // logique
        $attribute->applyLogic();

        $attribute->save();

        return redirect()->route('attribute.index')
            ->with(['alert' => 'success', 'message' => 'Data updated' ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        Gate::authorize('udpate-data');
        try{
            $attribute->delete();
        } catch(PDOException $e)
        {
            return redirect(route('attribute.index'))->with( ['message' => 'Data used - impossible to remove', 'alert' => 'danger']);
        }
        $attribute->delete();
        return redirect(route('attribute.index'))->with( ['message' => 'Data removed', 'alert' => 'success']);
    }

    public function csvsample()
    {

        $lines = [];
        $row = 0;
        $stop =0;

        $filepath = '/public/sample.csv';

        if (!Storage::exists($filepath))
        {
            abort(404, "Impossible to find sample.csv file");
        }


        $filename = storage_path('app'.$filepath);
        $fileStream = fopen($filename, "r");

        while (($data = fgetcsv($fileStream, 1000, ",")) !== FALSE) {
            $num = count($data);
            $lines[] = $data;
        }
        fclose($fileStream);



        // Vérification de la bonn lecture du csv
        $sizeTitle = count($lines[0]);
        foreach ($lines as $key => $line)
        {
            if ( count($line) != $sizeTitle)
            {
                abort(500, "Line ".$key." has not correct number of items. Waiting for ".$sizeTitle.", found ".count($line)."<br/>".json_encode($line));
            }
        }

        // cartographie des champs utilisés
        $attributes = [];
        foreach ($lines[0] as $key => $fieldname)
        {
            $attribute = Attribute::where('name', $fieldname)->first();
            if (!$attribute)
            {
                abort(500, "Invalid attribute named ".$fieldname);
            }
            $attributes[] = $attribute;
        }

        // vérification des valeurs d'attributs sélection
        $errors = "";
        foreach ($attributes as $attribute_key => $attribute)
        {
            // champ obligatoire
            if ($attribute->required == 1)
            {
                foreach (array_slice($lines,1) as $key_line => $line)
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
                    $listValues = ($attribute->attributeList->attributeListValues->pluck('name')->toArray());
                    // balayage des lignes
                    foreach (array_slice($lines,1) as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            // vérifier que la valeur est bien dans $listValues
                            if (! $pos = array_search($lineValue, $listValues)) {
                                // valeur non valide
                                $errors.= "<br/>Invalid value '".$lineValue."' for ".$attribute->name." attribute, line #".$key_line;
                            }
                        }
                    }
                    break;
                case "string":
                    foreach (array_slice($lines,1) as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            if (strlen($lineValue) >= 256)
                            {
                                $errors.= "<br/>String too long '".$lineValue."' for ".$attribute->name." attribute, line #".$key_line;
                            }
                        }
                    }
                    break;
                case "boolean":
                    foreach (array_slice($lines,1) as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            if ($lineValue != '1' and $lineValue !='0')
                            {
                                $errors.= "<br/>Invalid boolean value '".$lineValue."' for ".$attribute->name." attribute : should be 1 or 0, line #".$key_line;
                            }
                        }
                    }
                    break;
                case "integer":
                    foreach (array_slice($lines,1) as $key_line => $line)
                    {
                        $lineValue = $line[$attribute_key];
                        if (strlen($lineValue) > 0)
                        {
                            if (!is_numeric($lineValue))
                            {
                                $errors.= "<br/>Invalid integer value '".$lineValue."' for ".$attribute->name." attribute : should be numeric, line #".$key_line;
                            }
                            $lineValue = (float)$lineValue;
                            if ((int)$lineValue != $lineValue)
                            {
                                $errors.= "<br/>Invalid integer value '".$lineValue."' for ".$attribute->name." attribute : should not have decimal part, line #".$key_line;
                            }
                            if ((float) $lineValue > 2147483647)
                            {
                                $errors.= "<br/>Invalid integer value '".$lineValue."' for ".$attribute->name." attribute : should be less than 2147483647, line #".$key_line;
                            }
                        }
                    }
                    break;
                case "float":
                    foreach (array_slice($lines,1) as $key_line => $line)
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
                            $pos = strpos($lineValue,'.');
                            if ($pos >0) {
                                $decimalPart = substr($lineValue,$pos+1);
                                if (strlen($decimalPart) > 4)
                                {
                                    $errors.= "<br/>Invalid float value '".$lineValue."' for ".$attribute->name." attribute : max 4 digits decimal part, line #".$key_line;
                                }
                            }
                        }
                    }
                    break;
                case "money":
                    foreach (array_slice($lines,1) as $key_line => $line)
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
                            $pos = strpos($lineValue,'.');
                            if ($pos >0) {
                                $decimalPart = substr($lineValue,$pos+1);
                                if (strlen($decimalPart) > 2)
                                {
                                    $errors.= "<br/>Invalid float value '".$lineValue."' for ".$attribute->name." attribute : max 2 digits decimal part, line #".$key_line;
                                }
                            }
                        }
                    }
                    break;
            }
        }

        return view('attribute.csvsample', compact('lines','attributes','errors'));
    }
}
