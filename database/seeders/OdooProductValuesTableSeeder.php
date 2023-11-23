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
                'id' => 10,
                'product_id' => 2,
                'odoo_model_id' => 1,
                'value' => 'Tous / Kitesurf / Flotteur / Directionnel',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            1 => 
            array (
                'id' => 11,
                'product_id' => 2,
                'odoo_model_id' => 4,
                'value' => 'Fone MITU PRO CARBON ',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            2 => 
            array (
                'id' => 12,
                'product_id' => 2,
                'odoo_model_id' => 7,
                'value' => 'Fone',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            3 => 
            array (
                'id' => 13,
                'product_id' => 2,
                'odoo_model_id' => 6,
                'value' => 'Kite surf board : variant independant price',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            4 => 
            array (
                'id' => 14,
                'product_id' => 2,
                'odoo_model_id' => 8,
                'value' => '890.12',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            5 => 
            array (
                'id' => 15,
                'product_id' => 2,
                'odoo_model_id' => 9,
                'value' => '1416.6583333333',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            6 => 
            array (
                'id' => 16,
                'product_id' => 2,
                'odoo_model_id' => 11,
                'value' => 'https://fr.f-one.world/app/uploads/2023/08/mitu-pro-carbon-4-1280x1280.png',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            7 => 
            array (
                'id' => 17,
                'product_id' => 2,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            8 => 
            array (
                'id' => 18,
                'product_id' => 2,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            9 => 
            array (
                'id' => 19,
                'product_id' => 2,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-11-23 12:10:38',
                'updated_at' => '2023-11-23 12:10:38',
            ),
            10 => 
            array (
                'id' => 20,
                'product_id' => 3,
                'odoo_model_id' => 1,
                'value' => 'Tous / Equipement / Vêtements / Technique / Veste / Homme',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            11 => 
            array (
                'id' => 21,
                'product_id' => 3,
                'odoo_model_id' => 4,
                'value' => 'Picture NAIKOON JKT 2024',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            12 => 
            array (
                'id' => 22,
                'product_id' => 3,
                'odoo_model_id' => 7,
                'value' => 'Picture',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            13 => 
            array (
                'id' => 23,
                'product_id' => 3,
                'odoo_model_id' => 6,
            'value' => 'Snowboard Jkt: double variant index (color + size)',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            14 => 
            array (
                'id' => 24,
                'product_id' => 3,
                'odoo_model_id' => 8,
                'value' => '190.42',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            15 => 
            array (
                'id' => 25,
                'product_id' => 3,
                'odoo_model_id' => 9,
                'value' => '333.33333333333',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            16 => 
            array (
                'id' => 26,
                'product_id' => 3,
                'odoo_model_id' => 11,
                'value' => 'https://www.picture-organic-clothing.com/dw/image/v2/BGFP_PRD/on/demandware.static/-/Sites-poc-master-catalog/default/dw311e7a10/images/recadre/MVT457_D_01.jpg',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            17 => 
            array (
                'id' => 27,
                'product_id' => 3,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            18 => 
            array (
                'id' => 28,
                'product_id' => 3,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            19 => 
            array (
                'id' => 29,
                'product_id' => 3,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-11-23 12:10:49',
                'updated_at' => '2023-11-23 12:10:49',
            ),
            20 => 
            array (
                'id' => 30,
                'product_id' => 4,
                'odoo_model_id' => 1,
                'value' => 'Tous / Ski alpin / Entretien / Outillage',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            21 => 
            array (
                'id' => 31,
                'product_id' => 4,
                'odoo_model_id' => 2,
                'value' => '011132',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            22 => 
            array (
                'id' => 32,
                'product_id' => 4,
                'odoo_model_id' => 3,
                'value' => '57884211455',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            23 => 
            array (
                'id' => 33,
                'product_id' => 4,
                'odoo_model_id' => 4,
                'value' => 'Vola EDGERAZOR ',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            24 => 
            array (
                'id' => 34,
                'product_id' => 4,
                'odoo_model_id' => 7,
                'value' => 'Vola',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            25 => 
            array (
                'id' => 35,
                'product_id' => 4,
                'odoo_model_id' => 6,
                'value' => 'Ski maintenance tool : no variant product',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            26 => 
            array (
                'id' => 36,
                'product_id' => 4,
                'odoo_model_id' => 8,
                'value' => '32.56',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            27 => 
            array (
                'id' => 37,
                'product_id' => 4,
                'odoo_model_id' => 9,
                'value' => '49.991666666667',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            28 => 
            array (
                'id' => 38,
                'product_id' => 4,
                'odoo_model_id' => 11,
                'value' => 'http://img.vola.fr/articles/bb63218cbc4815a67c160fa90384f9e20c03c517.png_750x608_max.png',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            29 => 
            array (
                'id' => 39,
                'product_id' => 4,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            30 => 
            array (
                'id' => 40,
                'product_id' => 4,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            31 => 
            array (
                'id' => 41,
                'product_id' => 4,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-11-23 12:10:56',
                'updated_at' => '2023-11-23 12:10:56',
            ),
            32 => 
            array (
                'id' => 42,
                'product_id' => 5,
                'odoo_model_id' => 1,
                'value' => 'Tous / Ski alpin / Entretien / Outillage',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            33 => 
            array (
                'id' => 43,
                'product_id' => 5,
                'odoo_model_id' => 2,
                'value' => '011051',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            34 => 
            array (
                'id' => 44,
                'product_id' => 5,
                'odoo_model_id' => 3,
                'value' => '57884211454',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            35 => 
            array (
                'id' => 45,
                'product_id' => 5,
                'odoo_model_id' => 4,
                'value' => 'Vola OUTILS POUR CHANTS PRO ',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            36 => 
            array (
                'id' => 46,
                'product_id' => 5,
                'odoo_model_id' => 7,
                'value' => 'Vola',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            37 => 
            array (
                'id' => 47,
                'product_id' => 5,
                'odoo_model_id' => 6,
                'value' => 'Ski maintenance tool : no variant product',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            38 => 
            array (
                'id' => 48,
                'product_id' => 5,
                'odoo_model_id' => 8,
                'value' => '52.56',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            39 => 
            array (
                'id' => 49,
                'product_id' => 5,
                'odoo_model_id' => 9,
                'value' => '74.991666666667',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            40 => 
            array (
                'id' => 50,
                'product_id' => 5,
                'odoo_model_id' => 10,
                'value' => '67.425',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            41 => 
            array (
                'id' => 51,
                'product_id' => 5,
                'odoo_model_id' => 11,
                'value' => 'http://img.vola.fr/articles/9a1fbe1a78b74854e8d9c82164e28512b2a765f3.png_750x608_max.png',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            42 => 
            array (
                'id' => 52,
                'product_id' => 5,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            43 => 
            array (
                'id' => 53,
                'product_id' => 5,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            44 => 
            array (
                'id' => 54,
                'product_id' => 5,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-11-23 12:11:01',
                'updated_at' => '2023-11-23 12:11:01',
            ),
            45 => 
            array (
                'id' => 55,
                'product_id' => 1,
                'odoo_model_id' => 1,
                'value' => 'Tous / Windsurf / Voile / Vague',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            46 => 
            array (
                'id' => 56,
                'product_id' => 1,
                'odoo_model_id' => 4,
                'value' => 'Duotone SUPER_HERO 2024',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            47 => 
            array (
                'id' => 57,
                'product_id' => 1,
                'odoo_model_id' => 7,
                'value' => 'Duotone',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            48 => 
            array (
                'id' => 58,
                'product_id' => 1,
                'odoo_model_id' => 6,
                'value' => 'Windsurf sail : variant dependent price',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            49 => 
            array (
                'id' => 59,
                'product_id' => 1,
                'odoo_model_id' => 9,
                'value' => '824.99166666667',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            50 => 
            array (
                'id' => 60,
                'product_id' => 1,
                'odoo_model_id' => 10,
                'value' => '586.575',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            51 => 
            array (
                'id' => 61,
                'product_id' => 1,
                'odoo_model_id' => 11,
                'value' => 'https://cdn.boards-and-more.com/system/product_picture_gallery_pictures/files/6493/5a1d/2648/b000/cc96/391c/original/DTW24_SuperHERO_Rendering_C-01_Screen_72.png',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            52 => 
            array (
                'id' => 62,
                'product_id' => 1,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            53 => 
            array (
                'id' => 63,
                'product_id' => 1,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
            54 => 
            array (
                'id' => 64,
                'product_id' => 1,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-11-23 12:54:12',
                'updated_at' => '2023-11-23 12:54:12',
            ),
        ));
        
        
    }
}