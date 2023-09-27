<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\DataTables\UnitDataTable;
use Illuminate\Support\Facades\Gate;
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
        Gate::authorize('udpate-data');
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
        Gate::authorize('udpate-data');
        $this->validate(request(), [
                'name' =>  'required',
            ]
        );

        try {

            $data = $request->all();
            $unit = Unit::create($data);
            // logique
            $unit->applyLogic();
            $unit->save();


        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "Impossible to create new data");
        }

        return redirect(route('unit.index'))->with( ['message' => 'Data created', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        return view('unit.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        Gate::authorize('udpate-data');

        $action = URL::route('unit.update',['unit' => $unit]);
        $method = 'PATCH';

        return view('unit.edit', compact('action', 'method','unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        Gate::authorize('udpate-data');
        $request->validate([
            'name' => 'required',
        ]);

        $unit->name = $request->name;
        $unit->comment = $request->comment;
        // logique
        $unit->applyLogic();
        $unit->save();

        return redirect()->route('unit.index')
            ->with(['alert' => 'success', 'message' => 'Data updated' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        Gate::authorize('udpate-data');
        try{
            $unit->delete();
        } catch(PDOException $e)
        {
            return redirect(route('unit.index'))->with( ['message' => 'Data used - impossible to remove', 'alert' => 'danger']);

        }
        $unit->delete();
        return redirect(route('unit.index'))->with( ['message' => 'Data removed', 'alert' => 'success']);
    }
}
