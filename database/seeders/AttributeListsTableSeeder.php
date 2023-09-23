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
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Brand',
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
