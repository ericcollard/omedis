<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('attributes')->delete();

        \DB::table('attributes')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'wholesale-price',
                    'required' => true,
                    'comment' => 'Wholesale Price : Standard purchase price excuding VAT',
                    'data_type_id' => 6,
                    'unit_id' => 4,
                    'attribute_list_id' => null,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'retail-price',
                    'required' => true,
                    'comment' => 'Retail Price : Recommanded retail price including VAT',
                    'data_type_id' => 6,
                    'unit_id' => 4,
                    'attribute_list_id' => null,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'pictures',
                    'required' => false,
                    'comment' => 'Product picture links, semicolon separated',
                    'data_type_id' => 2,
                    'unit_id' => 1,
                    'attribute_list_id' => null,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'category',
                    'required' => true,
                    'comment' => 'Commercial category for product classification',
                    'data_type_id' => 1,
                    'attribute_list_id' => 2,
                    'unit_id' => null,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'ean',
                    'required' => true,
                    'comment' => 'EAN code : unique identifier for one product variant delivered by GS1 autority or similar',
                    'data_type_id' => 2,
                    'unit_id' => 1,
                    'attribute_list_id' => null,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'brand',
                    'required' => true,
                    'comment' => 'Product brand',
                    'data_type_id' => 1,
                    'attribute_list_id' => 3,
                    'unit_id' => null,
                ),
        ));
    }
}
