<?php

namespace App\Http\Controllers;

use App\Models\AttributeList;
use App\Models\AttributeListValue;
use Illuminate\Http\Request;
use App\DataTables\AttributeListValueDataTable;
use Illuminate\Support\Facades\Gate;
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
        //
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
}
