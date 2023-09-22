<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeListValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('attribute_list_values')->delete();

        \DB::table('attribute_list_values')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => '1.0',
                    'comment' => '1.0 square meter',
                    'attribute_list_id' => 1
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => '1.1',
                    'attribute_list_id' => 1,
                    'comment' => null,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => '1.2',
                    'attribute_list_id' => 1,
                    'comment' => null,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => '1.3',
                    'attribute_list_id' => 1,
                    'comment' => null,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Black',
                    'attribute_list_id' => 2,
                    'comment' => null,
                ),
        ));
    }
}
