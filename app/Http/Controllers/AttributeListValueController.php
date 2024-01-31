<?php

namespace App\Http\Controllers;

use App\Models\AttributeList;
use App\Models\AttributeListValue;
use Illuminate\Http\Request;
use App\DataTables\AttributeListValueDataTable;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use PDOException;
use Illuminate\Support\Facades\URL;

class AttributeListValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AttributeListValueDataTable $dataTable,$attributelist = null)
    {
        if ($attributelist)
            $dataTable->with('attributelist', $attributelist);

        return $dataTable->render('attributelistvalue.index',compact('attributelist'));
    }

    public function import($attributelist)
    {
        return view('attributelistvalue.uploadcsv',compact('attributelist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($attributelist = null)
    {
        Gate::authorize('udpate-data');
        $action = URL::route('attributelistvalue.store',['attributelist' => $attributelist]);
        $actioncancel = URL::route('attributelistvalue.index',['attributelist' => $attributelist]);
        $method = 'POST';

        $attributelistvalue = new attributeListValue();
        $attributelists = AttributeList::all();

        // initialiser la valeur si elle est fournie en argument
        if ($attributelist)
            $attributelistvalue->attribute_list_id = $attributelist->id;

        return view('attributelistvalue.edit', compact('action','actioncancel','attributelistvalue', 'method','attributelists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$attributelist = null)
    {
        Gate::authorize('udpate-data');
        $this->validate(request(), [
                'name' =>  'required',
                'attribute_list_id' =>  'required',
            ]
        );

        try {

            $data = $request->all();
            $attributelistvalue = AttributeListValue::create($data);

            // logique
            $attributelistvalue->applyLogic();
            $attributelistvalue->save();


        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "Impossible to create new data");
        }
        return redirect(route('attributelistvalue.index',[$attributelist]))->with( ['message' => 'Data created', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeListValue $attributeListValue)
    {
        return view('attributelistvalue.show', compact('attributeListValue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttributeListValue $attributelistvalue,$attributelist = null)
    {
        Gate::authorize('udpate-data');
        $action = URL::route('attributelistvalue.update',['attributelistvalue' => $attributelistvalue,'attributelist' => $attributelist]);
        $actioncancel = URL::route('attributelistvalue.index',['attributelist' => $attributelist]);
        $method = 'PATCH';
        $attributelists = AttributeList::all();
        return view('attributelistvalue.edit', compact('action','actioncancel','method','attributelistvalue','attributelists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttributeListValue $attributeListValue,$attributelist = null)
    {
        Gate::authorize('udpate-data');
        $request->validate([
            'name' => 'required',
            'attribute_list_id' =>  'required',
        ]);
        $attributeListValue->name = $request->name;
        $attributeListValue->comment = $request->comment;
        $attributeListValue->attribute_list_id = $request->attribute_list_id;
        $attributeListValue->odoo_name = $request->odoo_name;
        // logique
        $attributeListValue->applyLogic();
        $attributeListValue->save();

        return redirect()->route('attributelistvalue.index',[$attributelist])
                ->with(['alert' => 'success', 'message' => 'Data updated' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttributeListValue $attributeListValue,$attributelist = null)
    {
        Gate::authorize('udpate-data');
        try{
            $attributeListValue->delete();
        } catch(PDOException $e)
        {
            return redirect(route('attributelistvalue.index',[$attributelist]))->with( ['message' => 'Data used - impossible to remove', 'alert' => 'danger']);

        }
        $attributeListValue->delete();
        return redirect(route('attributelistvalue.index',[$attributelist]))->with( ['message' => 'Data removed', 'alert' => 'success']);

    }

    public function destroyall(AttributeList $attributelist)
    {
        Gate::authorize('udpate-data');
        $values = $attributelist->attributeListValues()->get();

        //var_dump($values);
        //return;
        foreach($values as $attributeListValue)
        {
            try {
                $attributeListValue->delete();
                    }
            catch(PDOException $e)
            {
                return redirect(route('attributelistvalue.index',[$attributelist]))->with( ['message' => 'Data used - impossible to remove', 'alert' => 'danger']);

            }
        }
        return redirect(route('attributelistvalue.index',[$attributelist]))->with( ['message' => 'All values removed', 'alert' => 'success']);
    }


    public function decodecsv(Request $request,$attributelist)
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

        // lecture des donnés
        $records->rewind();
        $data = [];
        $variant_counter = 0;

        $cntUpdateId = 0;
        $cntUpdateOdooName = 0;
        $cntUpdateName = 0;
        $cntCreate = 0;

        foreach ($records as $record) {
            $variant_counter++;
            $data[$variant_counter] = [];

            // nettoyage du record
            foreach ($record as $attributeName => $attributeValue) {
                if ($attributeValue == "") {
                    unset ($record[$attributeName]);
                }
            }
            info($record);

            $done_flag = false;
            if (array_key_exists('id',$record))
            {
                $attributeListValue = AttributeListValue::where('id', $record['id'])
                    ->where('attribute_list_id', $attributelist->id)->first();
                if ($attributeListValue) {
                    // mise à jour à partir de l'ID
                    info("update");
                    info($record);
                    $done_flag = true;
                    $attributeListValue->update($record);
                    $cntUpdateId ++;
                }
                else
                {
                    unset($record['id']);
                    info("supression id");
                }
            }

            if (array_key_exists('odoo_name',$record) and ! $done_flag)
            {
                $attributeListValue = AttributeListValue::where('odoo_name', $record['odoo_name'])
                    ->where('attribute_list_id', $attributelist->id)->first();
                if ($attributeListValue) {
                    // mise à jour à partir de l'ID
                    info("update from odoo_name");
                    $done_flag = true;
                    info($record);
                    $attributeListValue->update($record);
                    $cntUpdateOdooName ++;
                }
            }

            if (array_key_exists('name',$record) and ! $done_flag)
            {
                $attributeListValue = AttributeListValue::where('name', $record['name'])
                    ->where('attribute_list_id', $attributelist->id)->first();
                if ($attributeListValue) {
                    // mise à jour à partir de l'ID
                    info("update from name");
                    $done_flag = true;
                    info($record);
                    $attributeListValue->update($record);
                    $cntUpdateName ++;
                }
            }

            if (!$done_flag)
            {
                $record['attribute_list_id'] = $attributelist->id;
                info("create ");
                info($record);
                $done_flag = true;
                AttributeListValue::create($record);
                $cntCreate++;
            }


        }
        return view('attributelistvalue.uploadcsvdone', compact('cntUpdateId','cntUpdateOdooName','cntUpdateName','cntCreate','attributelist'));
    }


}
