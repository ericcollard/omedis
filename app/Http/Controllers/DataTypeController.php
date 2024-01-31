<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataTypeRequest;
use App\Http\Requests\UpdateDataTypeRequest;
use App\Models\DataType;
use App\DataTables\DataTypeDataTable;
use Illuminate\Support\Facades\Gate;
use PDOException;
use Illuminate\Support\Facades\URL;

class DataTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DataTypeDataTable $dataTable)
    {
        return $dataTable->render('datatype.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('udpate-data');
        $action = URL::route('datatype.store');
        $method = 'POST';

        $datatype = new DataType();
        return view('datatype.edit', compact('action','datatype', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataTypeRequest $request)
    {
        Gate::authorize('udpate-data');
        $this->validate(request(), [
                'name' =>  'required',
                'validation_str'=>  'required',
            ]
        );

        try {

            $data = $request->all();
            $datatype = DataType::create($data);
            // logique
            $datatype->applyLogic();
            $datatype->save();

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "Impossible to create new data");
        }

        return redirect(route('datatype.index'))->with( ['message' => 'Data created', 'alert' => 'success']);

    }

    /**
     * Display the specified resource.
     */
    public function show(DataType $datatype)
    {
        return view('datatype.show', ['datatype' => $datatype]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataType $datatype)
    {
        Gate::authorize('udpate-data');
        $action = URL::route('datatype.update',['datatype' => $datatype]);
        $method = 'PATCH';

        return view('datatype.edit', compact('action', 'method','datatype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataTypeRequest $request, DataType $datatype)
    {
        Gate::authorize('udpate-data');
        $request->validate([
            'name' => 'required',
            'validation_str'=>  'required',
        ]);

        $datatype->name = $request->name;
        $datatype->comment = $request->comment;
        $datatype->validation_str = $request->validation_str;
        // logique
        $datatype->applyLogic();
        $datatype->save();

        return redirect()->route('datatype.index')
            ->with(['alert' => 'success', 'message' => 'Data updated' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataType $datatype)
    {
        Gate::authorize('udpate-data');
        try{
            $datatype->delete();
        } catch(PDOException $e)
        {
            return redirect(route('datatype.index'))->with( ['message' => 'Data used - impossible to remove', 'alert' => 'danger']);

        }
        $datatype->delete();
        return redirect(route('datatype.index'))->with( ['message' => 'Data removed', 'alert' => 'success']);

    }
}
