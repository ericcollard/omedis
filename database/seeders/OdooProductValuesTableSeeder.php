<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OdooProductValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('odoo_product_values')->delete();
        
        \DB::table('odoo_product_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'odoo_model_id' => 1,
                'value' => 'Tous / Windsurf / Voile / Vague',
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'odoo_model_id' => 4,
                'value' => 'Duotone SUPER_HERO 2024',
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'odoo_model_id' => 6,
                'value' => 'Windsurf sail : variant dependent price',
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'odoo_model_id' => 9,
                'value' => '824.99166666667',
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'odoo_model_id' => 11,
                'value' => 'https://cdn.boards-and-more.com/system/product_picture_gallery_pictures/files/6493/5a1d/2648/b000/cc96/391c/original/DTW24_SuperHERO_Rendering_C-01_Screen_72.png',
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 1,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 1,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
        ));
        
        
    }
}