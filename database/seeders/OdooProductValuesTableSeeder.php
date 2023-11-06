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
                'id' => 138,
                'product_id' => 1,
                'odoo_model_id' => 1,
                'value' => 'Tous / Windsurf / Voile / Vague',
                'created_at' => '2023-10-16 14:19:53',
                'updated_at' => '2023-10-16 14:19:53',
            ),
            1 => 
            array (
                'id' => 139,
                'product_id' => 1,
                'odoo_model_id' => 4,
                'value' => 'Duotone SUPER_HERO 2024',
                'created_at' => '2023-10-16 14:19:53',
                'updated_at' => '2023-10-16 14:19:53',
            ),
            2 => 
            array (
                'id' => 140,
                'product_id' => 1,
                'odoo_model_id' => 6,
                'value' => 'Windsurf sail : variant dependent price',
                'created_at' => '2023-10-16 14:19:53',
                'updated_at' => '2023-10-16 14:19:53',
            ),
            3 => 
            array (
                'id' => 141,
                'product_id' => 1,
                'odoo_model_id' => 9,
                'value' => '824.99166666667',
                'created_at' => '2023-10-16 14:19:53',
                'updated_at' => '2023-10-16 14:19:53',
            ),
            4 => 
            array (
                'id' => 142,
                'product_id' => 1,
                'odoo_model_id' => 11,
                'value' => 'https://cdn.boards-and-more.com/system/product_picture_gallery_pictures/files/6493/5a1d/2648/b000/cc96/391c/original/DTW24_SuperHERO_Rendering_C-01_Screen_72.png',
                'created_at' => '2023-10-16 14:19:53',
                'updated_at' => '2023-10-16 14:19:53',
            ),
            5 => 
            array (
                'id' => 143,
                'product_id' => 1,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-10-16 14:19:53',
                'updated_at' => '2023-10-16 14:19:53',
            ),
            6 => 
            array (
                'id' => 144,
                'product_id' => 1,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-10-16 14:19:53',
                'updated_at' => '2023-10-16 14:19:53',
            ),
            7 => 
            array (
                'id' => 145,
                'product_id' => 1,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-10-16 14:19:53',
                'updated_at' => '2023-10-16 14:19:53',
            ),
            8 => 
            array (
                'id' => 205,
                'product_id' => 5,
                'odoo_model_id' => 1,
                'value' => 'Tous / Ski alpin / Entretien / Outillage',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            9 => 
            array (
                'id' => 206,
                'product_id' => 5,
                'odoo_model_id' => 2,
                'value' => '011051',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            10 => 
            array (
                'id' => 207,
                'product_id' => 5,
                'odoo_model_id' => 3,
                'value' => '57884211454',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            11 => 
            array (
                'id' => 208,
                'product_id' => 5,
                'odoo_model_id' => 4,
                'value' => 'Vola OUTILS POUR CHANTS PRO ',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            12 => 
            array (
                'id' => 209,
                'product_id' => 5,
                'odoo_model_id' => 6,
                'value' => 'Ski maintenance tool : no variant product',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            13 => 
            array (
                'id' => 210,
                'product_id' => 5,
                'odoo_model_id' => 8,
                'value' => '52.56',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            14 => 
            array (
                'id' => 211,
                'product_id' => 5,
                'odoo_model_id' => 7,
                'value' => 'Vola',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            15 => 
            array (
                'id' => 212,
                'product_id' => 5,
                'odoo_model_id' => 9,
                'value' => '74.991666666667',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            16 => 
            array (
                'id' => 213,
                'product_id' => 5,
                'odoo_model_id' => 11,
                'value' => 'http://img.vola.fr/articles/9a1fbe1a78b74854e8d9c82164e28512b2a765f3.png_750x608_max.png',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            17 => 
            array (
                'id' => 214,
                'product_id' => 5,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            18 => 
            array (
                'id' => 215,
                'product_id' => 5,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            19 => 
            array (
                'id' => 216,
                'product_id' => 5,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-10-16 22:23:13',
                'updated_at' => '2023-10-16 22:23:13',
            ),
            20 => 
            array (
                'id' => 217,
                'product_id' => 2,
                'odoo_model_id' => 1,
                'value' => 'Tous / Kitesurf / Flotteur / Directionnel',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            21 => 
            array (
                'id' => 218,
                'product_id' => 2,
                'odoo_model_id' => 4,
                'value' => 'Fone MITU PRO CARBON ',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            22 => 
            array (
                'id' => 219,
                'product_id' => 2,
                'odoo_model_id' => 6,
                'value' => 'Kite surf board : variant independant price',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            23 => 
            array (
                'id' => 220,
                'product_id' => 2,
                'odoo_model_id' => 8,
                'value' => '890.12',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            24 => 
            array (
                'id' => 221,
                'product_id' => 2,
                'odoo_model_id' => 7,
                'value' => 'F One',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            25 => 
            array (
                'id' => 222,
                'product_id' => 2,
                'odoo_model_id' => 9,
                'value' => '1416.6583333333',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            26 => 
            array (
                'id' => 223,
                'product_id' => 2,
                'odoo_model_id' => 11,
                'value' => 'https://fr.f-one.world/app/uploads/2023/08/mitu-pro-carbon-4-1280x1280.png',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            27 => 
            array (
                'id' => 224,
                'product_id' => 2,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            28 => 
            array (
                'id' => 225,
                'product_id' => 2,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            29 => 
            array (
                'id' => 226,
                'product_id' => 2,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-11-06 23:41:15',
                'updated_at' => '2023-11-06 23:41:15',
            ),
            30 => 
            array (
                'id' => 237,
                'product_id' => 3,
                'odoo_model_id' => 1,
                'value' => 'Tous / Equipement / Vêtements / Technique / Veste / Homme',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            31 => 
            array (
                'id' => 238,
                'product_id' => 3,
                'odoo_model_id' => 4,
                'value' => 'Picture NAIKOON JKT 2024',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            32 => 
            array (
                'id' => 239,
                'product_id' => 3,
                'odoo_model_id' => 6,
            'value' => 'Snowboard Jkt: double variant index (color + size)',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            33 => 
            array (
                'id' => 240,
                'product_id' => 3,
                'odoo_model_id' => 8,
                'value' => '190.42',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            34 => 
            array (
                'id' => 241,
                'product_id' => 3,
                'odoo_model_id' => 7,
                'value' => 'Picture Organic Clothing',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            35 => 
            array (
                'id' => 242,
                'product_id' => 3,
                'odoo_model_id' => 9,
                'value' => '333.33333333333',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            36 => 
            array (
                'id' => 243,
                'product_id' => 3,
                'odoo_model_id' => 11,
                'value' => 'https://www.picture-organic-clothing.com/dw/image/v2/BGFP_PRD/on/demandware.static/-/Sites-poc-master-catalog/default/dw311e7a10/images/recadre/MVT457_D_01.jpg',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            37 => 
            array (
                'id' => 244,
                'product_id' => 3,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            38 => 
            array (
                'id' => 245,
                'product_id' => 3,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            39 => 
            array (
                'id' => 246,
                'product_id' => 3,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-11-06 23:44:27',
                'updated_at' => '2023-11-06 23:44:27',
            ),
            40 => 
            array (
                'id' => 247,
                'product_id' => 4,
                'odoo_model_id' => 1,
                'value' => 'Tous / Ski alpin / Entretien / Outillage',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            41 => 
            array (
                'id' => 248,
                'product_id' => 4,
                'odoo_model_id' => 2,
                'value' => '011132',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            42 => 
            array (
                'id' => 249,
                'product_id' => 4,
                'odoo_model_id' => 3,
                'value' => '57884211455',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            43 => 
            array (
                'id' => 250,
                'product_id' => 4,
                'odoo_model_id' => 4,
                'value' => 'Vola EDGERAZOR ',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            44 => 
            array (
                'id' => 251,
                'product_id' => 4,
                'odoo_model_id' => 6,
                'value' => 'Ski maintenance tool : no variant product',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            45 => 
            array (
                'id' => 252,
                'product_id' => 4,
                'odoo_model_id' => 8,
                'value' => '32.56',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            46 => 
            array (
                'id' => 253,
                'product_id' => 4,
                'odoo_model_id' => 7,
                'value' => 'Vola',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            47 => 
            array (
                'id' => 254,
                'product_id' => 4,
                'odoo_model_id' => 9,
                'value' => '49.991666666667',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            48 => 
            array (
                'id' => 255,
                'product_id' => 4,
                'odoo_model_id' => 11,
                'value' => 'http://img.vola.fr/articles/5c87372aa070909c9412c968520cf1ea2fd13b5c.png_750x608_max.png',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            49 => 
            array (
                'id' => 256,
                'product_id' => 4,
                'odoo_model_id' => 13,
                'value' => 'Acheter',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            50 => 
            array (
                'id' => 257,
                'product_id' => 4,
                'odoo_model_id' => 14,
                'value' => 'ARTICLE STOCKABLE',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
            51 => 
            array (
                'id' => 258,
                'product_id' => 4,
                'odoo_model_id' => 15,
                'value' => 'TVA 20%',
                'created_at' => '2023-11-06 23:45:31',
                'updated_at' => '2023-11-06 23:45:31',
            ),
        ));
        
        
    }
}