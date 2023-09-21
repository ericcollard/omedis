<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\DataTables\UnitDataTable;
use PDOException;
use Illuminate\Support\Facades\URL;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UnitDataTable $dataTable)
    {
        return $dataTable->render('unit.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $action = URL::route('unit.store');
        $method = 'POST';

        $unit = new Unit();
        return view('unit.edit', compact('action','unit', 'method'));
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
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        $action = URL::route('unit.update',['unit' => $unit]);
        $method = 'PATCH';

        return view('unit.edit', compact('action', 'method','unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
