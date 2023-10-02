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
                        'id' => 1,
                        'variant_id' => 1,
                        'attribute_id' => 1,  //brand
                        'value_str' => NULL,
                        'value_txt' => NULL,
                        'value_int' => 9377,
                        'value_float' => NULL,
                    ),
                1 =>
                    array (
                        'id' => 2,
                        'variant_id' => 1,
                        'attribute_id' => 2,  //year
                        'value_str' => NULL,
                        'value_txt' => NULL,
                        'value_int' => 2024,
                        'value_float' => NULL,
                    ),
                2 =>
                    array (
                        'id' => 3,
                        'variant_id' => 1,
                        'attribute_id' => 3,  //ean
                        'value_str' => '91452877485',
                        'value_txt' => NULL,
                        'value_int' => NULL,
                        'value_float' => NULL,
                    ),
                3 =>
                    array (
                        'id' => 4,
                        'variant_id' => 1,
                        'attribute_id' => 4,  //sku
                        'value_str' => '2244-4002-37',
                        'value_txt' => NULL,
                        'value_int' => NULL,
                        'value_float' => NULL,
                    ),
                4 =>
                    array (
                        'id' => 5,
                        'variant_id' => 1,
                        'attribute_id' => 5,  //name
                        'value_str' => 'SUPER_HERO',
                        'value_txt' => NULL,
                        'value_int' => NULL,
                        'value_float' => NULL,
                    ),
                5 =>
                    array (
                        'id' => 6,
                        'variant_id' => 1,
                        'attribute_id' => 6,  //categ
                        'value_str' => NULL,
                        'value_txt' => NULL,
                        'value_int' => 9615,
                        'value_float' => NULL,
                    ),
                6 =>
                    array (
                        'id' => 7,
                        'variant_id' => 1,
                        'attribute_id' => 7,  //desc long
                        'value_str' => NULL,
                        'value_txt' => "Windsurf sail : variant dependent price",
                        'value_int' => NULL,
                        'value_float' => NULL,
                    ),
                7 =>
                    array (
                        'id' => 8,
                        'variant_id' => 1,
                        'attribute_id' => 9,  //picture
                        'value_str' => "https://cdn.boards-and-more.com/system/product_picture_gallery_pictures/files/6493/5a1d/2648/b000/cc96/391c/original/DTW24_SuperHERO_Rendering_C-01_Screen_72.png",
                        'value_txt' => NULL,
                        'value_int' => NULL,
                        'value_float' => NULL,
                    ),
                8 =>
                    array (
                        'id' => 9,
                        'variant_id' => 1,
                        'attribute_id' => 10,  //wholesale-price
                        'value_str' => NULL,
                        'value_txt' => NULL,
                        'value_int' => NULL,
                        'value_float' => 742.56,
                    ),
                9 =>
                    array (
                        'id' => 10,
                        'variant_id' => 1,
                        'attribute_id' => 11,  //retail-price
                        'value_str' => NULL,
                        'value_txt' => NULL,
                        'value_int' => NULL,
                        'value_float' => 989.99,
                    ),
                10 =>
                    array (
                        'id' => 11,
                        'variant_id' => 1,
                        'attribute_id' => 12,  // weight
                        'value_str' => NULL,
                        'value_txt' => NULL,
                        'value_int' => NULL,
                        'value_float' => 4.2,
                    ),
                11 =>
                    array (
                        'id' => 12,
                        'variant_id' => 1,
                        'attribute_id' => 21,  // surface-m2-var
                        'value_str' => NULL,
                        'value_txt' => NULL,
                        'value_int' => NULL,
                        'value_float' => 3.7,
                    ),
            )
        );

    }
}
