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
                'comment' => 'Color name',
                'created_at' => NULL,
                'id' => 1,
                'name' => 'color',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
                'comment' => 'Commercial category name',
                'created_at' => NULL,
                'id' => 2,
                'name' => 'category',
                'updated_at' => '2023-09-23 15:49:33',
                'user_id' => 1,
            ),
            2 => 
            array (
                'comment' => NULL,
                'created_at' => NULL,
                'id' => 3,
                'name' => 'brand',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            3 => 
            array (
                'comment' => 'Clothing size system based on S/M/L',
                'created_at' => NULL,
                'id' => 4,
                'name' => 'size-int',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            4 => 
            array (
            'comment' => 'Clothing size system based on EU system (36/38/40/42)',
                'created_at' => NULL,
                'id' => 5,
                'name' => 'size-eu',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            5 => 
            array (
            'comment' => 'Clothing size system based on UK system (2/4/6/8)',
                'created_at' => NULL,
                'id' => 6,
                'name' => 'size-uk',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            6 => 
            array (
            'comment' => 'Clothing size system based on US system (2/4/6/8)',
                'created_at' => NULL,
                'id' => 7,
                'name' => 'size-us',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            7 => 
            array (
                'comment' => 'options for quantity measurement',
                'created_at' => '2023-10-04 12:25:31',
                'id' => 8,
                'name' => 'uom-options',
                'updated_at' => '2023-10-04 12:27:15',
                'user_id' => 2,
            ),
            8 => 
            array (
                'comment' => 'Supplier company or distributor',
                'created_at' => '2023-10-12 21:11:15',
                'id' => 9,
                'name' => 'supplier',
                'updated_at' => '2023-10-12 21:11:53',
                'user_id' => 2,
            ),
        ));
        
        
    }
}