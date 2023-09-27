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
            1 => 
            array (
                'id' => 2,
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
            2 => 
            array (
                'id' => 3,
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
            3 => 
            array (
                'id' => 4,
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
            4 => 
            array (
                'id' => 5,
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
            5 => 
            array (
                'id' => 6,
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
        ));
        
        
    }
}