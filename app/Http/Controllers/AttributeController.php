<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;
use App\DataTables\AttributeDataTable;
use PDOException;
use Illuminate\Support\Facades\URL;


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
        $action = URL::route('attribute.store');
        $method = 'POST';

        $attribute = new attribute();
        return view('attribute.edit', compact('action','attribute', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
                'name' =>  'required',
            ]
        );

        try {

            $data = $request->all();
            $attribute = Attribute::create($data);

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "Impossible to create new data");
        }

        return redirect(route('attribute.index'))->with( ['message' => 'Data created', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {
        echo $attribute->dataType->name;
        echo ($attribute->unit ? $attribute->unit->name : '');
        echo ($attribute->attributeList ? $attribute->attributeList->name : '');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attribute)
    {
        $action = URL::route('attribute.update',['attribute' => $attribute]);
        $method = 'PATCH';

        return view('attribute.edit', compact('action', 'method','attribute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attribute $attribute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        //
    }
}
