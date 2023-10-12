<?php

namespace App\Http\Controllers;

use App\DataTables\OdooProductValueDataTable;
use App\Models\OdooProductValue;
use Illuminate\Http\Request;

class OdooProductValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OdooProductValueDataTable $dataTable)
    {
        return $dataTable->render('odooproductvalue.index');
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
    public function show(OdooProductValue $odooProductValue)
    {
        return view('odooproductvalue.show', compact('odooProductValue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OdooProductValue $odooProductValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OdooProductValue $odooProductValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OdooProductValue $odooProductValue)
    {
        //
    }
}
