<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('attribute_lists')->delete();

        \DB::table('attribute_lists')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'color',
                'comment' => 'Color name',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'category',
                'comment' => 'Commercial category name',
                'created_at' => NULL,
                'updated_at' => '2023-09-23 15:49:33',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'brand',
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'size-int',
                    'comment' => 'Clothing size system based on S/M/L',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'size-eu',
                    'comment' => 'Clothing size system based on EU system (36/38/40/42)',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'size-uk',
                    'comment' => 'Clothing size system based on UK system (2/4/6/8)',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'size-us',
                    'comment' => 'Clothing size system based on US system (2/4/6/8)',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));


    }
}
