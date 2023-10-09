<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '2',
                'created_at' => '2023-10-09 19:51:51',
                'updated_at' => '2023-10-09 19:51:51',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '2',
                'created_at' => '2023-10-09 19:51:51',
                'updated_at' => '2023-10-09 19:51:51',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '2',
                'created_at' => '2023-10-09 19:51:51',
                'updated_at' => '2023-10-09 19:51:51',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => '2',
                'created_at' => '2023-10-09 19:51:51',
                'updated_at' => '2023-10-09 19:51:51',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => '2',
                'created_at' => '2023-10-09 19:51:51',
                'updated_at' => '2023-10-09 19:51:51',
            ),
        ));
        
        
    }
}