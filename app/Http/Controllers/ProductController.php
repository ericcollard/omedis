<?php

namespace App\Http\Controllers;

use App\DataTables\ProductDataTable;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\NullableType;
use Illuminate\Support\Facades\Log;

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
        // Données issues du modèle importé
        $master_data = [];
        $variant_ids = DB::table('variants')->where('product_id',$product->id)->pluck('id');

        foreach ($variant_ids as $variant_id) {
             $imported_variant_data = [];
             $variant_attributes = DB::table('variant_attributes')
                 ->where('variant_id',$variant_id)
                 ->join('attributes', 'variant_attributes.attribute_id', '=', 'attributes.id')
                 ->join('data_types', 'data_types.id', '=', 'attributes.data_type_id')
                 ->select('attributes.name as attribute_name',
                     'attributes.attribute_list_id as attribute_list_id',
                     'data_types.name as datatype_name',
                     'variant_attributes.value_str',
                     'variant_attributes.value_int',
                     'variant_attributes.value_txt',
                     'variant_attributes.value_float')
                 ->get();
                foreach ($variant_attributes as $variant_attribute)
                {
                    $value = null;
                    switch ($variant_attribute->datatype_name) {
                        case "selection":
                            $attr_value = DB::table('attribute_list_values')
                                ->where('attribute_list_values.attribute_list_id',$variant_attribute->attribute_list_id)
                                ->where('attribute_list_values.id',$variant_attribute->value_int)
                                ->select('name')->first();
                            $value = $attr_value->name;
                            break;
                        case "string":
                            $value = $variant_attribute->value_str;
                            break;
                        case "integer":
                            $value = $variant_attribute->value_int;
                            break;
                        case "float":
                            $value = $variant_attribute->value_float;
                            break;
                        case "boolean":
                            $value = $variant_attribute->value_int;
                            break;
                        case "money":
                            $value = $variant_attribute->value_float;
                            break;
                        case "text":
                            $value = $variant_attribute->value_txt;
                            break;
                        case "url":
                            $value = $variant_attribute->value_txt;
                            break;
                    }
                    $imported_variant_data[] = [$variant_attribute->attribute_name,$value ];

                }
            $master_data[] = $imported_variant_data;
            log::debug($imported_variant_data);
        }



        $odoo_data = [];
        $odoo_product_data = [];
        $odoo_product_values = DB::table('odoo_product_values')
            ->where('product_id',$product->id)
            ->join('odoo_models', 'odoo_models.id', '=', 'odoo_product_values.odoo_model_id')
            ->select('value','odoo_models.name')
            ->get();

        foreach ($odoo_product_values as $odoo_product_value) {
            $odoo_product_data[] = [$odoo_product_value->name, $odoo_product_value->value];
        }

        $odoo_variants_data = [];
        $variant_ids = DB::table('variants')->where('product_id',$product->id)->pluck('id');
        foreach ($variant_ids as $variant_id) {
            $odoo_variant_data = [];
            $odoo_variant_values = DB::table('odoo_variant_values')
                ->where('variant_id',$variant_id)
                ->join('odoo_models', 'odoo_models.id', '=', 'odoo_variant_values.odoo_model_id')
                ->select('value','odoo_models.name','attribute_name')
                ->get();
            foreach ($odoo_variant_values as $odoo_variant_value) {
                $odoo_variant_data[] = [$odoo_variant_value->name, $odoo_variant_value->value, $odoo_variant_value->attribute_name ];
            }
            $odoo_variants_data[] = $odoo_variant_data;
        }



        //var_dump($odoo_variants_data);

        return view('product.show', compact('product','master_data','odoo_product_data','odoo_variants_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        Gate::authorize('udpate-data');
        $action = URL::route('product.update',['product' => $product]);
        $method = 'PATCH';

        return view('product.edit', compact('action', 'method','product'));
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


    public function convert2odooAll()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->convert2odoo();
        }

        return redirect()->route('product.index')
            ->with(['alert' => 'success', 'message' => 'Odoo data updated' ]);
    }


    public function convert2odoo(Product $product)
    {
        $product->convert2odoo();
        return redirect(route('product.show',$product))->with( ['message' => 'Data updated', 'alert' => 'success']);
    }


}
