<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\AttributeList;
use App\Models\DataType;
use App\Models\History;
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

    public function todo()
    {
        return view('attribute.todo');
    }
}
