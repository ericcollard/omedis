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
                'id' => 1,
                'name' => 'brand',
                'comment' => 'Product brand',
                'required' => 1,
                'attribute_list_id' => 3,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'season',
                'comment' => 'Year validity for the product, for the case where this product is specific to one season.',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 4,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ean',
                'comment' => 'EAN code : unique identifier for one product variant delivered by GS1 autority or similar',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 2,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'sku',
                'comment' => 'SKU code : unique identifier for one product variant for brand internal use',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 2,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'name',
                'comment' => 'Name : official name for trade. Should be as short as possible. Doesnt contain other information that can be found is specialised attribute, like variant data, brand name of year.',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 2,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'category',
                'comment' => 'Commercial category for product classification',
                'required' => 1,
                'attribute_list_id' => 2,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'description-long-fr',
                'comment' => 'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 7,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'description-short-fr',
                'comment' => 'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 7,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'pictures',
                'comment' => 'Product picture links, semicolon separated',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 2,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'wholesale-price',
                'comment' => 'Wholesale Price : Standard purchase price excuding VAT',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 16,
                'data_type_id' => 6,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2023-10-02 18:36:23',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'retail-price',
                'comment' => 'Retail Price : Recommanded retail price including VAT',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 16,
                'data_type_id' => 6,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2023-10-02 18:36:33',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'weight',
                'comment' => 'Weight for logistic purpose',
                'required' => 1,
                'attribute_list_id' => NULL,
                'unit_id' => 5,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'size-1',
                'comment' => 'Lenght for logistic purpose',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 2,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'size-2',
                'comment' => 'Wide for logistic purpose',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 2,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'size-3',
                'comment' => 'Height for logistic purpose',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 2,
                'data_type_id' => 5,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'discount-b2c',
                'comment' => 'Discounted retail price including VAT',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 4,
                'data_type_id' => 6,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'discount-b2b',
                'comment' => 'Discounted b2b price excluding VAT',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 4,
                'data_type_id' => 6,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'size-m-var',
                'comment' => 'Size in Meters - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 2,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2023-09-28 21:03:04',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'size-cm-var',
                'comment' => 'Size in Centimeter - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 3,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:16:38',
                'updated_at' => '2023-09-28 21:18:29',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'size-mm-var',
                'comment' => 'Size in Milimeter - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 4,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:17:49',
                'updated_at' => '2023-09-28 21:18:39',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'surface-m2-var',
                'comment' => 'Surface in Square Meters - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 7,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:18:58',
                'updated_at' => '2023-09-28 21:19:33',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'surface-cm2-var',
                'comment' => 'Surface in Square Centimeter - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 20,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:19:38',
                'updated_at' => '2023-09-28 21:19:59',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'volume-l-var',
                'comment' => 'Volume in Liters - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 9,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:21:44',
                'updated_at' => '2023-09-28 21:22:14',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'size-ft-var',
                'comment' => 'Size in Feets - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 12,
                'data_type_id' => 2,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:22:35',
                'updated_at' => '2023-10-02 18:48:26',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'size-inch-var',
                'comment' => 'Size in Inches - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 11,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:23:03',
                'updated_at' => '2023-09-28 21:23:33',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'boot-size-fr-var',
            'comment' => 'Boot size in French notation (35-36-..43-44) - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 4,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:24:04',
                'updated_at' => '2023-09-28 21:25:56',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'boot-size-uk-var',
            'comment' => 'Boot size in Uk notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:26:02',
                'updated_at' => '2023-09-28 21:27:22',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'boot-size-us-var',
            'comment' => 'Boot size in Us notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:27:29',
                'updated_at' => '2023-09-28 21:27:43',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'boot-size-mondo-var',
            'comment' => 'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
This represents the length of the foot in centimeters',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:28:38',
                'updated_at' => '2023-09-28 21:37:36',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'item-nb-var',
                'comment' => 'Item number - Variant index attribute
Various usage',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 1,
                'data_type_id' => 4,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:39:35',
                'updated_at' => '2023-09-28 21:40:21',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'weight-kg-var',
                'comment' => 'Weight in Kilogram - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 5,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:40:34',
                'updated_at' => '2023-09-28 21:41:08',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'weight-g-var',
                'comment' => 'Weight in grams - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => NULL,
                'unit_id' => 6,
                'data_type_id' => 5,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:41:12',
                'updated_at' => '2023-09-28 21:41:26',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'color-var',
                'comment' => 'Color - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => 1,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:41:56',
                'updated_at' => '2023-09-28 21:42:15',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'size-wear-eu-var',
            'comment' => 'Clothes EU sizing (36-38-40-42) - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => 5,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:42:35',
                'updated_at' => '2023-09-28 21:47:03',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'size-wear-us-var',
            'comment' => 'Clothes US sizing (2-4-6-8) - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => 7,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:43:43',
                'updated_at' => '2023-09-28 21:47:16',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'size-wear-uk-var',
            'comment' => 'Clothes UK sizing (2-4-6-8) - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => 6,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:44:26',
                'updated_at' => '2023-09-28 21:47:27',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'size-wear-int-var',
            'comment' => 'Clothes International sizing (XXS-XS... L-XL-XXL) - Variant index attribute',
                'required' => 0,
                'attribute_list_id' => 4,
                'unit_id' => NULL,
                'data_type_id' => 1,
                'user_id' => 2,
                'created_at' => '2023-09-28 21:45:10',
                'updated_at' => '2023-09-28 21:47:42',
            ),
        ));
        
        
    }
}