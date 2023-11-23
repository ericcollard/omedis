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
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            1 => 
            array (
                'id' => 2,
                'variant_id' => 1,
                'odoo_model_id' => 17,
                'value' => '914578541121',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            2 => 
            array (
                'id' => 3,
                'variant_id' => 1,
                'odoo_model_id' => 20,
                'value' => '742.56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            3 => 
            array (
                'id' => 4,
                'variant_id' => 1,
                'odoo_model_id' => 19,
                'value' => '742.56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            4 => 
            array (
                'id' => 5,
                'variant_id' => 1,
                'odoo_model_id' => 21,
                'value' => '824.99166666667',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            5 => 
            array (
                'id' => 6,
                'variant_id' => 1,
                'odoo_model_id' => 23,
                'value' => '4.8',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            6 => 
            array (
                'id' => 7,
                'variant_id' => 1,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            7 => 
            array (
                'id' => 8,
                'variant_id' => 1,
                'odoo_model_id' => 27,
                'value' => 'duotone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            8 => 
            array (
                'id' => 9,
                'variant_id' => 1,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            9 => 
            array (
                'id' => 10,
                'variant_id' => 1,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            10 => 
            array (
                'id' => 11,
                'variant_id' => 1,
                'odoo_model_id' => 27,
                'value' => '3.7',
            'attribute_name' => 'Surface (m2)',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            11 => 
            array (
                'id' => 12,
                'variant_id' => 2,
                'odoo_model_id' => 16,
                'value' => '42400-28154-42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            12 => 
            array (
                'id' => 13,
                'variant_id' => 2,
                'odoo_model_id' => 17,
                'value' => '914578541122',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            13 => 
            array (
                'id' => 14,
                'variant_id' => 2,
                'odoo_model_id' => 20,
                'value' => '752.56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            14 => 
            array (
                'id' => 15,
                'variant_id' => 2,
                'odoo_model_id' => 19,
                'value' => '752.56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            15 => 
            array (
                'id' => 16,
                'variant_id' => 2,
                'odoo_model_id' => 21,
                'value' => '838.325',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            16 => 
            array (
                'id' => 17,
                'variant_id' => 2,
                'odoo_model_id' => 23,
                'value' => '4.9',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            17 => 
            array (
                'id' => 18,
                'variant_id' => 2,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            18 => 
            array (
                'id' => 19,
                'variant_id' => 2,
                'odoo_model_id' => 27,
                'value' => 'duotone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            19 => 
            array (
                'id' => 20,
                'variant_id' => 2,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            20 => 
            array (
                'id' => 21,
                'variant_id' => 2,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            21 => 
            array (
                'id' => 22,
                'variant_id' => 2,
                'odoo_model_id' => 27,
                'value' => '4.2',
            'attribute_name' => 'Surface (m2)',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            22 => 
            array (
                'id' => 23,
                'variant_id' => 3,
                'odoo_model_id' => 16,
                'value' => '42400-28154-47',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            23 => 
            array (
                'id' => 24,
                'variant_id' => 3,
                'odoo_model_id' => 17,
                'value' => '914578541123',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            24 => 
            array (
                'id' => 25,
                'variant_id' => 3,
                'odoo_model_id' => 20,
                'value' => '762.56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            25 => 
            array (
                'id' => 26,
                'variant_id' => 3,
                'odoo_model_id' => 19,
                'value' => '762.56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            26 => 
            array (
                'id' => 27,
                'variant_id' => 3,
                'odoo_model_id' => 21,
                'value' => '921.65833333333',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            27 => 
            array (
                'id' => 28,
                'variant_id' => 3,
                'odoo_model_id' => 23,
                'value' => '5',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            28 => 
            array (
                'id' => 29,
                'variant_id' => 3,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            29 => 
            array (
                'id' => 30,
                'variant_id' => 3,
                'odoo_model_id' => 27,
                'value' => 'duotone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            30 => 
            array (
                'id' => 31,
                'variant_id' => 3,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            31 => 
            array (
                'id' => 32,
                'variant_id' => 3,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            32 => 
            array (
                'id' => 33,
                'variant_id' => 3,
                'odoo_model_id' => 27,
                'value' => '4.7',
            'attribute_name' => 'Surface (m2)',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            33 => 
            array (
                'id' => 34,
                'variant_id' => 4,
                'odoo_model_id' => 16,
                'value' => '42400-28154-50',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            34 => 
            array (
                'id' => 35,
                'variant_id' => 4,
                'odoo_model_id' => 17,
                'value' => '914578541124',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            35 => 
            array (
                'id' => 36,
                'variant_id' => 4,
                'odoo_model_id' => 20,
                'value' => '782.56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            36 => 
            array (
                'id' => 37,
                'variant_id' => 4,
                'odoo_model_id' => 19,
                'value' => '782.56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            37 => 
            array (
                'id' => 38,
                'variant_id' => 4,
                'odoo_model_id' => 21,
                'value' => '1004.9916666667',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            38 => 
            array (
                'id' => 39,
                'variant_id' => 4,
                'odoo_model_id' => 23,
                'value' => '5.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            39 => 
            array (
                'id' => 40,
                'variant_id' => 4,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            40 => 
            array (
                'id' => 41,
                'variant_id' => 4,
                'odoo_model_id' => 27,
                'value' => 'duotone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            41 => 
            array (
                'id' => 42,
                'variant_id' => 4,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            42 => 
            array (
                'id' => 43,
                'variant_id' => 4,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            43 => 
            array (
                'id' => 44,
                'variant_id' => 4,
                'odoo_model_id' => 27,
                'value' => '5.0',
            'attribute_name' => 'Surface (m2)',
                'created_at' => '2023-11-23 09:57:59',
                'updated_at' => '2023-11-23 09:57:59',
            ),
            44 => 
            array (
                'id' => 45,
                'variant_id' => 5,
                'odoo_model_id' => 16,
                'value' => '77244-0103-52',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:21',
                'updated_at' => '2023-11-23 09:58:21',
            ),
            45 => 
            array (
                'id' => 46,
                'variant_id' => 5,
                'odoo_model_id' => 17,
                'value' => '814578545487',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:21',
                'updated_at' => '2023-11-23 09:58:21',
            ),
            46 => 
            array (
                'id' => 47,
                'variant_id' => 5,
                'odoo_model_id' => 20,
                'value' => '890.12',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:21',
                'updated_at' => '2023-11-23 09:58:21',
            ),
            47 => 
            array (
                'id' => 48,
                'variant_id' => 5,
                'odoo_model_id' => 23,
                'value' => '5.4',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            48 => 
            array (
                'id' => 49,
                'variant_id' => 5,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            49 => 
            array (
                'id' => 50,
                'variant_id' => 5,
                'odoo_model_id' => 27,
                'value' => 'fone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            50 => 
            array (
                'id' => 51,
                'variant_id' => 5,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            51 => 
            array (
                'id' => 52,
                'variant_id' => 5,
                'odoo_model_id' => 27,
                'value' => '5\'2',
            'attribute_name' => 'Taille (pieds)',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            52 => 
            array (
                'id' => 53,
                'variant_id' => 6,
                'odoo_model_id' => 16,
                'value' => '77244-0103-54',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            53 => 
            array (
                'id' => 54,
                'variant_id' => 6,
                'odoo_model_id' => 17,
                'value' => '814578545488',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            54 => 
            array (
                'id' => 55,
                'variant_id' => 6,
                'odoo_model_id' => 20,
                'value' => '890.12',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            55 => 
            array (
                'id' => 56,
                'variant_id' => 6,
                'odoo_model_id' => 23,
                'value' => '5.4',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            56 => 
            array (
                'id' => 57,
                'variant_id' => 6,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            57 => 
            array (
                'id' => 58,
                'variant_id' => 6,
                'odoo_model_id' => 27,
                'value' => 'fone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            58 => 
            array (
                'id' => 59,
                'variant_id' => 6,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            59 => 
            array (
                'id' => 60,
                'variant_id' => 6,
                'odoo_model_id' => 27,
                'value' => '5\'4',
            'attribute_name' => 'Taille (pieds)',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            60 => 
            array (
                'id' => 61,
                'variant_id' => 7,
                'odoo_model_id' => 16,
                'value' => '77244-0103-56',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            61 => 
            array (
                'id' => 62,
                'variant_id' => 7,
                'odoo_model_id' => 17,
                'value' => '814578545489',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            62 => 
            array (
                'id' => 63,
                'variant_id' => 7,
                'odoo_model_id' => 20,
                'value' => '890.12',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            63 => 
            array (
                'id' => 64,
                'variant_id' => 7,
                'odoo_model_id' => 23,
                'value' => '5.4',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            64 => 
            array (
                'id' => 65,
                'variant_id' => 7,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            65 => 
            array (
                'id' => 66,
                'variant_id' => 7,
                'odoo_model_id' => 27,
                'value' => 'fone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            66 => 
            array (
                'id' => 67,
                'variant_id' => 7,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            67 => 
            array (
                'id' => 68,
                'variant_id' => 7,
                'odoo_model_id' => 27,
                'value' => '5\'6',
            'attribute_name' => 'Taille (pieds)',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            68 => 
            array (
                'id' => 69,
                'variant_id' => 8,
                'odoo_model_id' => 16,
                'value' => '77244-0103-58',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            69 => 
            array (
                'id' => 70,
                'variant_id' => 8,
                'odoo_model_id' => 17,
                'value' => '814578545410',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            70 => 
            array (
                'id' => 71,
                'variant_id' => 8,
                'odoo_model_id' => 20,
                'value' => '890.12',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            71 => 
            array (
                'id' => 72,
                'variant_id' => 8,
                'odoo_model_id' => 23,
                'value' => '5.4',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            72 => 
            array (
                'id' => 73,
                'variant_id' => 8,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            73 => 
            array (
                'id' => 74,
                'variant_id' => 8,
                'odoo_model_id' => 27,
                'value' => 'fone',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            74 => 
            array (
                'id' => 75,
                'variant_id' => 8,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            75 => 
            array (
                'id' => 76,
                'variant_id' => 8,
                'odoo_model_id' => 27,
                'value' => '5\'8',
            'attribute_name' => 'Taille (pieds)',
                'created_at' => '2023-11-23 09:58:22',
                'updated_at' => '2023-11-23 09:58:22',
            ),
            76 => 
            array (
                'id' => 77,
                'variant_id' => 9,
                'odoo_model_id' => 16,
                'value' => 'MVT457_D_01_S',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            77 => 
            array (
                'id' => 78,
                'variant_id' => 9,
                'odoo_model_id' => 17,
                'value' => '714578589754',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            78 => 
            array (
                'id' => 79,
                'variant_id' => 9,
                'odoo_model_id' => 20,
                'value' => '190.42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            79 => 
            array (
                'id' => 80,
                'variant_id' => 9,
                'odoo_model_id' => 23,
                'value' => '2.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            80 => 
            array (
                'id' => 81,
                'variant_id' => 9,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            81 => 
            array (
                'id' => 82,
                'variant_id' => 9,
                'odoo_model_id' => 27,
                'value' => 'picture',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            82 => 
            array (
                'id' => 83,
                'variant_id' => 9,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            83 => 
            array (
                'id' => 84,
                'variant_id' => 9,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            84 => 
            array (
                'id' => 85,
                'variant_id' => 9,
                'odoo_model_id' => 27,
                'value' => 'S',
                'attribute_name' => 'Taille Wear',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            85 => 
            array (
                'id' => 86,
                'variant_id' => 9,
                'odoo_model_id' => 27,
                'value' => 'Amande',
                'attribute_name' => 'Couleur',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            86 => 
            array (
                'id' => 87,
                'variant_id' => 10,
                'odoo_model_id' => 16,
                'value' => 'MVT457_D_01_M',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            87 => 
            array (
                'id' => 88,
                'variant_id' => 10,
                'odoo_model_id' => 17,
                'value' => '714578589755',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            88 => 
            array (
                'id' => 89,
                'variant_id' => 10,
                'odoo_model_id' => 20,
                'value' => '190.42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            89 => 
            array (
                'id' => 90,
                'variant_id' => 10,
                'odoo_model_id' => 23,
                'value' => '2.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            90 => 
            array (
                'id' => 91,
                'variant_id' => 10,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            91 => 
            array (
                'id' => 92,
                'variant_id' => 10,
                'odoo_model_id' => 27,
                'value' => 'picture',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            92 => 
            array (
                'id' => 93,
                'variant_id' => 10,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            93 => 
            array (
                'id' => 94,
                'variant_id' => 10,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            94 => 
            array (
                'id' => 95,
                'variant_id' => 10,
                'odoo_model_id' => 27,
                'value' => 'M',
                'attribute_name' => 'Taille Wear',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            95 => 
            array (
                'id' => 96,
                'variant_id' => 10,
                'odoo_model_id' => 27,
                'value' => 'Amande',
                'attribute_name' => 'Couleur',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            96 => 
            array (
                'id' => 97,
                'variant_id' => 11,
                'odoo_model_id' => 16,
                'value' => 'MVT457_D_01_L',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            97 => 
            array (
                'id' => 98,
                'variant_id' => 11,
                'odoo_model_id' => 17,
                'value' => '714578589756',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            98 => 
            array (
                'id' => 99,
                'variant_id' => 11,
                'odoo_model_id' => 20,
                'value' => '190.42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            99 => 
            array (
                'id' => 100,
                'variant_id' => 11,
                'odoo_model_id' => 23,
                'value' => '2.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            100 => 
            array (
                'id' => 101,
                'variant_id' => 11,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            101 => 
            array (
                'id' => 102,
                'variant_id' => 11,
                'odoo_model_id' => 27,
                'value' => 'picture',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            102 => 
            array (
                'id' => 103,
                'variant_id' => 11,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            103 => 
            array (
                'id' => 104,
                'variant_id' => 11,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            104 => 
            array (
                'id' => 105,
                'variant_id' => 11,
                'odoo_model_id' => 27,
                'value' => 'L',
                'attribute_name' => 'Taille Wear',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            105 => 
            array (
                'id' => 106,
                'variant_id' => 11,
                'odoo_model_id' => 27,
                'value' => 'Amande',
                'attribute_name' => 'Couleur',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            106 => 
            array (
                'id' => 107,
                'variant_id' => 12,
                'odoo_model_id' => 16,
                'value' => 'MVT457_D_01_XL',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            107 => 
            array (
                'id' => 108,
                'variant_id' => 12,
                'odoo_model_id' => 17,
                'value' => '714578589757',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            108 => 
            array (
                'id' => 109,
                'variant_id' => 12,
                'odoo_model_id' => 20,
                'value' => '190.42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            109 => 
            array (
                'id' => 110,
                'variant_id' => 12,
                'odoo_model_id' => 23,
                'value' => '2.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            110 => 
            array (
                'id' => 111,
                'variant_id' => 12,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            111 => 
            array (
                'id' => 112,
                'variant_id' => 12,
                'odoo_model_id' => 27,
                'value' => 'picture',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            112 => 
            array (
                'id' => 113,
                'variant_id' => 12,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            113 => 
            array (
                'id' => 114,
                'variant_id' => 12,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            114 => 
            array (
                'id' => 115,
                'variant_id' => 12,
                'odoo_model_id' => 27,
                'value' => 'XL',
                'attribute_name' => 'Taille Wear',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            115 => 
            array (
                'id' => 116,
                'variant_id' => 12,
                'odoo_model_id' => 27,
                'value' => 'Amande',
                'attribute_name' => 'Couleur',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            116 => 
            array (
                'id' => 117,
                'variant_id' => 13,
                'odoo_model_id' => 16,
                'value' => 'MVT457_C_01_S',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            117 => 
            array (
                'id' => 118,
                'variant_id' => 13,
                'odoo_model_id' => 17,
                'value' => '714578589764',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            118 => 
            array (
                'id' => 119,
                'variant_id' => 13,
                'odoo_model_id' => 20,
                'value' => '190.42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            119 => 
            array (
                'id' => 120,
                'variant_id' => 13,
                'odoo_model_id' => 23,
                'value' => '2.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            120 => 
            array (
                'id' => 121,
                'variant_id' => 13,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            121 => 
            array (
                'id' => 122,
                'variant_id' => 13,
                'odoo_model_id' => 27,
                'value' => 'picture',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            122 => 
            array (
                'id' => 123,
                'variant_id' => 13,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            123 => 
            array (
                'id' => 124,
                'variant_id' => 13,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            124 => 
            array (
                'id' => 125,
                'variant_id' => 13,
                'odoo_model_id' => 27,
                'value' => 'S',
                'attribute_name' => 'Taille Wear',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            125 => 
            array (
                'id' => 126,
                'variant_id' => 13,
                'odoo_model_id' => 27,
                'value' => 'Bleu marine',
                'attribute_name' => 'Couleur',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            126 => 
            array (
                'id' => 127,
                'variant_id' => 14,
                'odoo_model_id' => 16,
                'value' => 'MVT457_C_01_S',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            127 => 
            array (
                'id' => 128,
                'variant_id' => 14,
                'odoo_model_id' => 17,
                'value' => '714578589765',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            128 => 
            array (
                'id' => 129,
                'variant_id' => 14,
                'odoo_model_id' => 20,
                'value' => '190.42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            129 => 
            array (
                'id' => 130,
                'variant_id' => 14,
                'odoo_model_id' => 23,
                'value' => '2.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            130 => 
            array (
                'id' => 131,
                'variant_id' => 14,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            131 => 
            array (
                'id' => 132,
                'variant_id' => 14,
                'odoo_model_id' => 27,
                'value' => 'picture',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            132 => 
            array (
                'id' => 133,
                'variant_id' => 14,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            133 => 
            array (
                'id' => 134,
                'variant_id' => 14,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:46',
                'updated_at' => '2023-11-23 09:58:46',
            ),
            134 => 
            array (
                'id' => 135,
                'variant_id' => 14,
                'odoo_model_id' => 27,
                'value' => 'M',
                'attribute_name' => 'Taille Wear',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            135 => 
            array (
                'id' => 136,
                'variant_id' => 14,
                'odoo_model_id' => 27,
                'value' => 'Bleu marine',
                'attribute_name' => 'Couleur',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            136 => 
            array (
                'id' => 137,
                'variant_id' => 15,
                'odoo_model_id' => 16,
                'value' => 'MVT457_C_01_S',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            137 => 
            array (
                'id' => 138,
                'variant_id' => 15,
                'odoo_model_id' => 17,
                'value' => '714578589766',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            138 => 
            array (
                'id' => 139,
                'variant_id' => 15,
                'odoo_model_id' => 20,
                'value' => '190.42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            139 => 
            array (
                'id' => 140,
                'variant_id' => 15,
                'odoo_model_id' => 23,
                'value' => '2.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            140 => 
            array (
                'id' => 141,
                'variant_id' => 15,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            141 => 
            array (
                'id' => 142,
                'variant_id' => 15,
                'odoo_model_id' => 27,
                'value' => 'picture',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            142 => 
            array (
                'id' => 143,
                'variant_id' => 15,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            143 => 
            array (
                'id' => 144,
                'variant_id' => 15,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            144 => 
            array (
                'id' => 145,
                'variant_id' => 15,
                'odoo_model_id' => 27,
                'value' => 'L',
                'attribute_name' => 'Taille Wear',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            145 => 
            array (
                'id' => 146,
                'variant_id' => 15,
                'odoo_model_id' => 27,
                'value' => 'Bleu marine',
                'attribute_name' => 'Couleur',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            146 => 
            array (
                'id' => 147,
                'variant_id' => 16,
                'odoo_model_id' => 16,
                'value' => 'MVT457_C_01_S',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            147 => 
            array (
                'id' => 148,
                'variant_id' => 16,
                'odoo_model_id' => 17,
                'value' => '714578589767',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            148 => 
            array (
                'id' => 149,
                'variant_id' => 16,
                'odoo_model_id' => 20,
                'value' => '190.42',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            149 => 
            array (
                'id' => 150,
                'variant_id' => 16,
                'odoo_model_id' => 23,
                'value' => '2.1',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            150 => 
            array (
                'id' => 151,
                'variant_id' => 16,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            151 => 
            array (
                'id' => 152,
                'variant_id' => 16,
                'odoo_model_id' => 27,
                'value' => 'picture',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            152 => 
            array (
                'id' => 153,
                'variant_id' => 16,
                'odoo_model_id' => 27,
                'value' => '2024',
                'attribute_name' => 'Millésime',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            153 => 
            array (
                'id' => 154,
                'variant_id' => 16,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            154 => 
            array (
                'id' => 155,
                'variant_id' => 16,
                'odoo_model_id' => 27,
                'value' => 'XL',
                'attribute_name' => 'Taille Wear',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            155 => 
            array (
                'id' => 156,
                'variant_id' => 16,
                'odoo_model_id' => 27,
                'value' => 'Bleu marine',
                'attribute_name' => 'Couleur',
                'created_at' => '2023-11-23 09:58:47',
                'updated_at' => '2023-11-23 09:58:47',
            ),
            156 => 
            array (
                'id' => 157,
                'variant_id' => 17,
                'odoo_model_id' => 23,
                'value' => '0.12',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:59:14',
                'updated_at' => '2023-11-23 09:59:14',
            ),
            157 => 
            array (
                'id' => 158,
                'variant_id' => 17,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:59:14',
                'updated_at' => '2023-11-23 09:59:14',
            ),
            158 => 
            array (
                'id' => 159,
                'variant_id' => 17,
                'odoo_model_id' => 27,
                'value' => 'vola',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:59:15',
                'updated_at' => '2023-11-23 09:59:15',
            ),
            159 => 
            array (
                'id' => 160,
                'variant_id' => 17,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:59:15',
                'updated_at' => '2023-11-23 09:59:15',
            ),
            160 => 
            array (
                'id' => 161,
                'variant_id' => 18,
                'odoo_model_id' => 23,
                'value' => '0.12',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:59:34',
                'updated_at' => '2023-11-23 09:59:34',
            ),
            161 => 
            array (
                'id' => 162,
                'variant_id' => 18,
                'odoo_model_id' => 24,
                'value' => '0',
                'attribute_name' => NULL,
                'created_at' => '2023-11-23 09:59:34',
                'updated_at' => '2023-11-23 09:59:34',
            ),
            162 => 
            array (
                'id' => 163,
                'variant_id' => 18,
                'odoo_model_id' => 27,
                'value' => 'vola',
                'attribute_name' => 'Marque',
                'created_at' => '2023-11-23 09:59:34',
                'updated_at' => '2023-11-23 09:59:34',
            ),
            163 => 
            array (
                'id' => 164,
                'variant_id' => 18,
                'odoo_model_id' => 27,
                'value' => 'Neuf',
                'attribute_name' => 'Type',
                'created_at' => '2023-11-23 09:59:34',
                'updated_at' => '2023-11-23 09:59:34',
            ),
        ));
        
        
    }
}