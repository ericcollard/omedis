<?php

namespace App\Http\Controllers;

use App\DataTables\AttributeListValueDataTable;
use App\Models\AttributeList;
use Illuminate\Http\Request;
use App\DataTables\AttributeListDataTable;
use PDOException;
use Illuminate\Support\Facades\URL;


class AttributeListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AttributeListDataTable $dataTable)
    {
        return $dataTable->render('attributelist.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $action = URL::route('attributelist.store');
        $method = 'POST';

        $attributelist = new attributeList();
        return view('attributelist.edit', compact('action','attributelist', 'method'));
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
            $attributelist = AttributeList::create($data);
            // logique
            $attributelist->applyLogic();
            $attributelist->save();

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "Impossible to create new data");
        }

        return redirect(route('attributelist.index'))->with( ['message' => 'Data created', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeList $attributeList)
    {
        dd($attributeList->getValuesSample());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttributeList $attributelist)
    {


        $action = URL::route('attributelist.update',['attributelist' => $attributelist]);
        $method = 'PATCH';

        return view('attributelist.edit', compact('action', 'method','attributelist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttributeList $attributeList)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $attributeList->name = $request->name;
        $attributeList->comment = $request->comment;
        // logique
        $attributeList->applyLogic();
        $attributeList->save();

        return redirect()->route('attributelist.index')
            ->with(['alert' => 'success', 'message' => 'Data updated' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttributeList $attributeList)
    {
        try{
            $attributeList->delete();
        } catch(PDOException $e)
        {
            return redirect(route('attributelist.index'))->with( ['message' => 'Data used - impossible to remove', 'alert' => 'danger']);

        }
        $attributeList->delete();
        return redirect(route('attributelist.index'))->with( ['message' => 'Data removed', 'alert' => 'success']);
    }
}
