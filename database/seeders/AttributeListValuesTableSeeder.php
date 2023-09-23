<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeListValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_list_values')->delete();
        
        \DB::table('attribute_list_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'black',
                'comment' => NULL,
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'white',
                'comment' => NULL,
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'grey',
                'comment' => NULL,
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'red',
                'comment' => NULL,
                'attribute_list_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'windsurf/board/freeride',
                'comment' => NULL,
                'attribute_list_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}