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
                'id' => 1,
                'user_id' => 2,
                'product_id' => 1,
                'created_at' => '2024-01-03 09:54:31',
                'updated_at' => '2024-01-03 09:54:31',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'product_id' => 1,
                'created_at' => '2024-01-03 09:54:31',
                'updated_at' => '2024-01-03 09:54:31',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'product_id' => 1,
                'created_at' => '2024-01-03 09:54:32',
                'updated_at' => '2024-01-03 09:54:32',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'product_id' => 1,
                'created_at' => '2024-01-03 09:54:32',
                'updated_at' => '2024-01-03 09:54:32',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'product_id' => 2,
                'created_at' => '2024-01-03 09:54:32',
                'updated_at' => '2024-01-03 09:54:32',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'product_id' => 2,
                'created_at' => '2024-01-03 09:54:32',
                'updated_at' => '2024-01-03 09:54:32',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 2,
                'product_id' => 2,
                'created_at' => '2024-01-03 09:54:32',
                'updated_at' => '2024-01-03 09:54:32',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'product_id' => 2,
                'created_at' => '2024-01-03 09:54:32',
                'updated_at' => '2024-01-03 09:54:32',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'product_id' => 3,
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'product_id' => 3,
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 2,
                'product_id' => 3,
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 2,
                'product_id' => 3,
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 2,
                'product_id' => 3,
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 2,
                'product_id' => 3,
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'product_id' => 3,
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 2,
                'product_id' => 3,
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 2,
                'product_id' => 4,
                'created_at' => '2024-01-03 09:54:34',
                'updated_at' => '2024-01-03 09:54:34',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 2,
                'product_id' => 5,
                'created_at' => '2024-01-03 09:54:34',
                'updated_at' => '2024-01-03 09:54:34',
            ),
        ));
        
        
    }
}