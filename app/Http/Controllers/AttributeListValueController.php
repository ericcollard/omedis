<?php

namespace App\Http\Controllers;

use App\Models\AttributeList;
use App\Models\AttributeListValue;
use Illuminate\Http\Request;
use App\DataTables\AttributeListValueDataTable;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create($attributelist = null)
    {
        if ($attributelist) {
            $action = URL::route('attributelistvalue.forlist.store',['attributelist' => $attributelist]);
            $actioncancel = URL::route('attributelistvalue.forlist.index',['attributelist' => $attributelist]);
        }
        else
        {
            $action = URL::route('attributelistvalue.store');
            $actioncancel = URL::route('attributelistvalue.index');
        }

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
        $this->validate(request(), [
                'name' =>  'required',
                'attribute_list_id' =>  'required',
            ]
        );

        try {

            $data = $request->all();
            $attributelistvalue = AttributeListValue::create($data);

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "Impossible to create new data");
        }

        if ($attributelist)
            return redirect(route('attributelistvalue.forlist.index',[$attributelist]))->with( ['message' => 'Data created', 'alert' => 'success']);
        else
            return redirect(route('attributelistvalue.index'))->with( ['message' => 'Data created', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeListValue $attributeListValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttributeListValue $attributelistvalue,$attributelist = null)
    {
        if ($attributelist) {
            $action = URL::route('attributelistvalue.forlist.update',['attributelistvalue' => $attributelistvalue,'attributelist' => $attributelist]);
            $actioncancel = URL::route('attributelistvalue.forlist.index',['attributelist' => $attributelist]);
        }
        else
        {
            $action = URL::route('attributelistvalue.update',['attributelistvalue' => $attributelistvalue]);
            $actioncancel = URL::route('attributelistvalue.index');
        }
         $method = 'PATCH';
        $attributelists = AttributeList::all();
        return view('attributelistvalue.edit', compact('action','actioncancel','method','attributelistvalue','attributelists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttributeListValue $attributeListValue,$attributelist = null)
    {
        $request->validate([
            'name' => 'required',
            'attribute_list_id' =>  'required',
        ]);
        $attributeListValue->name = $request->name;
        $attributeListValue->comment = $request->comment;
        $attributeListValue->attribute_list_id = $request->attribute_list_id;

        $attributeListValue->save();

        if ($attributelist)
            return redirect()->route('attributelistvalue.forlist.index',[$attributelist])
                ->with(['alert' => 'success', 'message' => 'Data updated' ]);
        else
            return redirect()->route('attributelistvalue.index')
            ->with(['alert' => 'success', 'message' => 'Data updated' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttributeListValue $attributeListValue,$attributelist = null)
    {
        try{
            $attributeListValue->delete();
        } catch(PDOException $e)
        {
            return redirect(route('attributelistvalue.index'))->with( ['message' => 'Data used - impossible to remove', 'alert' => 'danger']);

        }
        $attributeListValue->delete();
        if ($attributelist)
            return redirect(route('attributelistvalue.forlist.index',[$attributelist]))->with( ['message' => 'Data removed', 'alert' => 'success']);
        else
            return redirect(route('attributelistvalue.index'))->with( ['message' => 'Data removed', 'alert' => 'success']);

    }
}
