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
    public function index(AttributeListValueDataTable $dataTable)
    {
        return $dataTable->render('attributelistvalue.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $action = URL::route('attributelistvalue.store');
        $method = 'POST';

        $attributelistvalue = new attributeListValue();
        $attributelists = AttributeList::all();
        return view('attributelistvalue.edit', compact('action','attributelistvalue', 'method','attributelists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        return redirect(route('attributelistvalue.index'))->with( ['message' => 'Data created', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeListValue $attributeListValue)
    {
        echo "test";
        echo $attributeListValue->name;
        echo $attributeListValue->comment;
        dd($attributeListValue->attributeList->name) ;
        //dd($attributeListValue);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttributeListValue $attributelistvalue)
    {
        $action = URL::route('attributelistvalue.update',['attributelistvalue' => $attributelistvalue]);
        $method = 'PATCH';
        $attributelists = AttributeList::all();
        return view('attributelistvalue.edit', compact('action', 'method','attributelistvalue','attributelists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttributeListValue $attributeListValue)
    {
        $request->validate([
            'name' => 'required',
            'attribute_list_id' =>  'required',
        ]);

        $attributeListValue->name = $request->name;
        $attributeListValue->comment = $request->comment;
        $attributeListValue->attribute_list_id = $request->attribute_list_id;

        $attributeListValue->save();

        return redirect()->route('attributelistvalue.index')
            ->with(['alert' => 'success', 'message' => 'Data updated' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttributeListValue $attributeListValue)
    {
        //
    }
}
