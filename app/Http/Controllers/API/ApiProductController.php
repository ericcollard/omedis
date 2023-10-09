<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // On récupère tous les utilisateurs
        $products = [
            0 => [
                "brand" => "duotone",
                "season" => 2024,
                "name" => "Super HERO",
                "category" => "Tous / Windsurf / Voile",
                "wholesale" => 679.82,
                "variants" => [
                    0 => [
                        "sku" => "1458744U45",
                        "ean" => "9100025587445",
                        "size-m2" => "4.7",
                        "retail" => 1100.99
                        ],
                    1 => [
                        "sku" => "1458744U46",
                        "ean" => "9100025587446",
                        "size-m2" => "5.0",
                        "retail" => 1149.99
                        ]
                ]
            ],
            1 => [
                "brand" => "vola",
                "name" => "Ergorazor",
                "category" => "Tous / Windsurf / Voile",
                "wholesale" => 45.82,
                "retail" => 80.99
            ]
        ];

        // On retourne les informations des utilisateurs en JSON
        return response()->json($products);
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
        return response()->json($product);
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
}
