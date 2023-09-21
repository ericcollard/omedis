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
                    'name' => 'Wholesale Price',
                    'comment' => 'Standard purchase price excuding VAT',
                    'data_type_id' => 6,
                    'unit_id' => 4,
                    'attribute_list_id' => null,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Retail Price',
                    'comment' => 'Recommanded retail price including VAT',
                    'data_type_id' => 6,
                    'unit_id' => 4,
                    'attribute_list_id' => null,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Pictures',
                    'comment' => 'Product picture links, semi-column separated',
                    'data_type_id' => 2,
                    'unit_id' => 1,
                    'attribute_list_id' => null,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Category',
                    'comment' => 'Commercial category',
                    'data_type_id' => 1,
                    'attribute_list_id' => 6,
                    'unit_id' => null,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'EAN',
                    'comment' => 'EAN code',
                    'data_type_id' => 2,
                    'unit_id' => 1,
                    'attribute_list_id' => null,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Brand',
                    'comment' => 'Product brand',
                    'data_type_id' => 1,
                    'attribute_list_id' => 6,
                    'unit_id' => null,
                ),
        ));
    }
}
