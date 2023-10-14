<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OdooVariantValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('odoo_variant_values')->delete();
        
        \DB::table('odoo_variant_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'variant_id' => 1,
                'odoo_model_id' => 16,
                'value' => '42400-28154-37',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            1 => 
            array (
                'id' => 2,
                'variant_id' => 1,
                'odoo_model_id' => 17,
                'value' => '914578541121',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            2 => 
            array (
                'id' => 3,
                'variant_id' => 1,
                'odoo_model_id' => 20,
                'value' => '742.56',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            3 => 
            array (
                'id' => 4,
                'variant_id' => 1,
                'odoo_model_id' => 18,
                'value' => 'Boards & More gmbh',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:50',
                'updated_at' => '2023-10-14 07:48:50',
            ),
            4 => 
            array (
                'id' => 5,
                'variant_id' => 1,
                'odoo_model_id' => 21,
                'value' => '824.99166666667',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            5 => 
            array (
                'id' => 6,
                'variant_id' => 1,
                'odoo_model_id' => 23,
                'value' => '4.8',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            6 => 
            array (
                'id' => 7,
                'variant_id' => 1,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            7 => 
            array (
                'id' => 8,
                'variant_id' => 1,
                'odoo_model_id' => 27,
                'value' => 'duotone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            8 => 
            array (
                'id' => 9,
                'variant_id' => 1,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            9 => 
            array (
                'id' => 10,
                'variant_id' => 1,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            10 => 
            array (
                'id' => 11,
                'variant_id' => 1,
                'odoo_model_id' => 27,
                'value' => '3.7',
            'attribute_name' => 'Surface (m2)',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            11 => 
            array (
                'id' => 12,
                'variant_id' => 2,
                'odoo_model_id' => 16,
                'value' => '42400-28154-42',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            12 => 
            array (
                'id' => 13,
                'variant_id' => 2,
                'odoo_model_id' => 17,
                'value' => '914578541122',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            13 => 
            array (
                'id' => 14,
                'variant_id' => 2,
                'odoo_model_id' => 20,
                'value' => '752.56',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            14 => 
            array (
                'id' => 15,
                'variant_id' => 2,
                'odoo_model_id' => 18,
                'value' => 'Boards & More gmbh',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            15 => 
            array (
                'id' => 16,
                'variant_id' => 2,
                'odoo_model_id' => 21,
                'value' => '838.325',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            16 => 
            array (
                'id' => 17,
                'variant_id' => 2,
                'odoo_model_id' => 23,
                'value' => '4.9',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            17 => 
            array (
                'id' => 18,
                'variant_id' => 2,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            18 => 
            array (
                'id' => 19,
                'variant_id' => 2,
                'odoo_model_id' => 27,
                'value' => 'duotone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            19 => 
            array (
                'id' => 20,
                'variant_id' => 2,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            20 => 
            array (
                'id' => 21,
                'variant_id' => 2,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            21 => 
            array (
                'id' => 22,
                'variant_id' => 2,
                'odoo_model_id' => 27,
                'value' => '4.2',
            'attribute_name' => 'Surface (m2)',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            22 => 
            array (
                'id' => 23,
                'variant_id' => 3,
                'odoo_model_id' => 16,
                'value' => '42400-28154-47',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            23 => 
            array (
                'id' => 24,
                'variant_id' => 3,
                'odoo_model_id' => 17,
                'value' => '914578541123',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            24 => 
            array (
                'id' => 25,
                'variant_id' => 3,
                'odoo_model_id' => 20,
                'value' => '762.56',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            25 => 
            array (
                'id' => 26,
                'variant_id' => 3,
                'odoo_model_id' => 18,
                'value' => 'Boards & More gmbh',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            26 => 
            array (
                'id' => 27,
                'variant_id' => 3,
                'odoo_model_id' => 21,
                'value' => '921.65833333333',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            27 => 
            array (
                'id' => 28,
                'variant_id' => 3,
                'odoo_model_id' => 23,
                'value' => '5',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            28 => 
            array (
                'id' => 29,
                'variant_id' => 3,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            29 => 
            array (
                'id' => 30,
                'variant_id' => 3,
                'odoo_model_id' => 27,
                'value' => 'duotone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            30 => 
            array (
                'id' => 31,
                'variant_id' => 3,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            31 => 
            array (
                'id' => 32,
                'variant_id' => 3,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            32 => 
            array (
                'id' => 33,
                'variant_id' => 3,
                'odoo_model_id' => 27,
                'value' => '4.7',
            'attribute_name' => 'Surface (m2)',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            33 => 
            array (
                'id' => 34,
                'variant_id' => 4,
                'odoo_model_id' => 16,
                'value' => '42400-28154-50',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            34 => 
            array (
                'id' => 35,
                'variant_id' => 4,
                'odoo_model_id' => 17,
                'value' => '914578541124',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            35 => 
            array (
                'id' => 36,
                'variant_id' => 4,
                'odoo_model_id' => 20,
                'value' => '782.56',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            36 => 
            array (
                'id' => 37,
                'variant_id' => 4,
                'odoo_model_id' => 18,
                'value' => 'Boards & More gmbh',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            37 => 
            array (
                'id' => 38,
                'variant_id' => 4,
                'odoo_model_id' => 21,
                'value' => '1004.9916666667',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            38 => 
            array (
                'id' => 39,
                'variant_id' => 4,
                'odoo_model_id' => 23,
                'value' => '5.1',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            39 => 
            array (
                'id' => 40,
                'variant_id' => 4,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            40 => 
            array (
                'id' => 41,
                'variant_id' => 4,
                'odoo_model_id' => 27,
                'value' => 'duotone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            41 => 
            array (
                'id' => 42,
                'variant_id' => 4,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            42 => 
            array (
                'id' => 43,
                'variant_id' => 4,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
            43 => 
            array (
                'id' => 44,
                'variant_id' => 4,
                'odoo_model_id' => 27,
                'value' => '5',
            'attribute_name' => 'Surface (m2)',
                'created_at' => '2023-10-14 07:48:51',
                'updated_at' => '2023-10-14 07:48:51',
            ),
        ));
        
        
    }
}