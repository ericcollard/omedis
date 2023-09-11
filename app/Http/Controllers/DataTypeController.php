<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataTypeRequest;
use App\Http\Requests\UpdateDataTypeRequest;
use App\Models\DataType;
use App\DataTables\DataTypeDataTable;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DataType $dataType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataType $dataType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataTypeRequest $request, DataType $dataType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataType $dataType)
    {
        //
    }
}
