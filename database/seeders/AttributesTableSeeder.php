<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'brand',
                'comment' => 'Product brand',
                'required' => 1,
                'attribute_list_id' => 3,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'season',
                'comment' => 'Year validity for the product, for the case where this product is specific to one season.',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 4,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ean',
                'comment' => 'EAN code : unique identifier for one product variant delivered by GS1 autority or similar',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 2,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'sku',
                'comment' => 'SKU code : unique identifier for one product variant for brand internal use',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 2,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'name',
                'comment' => 'Name : official name for trade. Should be as short as possible. Doesnt contain other information that can be found is specialised attribute, like variant data, brand name of year.',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 2,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'category',
                'comment' => 'Commercial category for product classification',
                'required' => 1,
                'attribute_list_id' => 2,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'description-long-fr',
                'comment' => 'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 7,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'description-short-fr',
                'comment' => 'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 7,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'pictures',
                'comment' => 'Product picture links, semicolon separated',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 2,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'wholesale-price',
                'comment' => 'Wholesale Price : Standard purchase price excuding VAT',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 4,
                'data_type_id' => 6,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'retail-price',
                'comment' => 'Retail Price : Recommanded retail price including VAT',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 4,
                'data_type_id' => 6,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'weight',
                'comment' => 'Weight for logistic purpose',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 5,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'size-1',
                'comment' => 'Lenght for logistic purpose',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 2,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'size-2',
                'comment' => 'Wide for logistic purpose',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 2,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'size-3',
                'comment' => 'Height for logistic purpose',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 2,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'discount-b2c',
                'comment' => 'Discounted retail price including VAT',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 4,
                'data_type_id' => 6,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'discount-b2b',
                'comment' => 'Discounted b2b price excluding VAT',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 4,
                'data_type_id' => 6,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'size-m-var',
                'comment' => 'Size in Meters - Variant attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 2,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}