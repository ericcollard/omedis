<?php

namespace App\Http\Controllers;

use App\DataTables\ProductDataTable;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('product.index');
    }

    public function truncate()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('variant_attributes')->truncate();
        DB::table('variants')->truncate();
        DB::table('products')->truncate();
        DB::table('odoo_variant_values')->truncate();
        DB::table('odoo_product_values')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        return redirect()->route('product.index')
            ->with(['alert' => 'success', 'message' => 'All product data truncated' ]);
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
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function convert2odoo(Product $product)
    {
        $product->convert2odoo();
        return redirect(route('product.show',$product))->with( ['message' => 'Data updated', 'alert' => 'success']);
    }


}
