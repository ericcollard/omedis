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
                'created_at' => '2023-10-12 21:57:50',
                'id' => 1,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => '2',
            ),
            1 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 2,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => '2',
            ),
            2 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 3,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => '2',
            ),
            3 => 
            array (
                'created_at' => '2023-10-12 21:57:51',
                'id' => 4,
                'updated_at' => '2023-10-12 21:57:51',
                'user_id' => '2',
            ),
            4 => 
            array (
                'created_at' => '2023-10-12 21:57:51',
                'id' => 5,
                'updated_at' => '2023-10-12 21:57:51',
                'user_id' => '2',
            ),
        ));
        
        
    }
}