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
                'created_at' => '2024-01-03 09:54:31',
                'updated_at' => '2024-01-03 09:54:31',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '2',
                'created_at' => '2024-01-03 09:54:32',
                'updated_at' => '2024-01-03 09:54:32',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => '2',
                'created_at' => '2024-01-03 09:54:33',
                'updated_at' => '2024-01-03 09:54:33',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => '2',
                'created_at' => '2024-01-03 09:54:34',
                'updated_at' => '2024-01-03 09:54:34',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => '2',
                'created_at' => '2024-01-03 09:54:34',
                'updated_at' => '2024-01-03 09:54:34',
            ),
        ));
        
        
    }
}