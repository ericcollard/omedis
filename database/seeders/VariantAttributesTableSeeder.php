<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VariantAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('variant_attributes')->delete();
        
        \DB::table('variant_attributes')->insert(array (
            0 => 
            array (
                'attribute_id' => 1,
                'created_at' => NULL,
                'id' => 1,
                'updated_at' => NULL,
                'value_float' => NULL,
                'value_int' => 9377,
                'value_str' => NULL,
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            1 => 
            array (
                'attribute_id' => 2,
                'created_at' => NULL,
                'id' => 2,
                'updated_at' => NULL,
                'value_float' => NULL,
                'value_int' => 2024,
                'value_str' => NULL,
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            2 => 
            array (
                'attribute_id' => 3,
                'created_at' => NULL,
                'id' => 3,
                'updated_at' => NULL,
                'value_float' => NULL,
                'value_int' => NULL,
                'value_str' => '91452877485',
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            3 => 
            array (
                'attribute_id' => 4,
                'created_at' => NULL,
                'id' => 4,
                'updated_at' => NULL,
                'value_float' => NULL,
                'value_int' => NULL,
                'value_str' => '2244-4002-37',
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            4 => 
            array (
                'attribute_id' => 5,
                'created_at' => NULL,
                'id' => 5,
                'updated_at' => NULL,
                'value_float' => NULL,
                'value_int' => NULL,
                'value_str' => 'SUPER_HERO',
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            5 => 
            array (
                'attribute_id' => 6,
                'created_at' => NULL,
                'id' => 6,
                'updated_at' => NULL,
                'value_float' => NULL,
                'value_int' => 9615,
                'value_str' => NULL,
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            6 => 
            array (
                'attribute_id' => 7,
                'created_at' => NULL,
                'id' => 7,
                'updated_at' => NULL,
                'value_float' => NULL,
                'value_int' => NULL,
                'value_str' => NULL,
                'value_txt' => 'Windsurf sail : variant dependent price',
                'variant_id' => 1,
            ),
            7 => 
            array (
                'attribute_id' => 9,
                'created_at' => NULL,
                'id' => 8,
                'updated_at' => NULL,
                'value_float' => NULL,
                'value_int' => NULL,
                'value_str' => 'https://cdn.boards-and-more.com/system/product_picture_gallery_pictures/files/6493/5a1d/2648/b000/cc96/391c/original/DTW24_SuperHERO_Rendering_C-01_Screen_72.png',
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            8 => 
            array (
                'attribute_id' => 10,
                'created_at' => NULL,
                'id' => 9,
                'updated_at' => NULL,
                'value_float' => 742.56,
                'value_int' => NULL,
                'value_str' => NULL,
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            9 => 
            array (
                'attribute_id' => 11,
                'created_at' => NULL,
                'id' => 10,
                'updated_at' => NULL,
                'value_float' => 989.99,
                'value_int' => NULL,
                'value_str' => NULL,
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            10 => 
            array (
                'attribute_id' => 12,
                'created_at' => NULL,
                'id' => 11,
                'updated_at' => NULL,
                'value_float' => 4.2,
                'value_int' => NULL,
                'value_str' => NULL,
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
            11 => 
            array (
                'attribute_id' => 21,
                'created_at' => NULL,
                'id' => 12,
                'updated_at' => NULL,
                'value_float' => 3.7,
                'value_int' => NULL,
                'value_str' => NULL,
                'value_txt' => NULL,
                'variant_id' => 1,
            ),
        ));
        
        
    }
}