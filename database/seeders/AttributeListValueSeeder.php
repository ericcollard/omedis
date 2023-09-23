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
                    'name' => 'black',
                    'comment' => null,
                    'attribute_list_id' => 1
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'white',
                    'attribute_list_id' => 1,
                    'comment' => null,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'grey',
                    'attribute_list_id' => 1,
                    'comment' => null,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'red',
                    'attribute_list_id' => 1,
                    'comment' => null,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'windsurf/board/freeride',
                    'attribute_list_id' => 2,
                    'comment' => null,
                ),
        ));
    }
}
