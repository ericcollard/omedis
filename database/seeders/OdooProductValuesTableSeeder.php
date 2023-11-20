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
                'created_at' => '2023-11-06 23:50:22',
                'id' => 259,
                'odoo_model_id' => 1,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => 'Tous / Ski alpin / Entretien / Outillage',
            ),
            1 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 260,
                'odoo_model_id' => 2,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => '011051',
            ),
            2 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 261,
                'odoo_model_id' => 3,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => '57884211454',
            ),
            3 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 262,
                'odoo_model_id' => 4,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => 'Vola OUTILS POUR CHANTS PRO ',
            ),
            4 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 263,
                'odoo_model_id' => 6,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => 'Ski maintenance tool : no variant product',
            ),
            5 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 264,
                'odoo_model_id' => 8,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => '52.56',
            ),
            6 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 265,
                'odoo_model_id' => 7,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => 'Vola',
            ),
            7 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 266,
                'odoo_model_id' => 9,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => '74.991666666667',
            ),
            8 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 267,
                'odoo_model_id' => 11,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => 'http://img.vola.fr/articles/9a1fbe1a78b74854e8d9c82164e28512b2a765f3.png_750x608_max.png',
            ),
            9 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 268,
                'odoo_model_id' => 13,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => 'Acheter',
            ),
            10 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 269,
                'odoo_model_id' => 14,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => 'ARTICLE STOCKABLE',
            ),
            11 => 
            array (
                'created_at' => '2023-11-06 23:50:22',
                'id' => 270,
                'odoo_model_id' => 15,
                'product_id' => 5,
                'updated_at' => '2023-11-06 23:50:22',
                'value' => 'TVA 20%',
            ),
            12 => 
            array (
                'created_at' => '2023-11-20 14:34:52',
                'id' => 288,
                'odoo_model_id' => 1,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:52',
                'value' => 'Tous / Windsurf / Voile / Vague',
            ),
            13 => 
            array (
                'created_at' => '2023-11-20 14:34:52',
                'id' => 289,
                'odoo_model_id' => 4,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:52',
                'value' => 'Duotone SUPER_HERO 2024',
            ),
            14 => 
            array (
                'created_at' => '2023-11-20 14:34:52',
                'id' => 290,
                'odoo_model_id' => 28,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:52',
                'value' => 'Duotone',
            ),
            15 => 
            array (
                'created_at' => '2023-11-20 14:34:52',
                'id' => 291,
                'odoo_model_id' => 6,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:52',
                'value' => 'Windsurf sail : variant dependent price',
            ),
            16 => 
            array (
                'created_at' => '2023-11-20 14:34:53',
                'id' => 292,
                'odoo_model_id' => 9,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:53',
                'value' => '824.99166666667',
            ),
            17 => 
            array (
                'created_at' => '2023-11-20 14:34:53',
                'id' => 293,
                'odoo_model_id' => 11,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:53',
                'value' => 'https://cdn.boards-and-more.com/system/product_picture_gallery_pictures/files/6493/5a1d/2648/b000/cc96/391c/original/DTW24_SuperHERO_Rendering_C-01_Screen_72.png',
            ),
            18 => 
            array (
                'created_at' => '2023-11-20 14:34:53',
                'id' => 294,
                'odoo_model_id' => 13,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:53',
                'value' => 'Acheter',
            ),
            19 => 
            array (
                'created_at' => '2023-11-20 14:34:53',
                'id' => 295,
                'odoo_model_id' => 14,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:53',
                'value' => 'ARTICLE STOCKABLE',
            ),
            20 => 
            array (
                'created_at' => '2023-11-20 14:34:53',
                'id' => 296,
                'odoo_model_id' => 15,
                'product_id' => 1,
                'updated_at' => '2023-11-20 14:34:53',
                'value' => 'TVA 20%',
            ),
            21 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 297,
                'odoo_model_id' => 1,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'Tous / Kitesurf / Flotteur / Directionnel',
            ),
            22 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 298,
                'odoo_model_id' => 4,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'Fone MITU PRO CARBON ',
            ),
            23 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 299,
                'odoo_model_id' => 28,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'Fone',
            ),
            24 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 300,
                'odoo_model_id' => 6,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'Kite surf board : variant independant price',
            ),
            25 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 301,
                'odoo_model_id' => 8,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => '890.12',
            ),
            26 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 302,
                'odoo_model_id' => 7,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'F One',
            ),
            27 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 303,
                'odoo_model_id' => 9,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => '1416.6583333333',
            ),
            28 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 304,
                'odoo_model_id' => 11,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'https://fr.f-one.world/app/uploads/2023/08/mitu-pro-carbon-4-1280x1280.png',
            ),
            29 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 305,
                'odoo_model_id' => 13,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'Acheter',
            ),
            30 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 306,
                'odoo_model_id' => 14,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'ARTICLE STOCKABLE',
            ),
            31 => 
            array (
                'created_at' => '2023-11-20 14:35:49',
                'id' => 307,
                'odoo_model_id' => 15,
                'product_id' => 2,
                'updated_at' => '2023-11-20 14:35:49',
                'value' => 'TVA 20%',
            ),
            32 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 308,
                'odoo_model_id' => 1,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => 'Tous / Equipement / Vêtements / Technique / Veste / Homme',
            ),
            33 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 309,
                'odoo_model_id' => 4,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => 'Picture NAIKOON JKT 2024',
            ),
            34 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 310,
                'odoo_model_id' => 28,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => 'Picture',
            ),
            35 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 311,
                'odoo_model_id' => 6,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
            'value' => 'Snowboard Jkt: double variant index (color + size)',
            ),
            36 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 312,
                'odoo_model_id' => 8,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => '190.42',
            ),
            37 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 313,
                'odoo_model_id' => 7,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => 'Picture Organic Clothing',
            ),
            38 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 314,
                'odoo_model_id' => 9,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => '333.33333333333',
            ),
            39 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 315,
                'odoo_model_id' => 11,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => 'https://www.picture-organic-clothing.com/dw/image/v2/BGFP_PRD/on/demandware.static/-/Sites-poc-master-catalog/default/dw311e7a10/images/recadre/MVT457_D_01.jpg',
            ),
            40 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 316,
                'odoo_model_id' => 13,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => 'Acheter',
            ),
            41 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 317,
                'odoo_model_id' => 14,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => 'ARTICLE STOCKABLE',
            ),
            42 => 
            array (
                'created_at' => '2023-11-20 14:36:03',
                'id' => 318,
                'odoo_model_id' => 15,
                'product_id' => 3,
                'updated_at' => '2023-11-20 14:36:03',
                'value' => 'TVA 20%',
            ),
            43 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 319,
                'odoo_model_id' => 1,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'Tous / Ski alpin / Entretien / Outillage',
            ),
            44 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 320,
                'odoo_model_id' => 2,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => '011132',
            ),
            45 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 321,
                'odoo_model_id' => 3,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => '57884211455',
            ),
            46 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 322,
                'odoo_model_id' => 4,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'Vola EDGERAZOR ',
            ),
            47 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 323,
                'odoo_model_id' => 28,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'Vola',
            ),
            48 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 324,
                'odoo_model_id' => 6,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'Ski maintenance tool : no variant product',
            ),
            49 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 325,
                'odoo_model_id' => 8,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => '32.56',
            ),
            50 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 326,
                'odoo_model_id' => 7,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'Vola',
            ),
            51 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 327,
                'odoo_model_id' => 9,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => '49.991666666667',
            ),
            52 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 328,
                'odoo_model_id' => 11,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'http://img.vola.fr/articles/5c87372aa070909c9412c968520cf1ea2fd13b5c.png_750x608_max.png',
            ),
            53 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 329,
                'odoo_model_id' => 13,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'Acheter',
            ),
            54 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 330,
                'odoo_model_id' => 14,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'ARTICLE STOCKABLE',
            ),
            55 => 
            array (
                'created_at' => '2023-11-20 14:36:23',
                'id' => 331,
                'odoo_model_id' => 15,
                'product_id' => 4,
                'updated_at' => '2023-11-20 14:36:23',
                'value' => 'TVA 20%',
            ),
        ));
        
        
    }
}