<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VariantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('variants')->delete();
        
        \DB::table('variants')->insert(array (
            0 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 1,
                'product_id' => 1,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            1 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 2,
                'product_id' => 1,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            2 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 3,
                'product_id' => 1,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            3 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 4,
                'product_id' => 1,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            4 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 5,
                'product_id' => 2,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            5 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 6,
                'product_id' => 2,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            6 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 7,
                'product_id' => 2,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            7 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 8,
                'product_id' => 2,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            8 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 9,
                'product_id' => 3,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            9 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 10,
                'product_id' => 3,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            10 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 11,
                'product_id' => 3,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            11 => 
            array (
                'created_at' => '2023-10-12 21:57:50',
                'id' => 12,
                'product_id' => 3,
                'updated_at' => '2023-10-12 21:57:50',
                'user_id' => 2,
            ),
            12 => 
            array (
                'created_at' => '2023-10-12 21:57:51',
                'id' => 13,
                'product_id' => 3,
                'updated_at' => '2023-10-12 21:57:51',
                'user_id' => 2,
            ),
            13 => 
            array (
                'created_at' => '2023-10-12 21:57:51',
                'id' => 14,
                'product_id' => 3,
                'updated_at' => '2023-10-12 21:57:51',
                'user_id' => 2,
            ),
            14 => 
            array (
                'created_at' => '2023-10-12 21:57:51',
                'id' => 15,
                'product_id' => 3,
                'updated_at' => '2023-10-12 21:57:51',
                'user_id' => 2,
            ),
            15 => 
            array (
                'created_at' => '2023-10-12 21:57:51',
                'id' => 16,
                'product_id' => 3,
                'updated_at' => '2023-10-12 21:57:51',
                'user_id' => 2,
            ),
            16 => 
            array (
                'created_at' => '2023-10-12 21:57:51',
                'id' => 17,
                'product_id' => 4,
                'updated_at' => '2023-10-12 21:57:51',
                'user_id' => 2,
            ),
            17 => 
            array (
                'created_at' => '2023-10-12 21:57:51',
                'id' => 18,
                'product_id' => 5,
                'updated_at' => '2023-10-12 21:57:51',
                'user_id' => 2,
            ),
        ));
        
        
    }
}