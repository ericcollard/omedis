<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'attribute_list_id' => 3,
                'comment' => 'Product brand',
                'created_at' => NULL,
                'data_type_id' => 1,
                'id' => 1,
                'name' => 'brand',
                'required' => 1,
                'unit_id' => NULL,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Year validity for the product, for the case where this product is specific to one season.',
                'created_at' => NULL,
                'data_type_id' => 4,
                'id' => 2,
                'name' => 'season',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            2 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'EAN code : unique identifier for one product variant delivered by GS1 autority or similar',
                'created_at' => NULL,
                'data_type_id' => 2,
                'id' => 3,
                'name' => 'ean',
                'required' => 1,
                'unit_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            3 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'SKU code : unique identifier for one product variant for brand internal use',
                'created_at' => NULL,
                'data_type_id' => 2,
                'id' => 4,
                'name' => 'sku',
                'required' => 1,
                'unit_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            4 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Name : official name for trade. Should be as short as possible. Doesnt contain other information that can be found is specialised attribute, like variant data, brand name of year.',
                'created_at' => NULL,
                'data_type_id' => 2,
                'id' => 5,
                'name' => 'name',
                'required' => 1,
                'unit_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            5 => 
            array (
                'attribute_list_id' => 2,
                'comment' => 'Commercial category for product classification',
                'created_at' => NULL,
                'data_type_id' => 1,
                'id' => 6,
                'name' => 'category',
                'required' => 1,
                'unit_id' => NULL,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            6 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.',
                'created_at' => NULL,
                'data_type_id' => 7,
                'id' => 7,
                'name' => 'description-long-fr',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            7 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum',
                'created_at' => NULL,
                'data_type_id' => 7,
                'id' => 8,
                'name' => 'description-short-fr',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            8 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Product picture links, semicolon separated',
                'created_at' => NULL,
                'data_type_id' => 2,
                'id' => 9,
                'name' => 'pictures',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            9 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Wholesale Price : Standard purchase price excuding VAT',
                'created_at' => NULL,
                'data_type_id' => 6,
                'id' => 10,
                'name' => 'wholesale-price',
                'required' => 1,
                'unit_id' => 4,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            10 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Retail Price : Recommanded retail price including VAT',
                'created_at' => NULL,
                'data_type_id' => 6,
                'id' => 11,
                'name' => 'retail-price',
                'required' => 1,
                'unit_id' => 4,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            11 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Weight for logistic purpose',
                'created_at' => NULL,
                'data_type_id' => 5,
                'id' => 12,
                'name' => 'weight',
                'required' => 1,
                'unit_id' => 5,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            12 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Lenght for logistic purpose',
                'created_at' => NULL,
                'data_type_id' => 5,
                'id' => 13,
                'name' => 'size-1',
                'required' => 0,
                'unit_id' => 2,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            13 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Wide for logistic purpose',
                'created_at' => NULL,
                'data_type_id' => 5,
                'id' => 14,
                'name' => 'size-2',
                'required' => 0,
                'unit_id' => 2,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            14 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Height for logistic purpose',
                'created_at' => NULL,
                'data_type_id' => 5,
                'id' => 15,
                'name' => 'size-3',
                'required' => 0,
                'unit_id' => 2,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            15 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Discounted retail price including VAT',
                'created_at' => NULL,
                'data_type_id' => 6,
                'id' => 16,
                'name' => 'discount-b2c',
                'required' => 0,
                'unit_id' => 4,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            16 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Discounted b2b price excluding VAT',
                'created_at' => NULL,
                'data_type_id' => 6,
                'id' => 17,
                'name' => 'discount-b2b',
                'required' => 0,
                'unit_id' => 4,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            17 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Size in Meters - Variant index attribute',
                'created_at' => NULL,
                'data_type_id' => 5,
                'id' => 18,
                'name' => 'size-m-var',
                'required' => 0,
                'unit_id' => 2,
                'updated_at' => '2023-09-28 21:03:04',
                'user_id' => 2,
            ),
            18 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Size in Centimeter - Variant index attribute',
                'created_at' => '2023-09-28 21:16:38',
                'data_type_id' => 5,
                'id' => 19,
                'name' => 'size-cm-var',
                'required' => 0,
                'unit_id' => 3,
                'updated_at' => '2023-09-28 21:18:29',
                'user_id' => 2,
            ),
            19 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Size in Milimeter - Variant index attribute',
                'created_at' => '2023-09-28 21:17:49',
                'data_type_id' => 5,
                'id' => 20,
                'name' => 'size-mm-var',
                'required' => 0,
                'unit_id' => 4,
                'updated_at' => '2023-09-28 21:18:39',
                'user_id' => 2,
            ),
            20 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Surface in Square Meters - Variant index attribute',
                'created_at' => '2023-09-28 21:18:58',
                'data_type_id' => 5,
                'id' => 21,
                'name' => 'surface-m2-var',
                'required' => 0,
                'unit_id' => 7,
                'updated_at' => '2023-09-28 21:19:33',
                'user_id' => 2,
            ),
            21 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Surface in Square Centimeter - Variant index attribute',
                'created_at' => '2023-09-28 21:19:38',
                'data_type_id' => 5,
                'id' => 22,
                'name' => 'surface-cm2-var',
                'required' => 0,
                'unit_id' => 20,
                'updated_at' => '2023-09-28 21:19:59',
                'user_id' => 2,
            ),
            22 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Volume in Liters - Variant index attribute',
                'created_at' => '2023-09-28 21:21:44',
                'data_type_id' => 5,
                'id' => 23,
                'name' => 'volume-l-var',
                'required' => 0,
                'unit_id' => 9,
                'updated_at' => '2023-09-28 21:22:14',
                'user_id' => 2,
            ),
            23 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Size in Feets - Variant index attribute',
                'created_at' => '2023-09-28 21:22:35',
                'data_type_id' => 5,
                'id' => 24,
                'name' => 'size-ft-var',
                'required' => 0,
                'unit_id' => 12,
                'updated_at' => '2023-09-28 21:22:57',
                'user_id' => 2,
            ),
            24 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Size in Inches - Variant index attribute',
                'created_at' => '2023-09-28 21:23:03',
                'data_type_id' => 5,
                'id' => 25,
                'name' => 'size-inch-var',
                'required' => 0,
                'unit_id' => 11,
                'updated_at' => '2023-09-28 21:23:33',
                'user_id' => 2,
            ),
            25 => 
            array (
                'attribute_list_id' => NULL,
            'comment' => 'Boot size in French notation (35-36-..43-44) - Variant index attribute',
                'created_at' => '2023-09-28 21:24:04',
                'data_type_id' => 4,
                'id' => 26,
                'name' => 'boot-size-fr-var',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => '2023-09-28 21:25:56',
                'user_id' => 2,
            ),
            26 => 
            array (
                'attribute_list_id' => NULL,
            'comment' => 'Boot size in Uk notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value',
                'created_at' => '2023-09-28 21:26:02',
                'data_type_id' => 5,
                'id' => 27,
                'name' => 'boot-size-uk-var',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => '2023-09-28 21:27:22',
                'user_id' => 2,
            ),
            27 => 
            array (
                'attribute_list_id' => NULL,
            'comment' => 'Boot size in Us notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value',
                'created_at' => '2023-09-28 21:27:29',
                'data_type_id' => 5,
                'id' => 28,
                'name' => 'boot-size-us-var',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => '2023-09-28 21:27:43',
                'user_id' => 2,
            ),
            28 => 
            array (
                'attribute_list_id' => NULL,
            'comment' => 'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
This represents the length of the foot in centimeters',
                'created_at' => '2023-09-28 21:28:38',
                'data_type_id' => 5,
                'id' => 29,
                'name' => 'boot-size-mondo-var',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => '2023-09-28 21:37:36',
                'user_id' => 2,
            ),
            29 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Item number - Variant index attribute
Various usage',
                'created_at' => '2023-09-28 21:39:35',
                'data_type_id' => 4,
                'id' => 30,
                'name' => 'item-nb-var',
                'required' => 0,
                'unit_id' => 1,
                'updated_at' => '2023-09-28 21:40:21',
                'user_id' => 2,
            ),
            30 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Weight in Kilogram - Variant index attribute',
                'created_at' => '2023-09-28 21:40:34',
                'data_type_id' => 5,
                'id' => 31,
                'name' => 'weight-kg-var',
                'required' => 0,
                'unit_id' => 5,
                'updated_at' => '2023-09-28 21:41:08',
                'user_id' => 2,
            ),
            31 => 
            array (
                'attribute_list_id' => NULL,
                'comment' => 'Weight in grams - Variant index attribute',
                'created_at' => '2023-09-28 21:41:12',
                'data_type_id' => 5,
                'id' => 32,
                'name' => 'weight-g-var',
                'required' => 0,
                'unit_id' => 6,
                'updated_at' => '2023-09-28 21:41:26',
                'user_id' => 2,
            ),
            32 => 
            array (
                'attribute_list_id' => 1,
                'comment' => 'Color - Variant index attribute',
                'created_at' => '2023-09-28 21:41:56',
                'data_type_id' => 1,
                'id' => 33,
                'name' => 'color-var',
                'required' => 0,
                'unit_id' => NULL,
                'updated_at' => '2023-09-28 21:42:15',
                'user_id' => 2,
            ),
            33 => 
            array (
                'attribute_list_id' => 5,
            'comment' => 'Clothes EU sizing (36-38-40-42) - Variant index attribute',
                'created_at' => '2023-09-28 21:42:35',
                'data_type_id' => 1,
                'id' => 34,
                'name' => 'size-wear-eu-var',
                'required' => 0,
                'unit_id' => NULL,
                'updated_at' => '2023-09-28 21:47:03',
                'user_id' => 2,
            ),
            34 => 
            array (
                'attribute_list_id' => 7,
            'comment' => 'Clothes US sizing (2-4-6-8) - Variant index attribute',
                'created_at' => '2023-09-28 21:43:43',
                'data_type_id' => 1,
                'id' => 35,
                'name' => 'size-wear-us-var',
                'required' => 0,
                'unit_id' => NULL,
                'updated_at' => '2023-09-28 21:47:16',
                'user_id' => 2,
            ),
            35 => 
            array (
                'attribute_list_id' => 6,
            'comment' => 'Clothes UK sizing (2-4-6-8) - Variant index attribute',
                'created_at' => '2023-09-28 21:44:26',
                'data_type_id' => 1,
                'id' => 36,
                'name' => 'size-wear-uk-var',
                'required' => 0,
                'unit_id' => NULL,
                'updated_at' => '2023-09-28 21:47:27',
                'user_id' => 2,
            ),
            36 => 
            array (
                'attribute_list_id' => 4,
            'comment' => 'Clothes International sizing (XXS-XS... L-XL-XXL) - Variant index attribute',
                'created_at' => '2023-09-28 21:45:10',
                'data_type_id' => 1,
                'id' => 37,
                'name' => 'size-wear-int-var',
                'required' => 0,
                'unit_id' => NULL,
                'updated_at' => '2023-09-28 21:47:42',
                'user_id' => 2,
            ),
        ));
        
        
    }
}