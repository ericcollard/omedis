<?php

namespace App\Http\Controllers;

use App\DataTables\OdooModelDataTable;
use App\Models\OdooModel;
use Illuminate\Http\Request;

class OdooModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OdooModelDataTable $dataTable)
    {
        return $dataTable->render('odoomodel.index');
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
    public function show(OdooModel $odooModel)
    {
        return view('odoomodel.show', compact('odooModel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OdooModel $odooModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OdooModel $odooModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OdooModel $odooModel)
    {
        //
    }
}
