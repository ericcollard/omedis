<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('histories')->delete();
        
        \DB::table('histories')->insert(array (
            0 => 
            array (
                'action' => 'VERSION',
                'created_at' => '2023-10-02 18:48:26',
                'id' => 1,
                'model' => 'all',
                'new_values' => '0.6',
                'old_values' => '0.5',
                'updated_at' => '2023-10-02 18:48:26',
                'user_id' => '1',
            ),
            1 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-11 07:05:37',
                'id' => 2,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',comment: \'Product brand
This name has to be the one of the brand, but not the one of company or distributor
Exemple : "Duotone" but not "Boards and More".\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',comment: \'Product brand
This name has to be the one of the brand, and not the one of company or distributor.\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-11 07:05:37',
                'user_id' => '2',
            ),
            2 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 20:50:09',
                'id' => 3,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'windsurf-sail-wave\',comment: \'windsurf sail wave\',attribute_list_id: \'2\',odoo_name: \'Tous / Windsurf / Voile / Vague\'',
                'old_values' => 'name: \'windsurf-sail-wave\',comment: \'windsurf sail wave\',attribute_list_id: \'2\',odoo_name: \'\'',
                'updated_at' => '2023-10-12 20:50:09',
                'user_id' => '2',
            ),
            3 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-12 21:10:56',
                'id' => 4,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-12 21:10:56',
                'user_id' => '2',
            ),
            4 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:10:56',
                'id' => 5,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-12 21:10:56',
                'user_id' => '2',
            ),
            5 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-12 21:11:15',
                'id' => 6,
                'model' => 'AttributeList',
                'new_values' => 'id: \'\',name: \'supplier\',comment: \'\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-12 21:11:15',
                'user_id' => '2',
            ),
            6 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:11:15',
                'id' => 7,
                'model' => 'AttributeList',
                'new_values' => 'id: \'9\',name: \'supplier\',comment: \'\'',
                'old_values' => 'id: \'9\',name: \'supplier\',comment: \'\'',
                'updated_at' => '2023-10-12 21:11:15',
                'user_id' => '2',
            ),
            7 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:11:43',
                'id' => 8,
                'model' => 'AttributeList',
                'new_values' => 'id: \'9\',name: \'supplier\',comment: \'Supplier company\'',
                'old_values' => 'id: \'9\',name: \'supplier\',comment: \'\'',
                'updated_at' => '2023-10-12 21:11:43',
                'user_id' => '2',
            ),
            8 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:11:53',
                'id' => 9,
                'model' => 'AttributeList',
                'new_values' => 'id: \'9\',name: \'supplier\',comment: \'Supplier company or distributor\'',
                'old_values' => 'id: \'9\',name: \'supplier\',comment: \'Supplier company\'',
                'updated_at' => '2023-10-12 21:11:53',
                'user_id' => '2',
            ),
            9 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-12 21:12:56',
                'id' => 10,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'boards-and-more\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Boards & More gmbh\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-12 21:12:56',
                'user_id' => '2',
            ),
            10 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:12:56',
                'id' => 11,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'boards-and-more\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Boards & More gmbh\'',
                'old_values' => 'name: \'boards-and-more\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Boards & More gmbh\'',
                'updated_at' => '2023-10-12 21:12:56',
                'user_id' => '2',
            ),
            11 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:13:18',
                'id' => 12,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-12 21:13:18',
                'user_id' => '2',
            ),
            12 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-12 21:14:43',
                'id' => 13,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'f-one\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'F One\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-12 21:14:43',
                'user_id' => '2',
            ),
            13 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:14:43',
                'id' => 14,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'f-one\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'F One\'',
                'old_values' => 'name: \'f-one\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'F One\'',
                'updated_at' => '2023-10-12 21:14:43',
                'user_id' => '2',
            ),
            14 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-12 21:14:57',
                'id' => 15,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'vola\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Vola\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-12 21:14:57',
                'user_id' => '2',
            ),
            15 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:14:57',
                'id' => 16,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'vola\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Vola\'',
                'old_values' => 'name: \'vola\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Vola\'',
                'updated_at' => '2023-10-12 21:14:57',
                'user_id' => '2',
            ),
            16 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-12 21:18:56',
                'id' => 17,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'picture\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-12 21:18:56',
                'user_id' => '2',
            ),
            17 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:18:56',
                'id' => 18,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'picture\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'old_values' => 'name: \'picture\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'updated_at' => '2023-10-12 21:18:56',
                'user_id' => '2',
            ),
            18 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-12 21:19:45',
                'id' => 19,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'picture-organic-clothing\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'old_values' => 'name: \'picture\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'updated_at' => '2023-10-12 21:19:45',
                'user_id' => '2',
            ),
            19 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 07:43:30',
                'id' => 20,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'test\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'Product brand
This name has to be the one of the brand, but not the one of company or distributor
Exemple : "Duotone" but not "Boards and More".\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 07:43:30',
                'user_id' => '2',
            ),
            20 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 07:43:59',
                'id' => 21,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'test\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 07:43:59',
                'user_id' => '2',
            ),
            21 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 07:45:51',
                'id' => 22,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-surface-m2\',odoo_name: \'Surface (m2)\',comment: \'<p>Surface in Square Meters - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'7\',data_type_id: \'5\'',
                'old_values' => 'name: \'var-surface-m2\',odoo_name: \'\',comment: \'Surface in Square Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'7\',data_type_id: \'5\'',
                'updated_at' => '2023-10-14 07:45:51',
                'user_id' => '2',
            ),
            22 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-14 09:49:14',
                'id' => 23,
                'model' => 'Attribute',
                'new_values' => 'name: \'test\',odoo_name: \'\',comment: \'\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-14 09:49:14',
                'user_id' => '2',
            ),
            23 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 09:49:14',
                'id' => 24,
                'model' => 'Attribute',
                'new_values' => 'name: \'test\',odoo_name: \'\',comment: \'\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'old_values' => 'name: \'test\',odoo_name: \'\',comment: \'\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'updated_at' => '2023-10-14 09:49:14',
                'user_id' => '2',
            ),
            24 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 09:58:31',
                'id' => 25,
                'model' => 'Attribute',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-14 09:58:31',
                'user_id' => '2',
            ),
            25 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 09:58:31',
                'id' => 26,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 09:58:31',
                'user_id' => '2',
            ),
            26 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:00:28',
                'id' => 27,
                'model' => 'Attribute',
                'new_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-14 10:00:28',
                'user_id' => '2',
            ),
            27 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:00:28',
                'id' => 28,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 10:00:28',
                'user_id' => '2',
            ),
            28 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:00:31',
                'id' => 29,
                'model' => 'Attribute',
                'new_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-14 10:00:31',
                'user_id' => '2',
            ),
            29 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:00:31',
                'id' => 30,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 10:00:31',
                'user_id' => '2',
            ),
            30 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:00:34',
                'id' => 31,
                'model' => 'Attribute',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-14 10:00:34',
                'user_id' => '2',
            ),
            31 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:00:34',
                'id' => 32,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 10:00:34',
                'user_id' => '2',
            ),
            32 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:01:55',
                'id' => 33,
                'model' => 'Attribute',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-14 10:01:55',
                'user_id' => '2',
            ),
            33 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:01:55',
                'id' => 34,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 10:01:55',
                'user_id' => '2',
            ),
            34 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:02:03',
                'id' => 35,
                'model' => 'Attribute',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-14 10:02:03',
                'user_id' => '2',
            ),
            35 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:02:03',
                'id' => 36,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 10:02:03',
                'user_id' => '2',
            ),
            36 => 
            array (
                'action' => 'DELETE',
                'created_at' => '2023-10-14 10:02:12',
                'id' => 37,
                'model' => 'Attribute',
                'new_values' => 'none',
                'old_values' => 'name: \'test\',odoo_name: \'\',comment: \'\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'updated_at' => '2023-10-14 10:02:12',
                'user_id' => '2',
            ),
            37 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:02:18',
                'id' => 38,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-14 10:02:18',
                'user_id' => '2',
            ),
            38 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:02:18',
                'id' => 39,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 10:02:18',
                'user_id' => '2',
            ),
            39 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:02:23',
                'id' => 40,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 10:02:23',
                'user_id' => '2',
            ),
            40 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-14 10:02:23',
                'id' => 41,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-14 10:02:23',
                'user_id' => '2',
            ),
            41 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:25:11',
                'id' => 42,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:25:11',
                'user_id' => '2',
            ),
            42 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:25:48',
                'id' => 43,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:25:48',
                'user_id' => '2',
            ),
            43 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:25:48',
                'id' => 44,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:25:48',
                'user_id' => '2',
            ),
            44 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:20',
                'id' => 45,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:20',
                'user_id' => '2',
            ),
            45 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:24',
                'id' => 46,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:24',
                'user_id' => '2',
            ),
            46 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:31',
                'id' => 47,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:31',
                'user_id' => '2',
            ),
            47 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:31',
                'id' => 48,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:31',
                'user_id' => '2',
            ),
            48 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:32',
                'id' => 49,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:32',
                'user_id' => '2',
            ),
            49 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:32',
                'id' => 50,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:32',
                'user_id' => '2',
            ),
            50 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:34',
                'id' => 51,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:34',
                'user_id' => '2',
            ),
            51 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:34',
                'id' => 52,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:34',
                'user_id' => '2',
            ),
            52 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:35',
                'id' => 53,
                'model' => 'Attribute',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:35',
                'user_id' => '2',
            ),
            53 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:35',
                'id' => 54,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:35',
                'user_id' => '2',
            ),
            54 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:37',
                'id' => 55,
                'model' => 'Attribute',
                'new_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 12:26:37',
                'user_id' => '2',
            ),
            55 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:37',
                'id' => 56,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:37',
                'user_id' => '2',
            ),
            56 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:38',
                'id' => 57,
                'model' => 'Attribute',
                'new_values' => 'name: \'sku\',odoo_name: \'\',comment: \'SKU code : unique identifier for one product variant for brand internal use.
This code has to be unique for one product, and has to change each time the product is changing technically (even if only graphics).
It will be used by programs for price updates\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'sku\',odoo_name: \'\',comment: \'SKU code : unique identifier for one product variant for brand internal use.
This code has to be unique for one product, and has to change each time the product is changing technically (even if only graphics).
It will be used by programs for price updates\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 12:26:38',
                'user_id' => '2',
            ),
            57 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:38',
                'id' => 58,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:38',
                'user_id' => '2',
            ),
            58 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:39',
                'id' => 59,
                'model' => 'Attribute',
                'new_values' => 'name: \'name\',odoo_name: \'\',comment: \'Name : official name for trade. Should be as short as possible.
Doesn\'t contain other information that can be found is specialized attribute, like variant data, brand name of year.
For a tee shirt, available in 3 colors and 4 sizes, this will be for exemple : "BRADFORD", and variants data will complete with size and color
For a tee shirt, available in only one colors and 4 sizes, this will be for exemple : "BRADFORD RED", and variants data will complete with size
In both case, the name in not containing the category ("TEE") or brand ("PICTURE").\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'name\',odoo_name: \'\',comment: \'Name : official name for trade. Should be as short as possible.
Doesn\'t contain other information that can be found is specialized attribute, like variant data, brand name of year.
For a tee shirt, available in 3 colors and 4 sizes, this will be for exemple : "BRADFORD", and variants data will complete with size and color
For a tee shirt, available in only one colors and 4 sizes, this will be for exemple : "BRADFORD RED", and variants data will complete with size
In both case, the name in not containing the category ("TEE") or brand ("PICTURE").\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 12:26:39',
                'user_id' => '2',
            ),
            59 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:39',
                'id' => 60,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:39',
                'user_id' => '2',
            ),
            60 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:42',
                'id' => 61,
                'model' => 'Attribute',
                'new_values' => 'name: \'category\',odoo_name: \'\',comment: \'Commercial category for product classification\',required: \'1\',attribute_list_id: \'2\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'category\',odoo_name: \'\',comment: \'Commercial category for product classification\',required: \'1\',attribute_list_id: \'2\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:42',
                'user_id' => '2',
            ),
            61 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:42',
                'id' => 62,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:42',
                'user_id' => '2',
            ),
            62 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:43',
                'id' => 63,
                'model' => 'Attribute',
                'new_values' => 'name: \'description-long-fr\',odoo_name: \'\',comment: \'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'old_values' => 'name: \'description-long-fr\',odoo_name: \'\',comment: \'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'updated_at' => '2023-10-16 12:26:43',
                'user_id' => '2',
            ),
            63 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:43',
                'id' => 64,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:43',
                'user_id' => '2',
            ),
            64 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:46',
                'id' => 65,
                'model' => 'Attribute',
                'new_values' => 'name: \'description-short-fr\',odoo_name: \'\',comment: \'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'old_values' => 'name: \'description-short-fr\',odoo_name: \'\',comment: \'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'updated_at' => '2023-10-16 12:26:46',
                'user_id' => '2',
            ),
            65 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:46',
                'id' => 66,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:46',
                'user_id' => '2',
            ),
            66 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:49',
                'id' => 67,
                'model' => 'Attribute',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:49',
                'user_id' => '2',
            ),
            67 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:49',
                'id' => 68,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:49',
                'user_id' => '2',
            ),
            68 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:50',
                'id' => 69,
                'model' => 'Attribute',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:50',
                'user_id' => '2',
            ),
            69 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:50',
                'id' => 70,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:50',
                'user_id' => '2',
            ),
            70 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:52',
                'id' => 71,
                'model' => 'Attribute',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:26:52',
                'user_id' => '2',
            ),
            71 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:52',
                'id' => 72,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:52',
                'user_id' => '2',
            ),
            72 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:53',
                'id' => 73,
                'model' => 'Attribute',
                'new_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 12:26:53',
                'user_id' => '2',
            ),
            73 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:53',
                'id' => 74,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:53',
                'user_id' => '2',
            ),
            74 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:54',
                'id' => 75,
                'model' => 'Attribute',
                'new_values' => 'name: \'sku\',odoo_name: \'\',comment: \'SKU code : unique identifier for one product variant for brand internal use.
This code has to be unique for one product, and has to change each time the product is changing technically (even if only graphics).
It will be used by programs for price updates\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'sku\',odoo_name: \'\',comment: \'SKU code : unique identifier for one product variant for brand internal use.
This code has to be unique for one product, and has to change each time the product is changing technically (even if only graphics).
It will be used by programs for price updates\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 12:26:54',
                'user_id' => '2',
            ),
            75 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:54',
                'id' => 76,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:54',
                'user_id' => '2',
            ),
            76 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:56',
                'id' => 77,
                'model' => 'Attribute',
                'new_values' => 'name: \'name\',odoo_name: \'\',comment: \'Name : official name for trade. Should be as short as possible.
Doesn\'t contain other information that can be found is specialized attribute, like variant data, brand name of year.
For a tee shirt, available in 3 colors and 4 sizes, this will be for exemple : "BRADFORD", and variants data will complete with size and color
For a tee shirt, available in only one colors and 4 sizes, this will be for exemple : "BRADFORD RED", and variants data will complete with size
In both case, the name in not containing the category ("TEE") or brand ("PICTURE").\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'name\',odoo_name: \'\',comment: \'Name : official name for trade. Should be as short as possible.
Doesn\'t contain other information that can be found is specialized attribute, like variant data, brand name of year.
For a tee shirt, available in 3 colors and 4 sizes, this will be for exemple : "BRADFORD", and variants data will complete with size and color
For a tee shirt, available in only one colors and 4 sizes, this will be for exemple : "BRADFORD RED", and variants data will complete with size
In both case, the name in not containing the category ("TEE") or brand ("PICTURE").\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 12:26:56',
                'user_id' => '2',
            ),
            77 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:56',
                'id' => 78,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:56',
                'user_id' => '2',
            ),
            78 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:57',
                'id' => 79,
                'model' => 'Attribute',
                'new_values' => 'name: \'category\',odoo_name: \'\',comment: \'Commercial category for product classification\',required: \'1\',attribute_list_id: \'2\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'category\',odoo_name: \'\',comment: \'Commercial category for product classification\',required: \'1\',attribute_list_id: \'2\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:57',
                'user_id' => '2',
            ),
            79 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:57',
                'id' => 80,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:57',
                'user_id' => '2',
            ),
            80 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:58',
                'id' => 81,
                'model' => 'Attribute',
                'new_values' => 'name: \'description-long-fr\',odoo_name: \'\',comment: \'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'old_values' => 'name: \'description-long-fr\',odoo_name: \'\',comment: \'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'updated_at' => '2023-10-16 12:26:58',
                'user_id' => '2',
            ),
            81 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:26:58',
                'id' => 82,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:26:58',
                'user_id' => '2',
            ),
            82 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:01',
                'id' => 83,
                'model' => 'Attribute',
                'new_values' => 'name: \'description-short-fr\',odoo_name: \'\',comment: \'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'old_values' => 'name: \'description-short-fr\',odoo_name: \'\',comment: \'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'updated_at' => '2023-10-16 12:27:01',
                'user_id' => '2',
            ),
            83 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:01',
                'id' => 84,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:27:01',
                'user_id' => '2',
            ),
            84 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:02',
                'id' => 85,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:27:02',
                'user_id' => '2',
            ),
            85 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:02',
                'id' => 86,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:27:02',
                'user_id' => '2',
            ),
            86 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:06',
                'id' => 87,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:27:06',
                'user_id' => '2',
            ),
            87 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:06',
                'id' => 88,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:27:06',
                'user_id' => '2',
            ),
            88 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:12',
                'id' => 89,
                'model' => 'Attribute',
                'new_values' => 'name: \'pictures\',odoo_name: \'\',comment: \'Product picture links, semicolon separated, no space or special character except _ and -, most important first.
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format.
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'pictures\',odoo_name: \'\',comment: \'Product picture links, semicolon separated, no space or special character except _ and -, most important first.
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format.
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 12:27:12',
                'user_id' => '2',
            ),
            89 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:12',
                'id' => 90,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:27:12',
                'user_id' => '2',
            ),
            90 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:17',
                'id' => 91,
                'model' => 'Attribute',
                'new_values' => 'name: \'wholesale-price\',odoo_name: \'\',comment: \'Wholesale Price : Standard purchase price excuding VAT.
This does not include any discount (like volume discount, year discount, client specific discount).\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'old_values' => 'name: \'wholesale-price\',odoo_name: \'\',comment: \'Wholesale Price : Standard purchase price excuding VAT.
This does not include any discount (like volume discount, year discount, client specific discount).\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'updated_at' => '2023-10-16 12:27:17',
                'user_id' => '2',
            ),
            91 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:17',
                'id' => 92,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:27:17',
                'user_id' => '2',
            ),
            92 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:21',
                'id' => 93,
                'model' => 'Attribute',
                'new_values' => 'name: \'pictures\',odoo_name: \'\',comment: \'Product picture links, semicolon separated, no space or special character except _ and -, most important first.
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format.
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'pictures\',odoo_name: \'\',comment: \'Product picture links, semicolon separated, no space or special character except _ and -, most important first.
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format.
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 12:27:21',
                'user_id' => '2',
            ),
            93 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:21',
                'id' => 94,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:27:21',
                'user_id' => '2',
            ),
            94 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:25',
                'id' => 95,
                'model' => 'Attribute',
                'new_values' => 'name: \'wholesale-price\',odoo_name: \'\',comment: \'Wholesale Price : Standard purchase price excuding VAT.
This does not include any discount (like volume discount, year discount, client specific discount).\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'old_values' => 'name: \'wholesale-price\',odoo_name: \'\',comment: \'Wholesale Price : Standard purchase price excuding VAT.
This does not include any discount (like volume discount, year discount, client specific discount).\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'updated_at' => '2023-10-16 12:27:25',
                'user_id' => '2',
            ),
            95 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:25',
                'id' => 96,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:27:25',
                'user_id' => '2',
            ),
            96 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:28',
                'id' => 97,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:27:28',
                'user_id' => '2',
            ),
            97 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:28',
                'id' => 98,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:27:28',
                'user_id' => '2',
            ),
            98 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:33',
                'id' => 99,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:27:33',
                'user_id' => '2',
            ),
            99 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:33',
                'id' => 100,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:27:33',
                'user_id' => '2',
            ),
            100 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:38',
                'id' => 101,
                'model' => 'Attribute',
                'new_values' => 'name: \'retail-price\',odoo_name: \'\',comment: \'Retail Price : Recommanded retail price including VAT\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'old_values' => 'name: \'retail-price\',odoo_name: \'\',comment: \'Retail Price : Recommanded retail price including VAT\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'updated_at' => '2023-10-16 12:27:38',
                'user_id' => '2',
            ),
            101 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:38',
                'id' => 102,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 12:27:38',
                'user_id' => '2',
            ),
            102 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:44',
                'id' => 103,
                'model' => 'Attribute',
                'new_values' => 'name: \'retail-price\',odoo_name: \'\',comment: \'Retail Price : Recommanded retail price including VAT\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'old_values' => 'name: \'retail-price\',odoo_name: \'\',comment: \'Retail Price : Recommanded retail price including VAT\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'updated_at' => '2023-10-16 12:27:44',
                'user_id' => '2',
            ),
            103 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 12:27:44',
                'id' => 104,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 12:27:44',
                'user_id' => '2',
            ),
            104 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:00:58',
                'id' => 105,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-m\',odoo_name: \'Taille (m)\',comment: \'<p>Size in Meters. Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'old_values' => 'name: \'var-size-m\',odoo_name: \'\',comment: \'Size in Meters.
Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:00:58',
                'user_id' => '2',
            ),
            105 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:01:39',
                'id' => 106,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-cm\',odoo_name: \'Taille (cm)\',comment: \'<p>Size in Centimeter - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'3\',data_type_id: \'5\'',
                'old_values' => 'name: \'var-size-cm\',odoo_name: \'\',comment: \'Size in Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'3\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:01:39',
                'user_id' => '2',
            ),
            106 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:02:12',
                'id' => 107,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-mm\',odoo_name: \'Taille (mm)\',comment: \'<p>Size in Milimeter - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'4\',data_type_id: \'5\'',
                'old_values' => 'name: \'var-size-mm\',odoo_name: \'\',comment: \'Size in Milimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'4\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:02:12',
                'user_id' => '2',
            ),
            107 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:02:38',
                'id' => 108,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-surface-cm2\',odoo_name: \'Surface (cm2)\',comment: \'<p>Surface in Square Centimeter - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'20\',data_type_id: \'5\'',
                'old_values' => 'name: \'var-surface-cm2\',odoo_name: \'\',comment: \'Surface in Square Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'20\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:02:38',
                'user_id' => '2',
            ),
            108 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:02:58',
                'id' => 109,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-volume-l\',odoo_name: \'Volume (L)\',comment: \'<p>Volume in Liters - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'9\',data_type_id: \'5\'',
                'old_values' => 'name: \'var-volume-l\',odoo_name: \'\',comment: \'Volume in Liters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'9\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:02:58',
                'user_id' => '2',
            ),
            109 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:03:25',
                'id' => 110,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-ft\',odoo_name: \'Taille (pieds)\',comment: \'<p>Size in Feets - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'2\'',
                'old_values' => 'name: \'var-size-ft\',odoo_name: \'\',comment: \'Size in Feets - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'2\'',
                'updated_at' => '2023-10-16 14:03:25',
                'user_id' => '2',
            ),
            110 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:03:58',
                'id' => 111,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-inch\',odoo_name: \'Taille (pouces)\',comment: \'<p>Size in Inches - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'11\',data_type_id: \'5\'',
                'old_values' => 'name: \'var-size-inch\',odoo_name: \'\',comment: \'Size in Inches - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'11\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:03:58',
                'user_id' => '2',
            ),
            111 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:04:22',
                'id' => 112,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-boot-size-fr\',odoo_name: \'Pointure (Fr)\',comment: \'<p>Boot size in French notation (35-36-..43-44) - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
            'old_values' => 'name: \'var-boot-size-fr\',odoo_name: \'\',comment: \'Boot size in French notation (35-36-..43-44) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 14:04:22',
                'user_id' => '2',
            ),
            112 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:04:39',
                'id' => 113,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-boot-size-uk\',odoo_name: \'Pointure (Uk)\',comment: \'<p>Boot size in Uk notation (6-6.5-7 ... 10-10.5) - Variant index attribute Only integer value or x.5 value</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'var-boot-size-uk\',odoo_name: \'\',comment: \'Boot size in Uk notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:04:39',
                'user_id' => '2',
            ),
            113 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:05:01',
                'id' => 114,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-boot-size-us\',odoo_name: \'Pointure (Us)\',comment: \'<p>Boot size in Us notation (6-6.5-7 ... 10-10.5) - Variant index attribute Only integer value or x.5 value</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'var-boot-size-us\',odoo_name: \'\',comment: \'Boot size in Us notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:05:01',
                'user_id' => '2',
            ),
            114 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:05:29',
                'id' => 115,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-boot-size-mondo\',odoo_name: \'Pointure (mondo)\',comment: \'<p>Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute Only integer value or x.5 value This represents the length of the foot in centimeters</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'var-boot-size-mondo\',odoo_name: \'\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
This represents the length of the foot in centimeters\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:05:29',
                'user_id' => '2',
            ),
            115 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:05:54',
                'id' => 116,
                'model' => 'Attribute',
                'new_values' => 'name: \'var-item-nb\',odoo_name: \'Repère\',comment: \'<p>Item number - Variant index attribute Various usage</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'var-item-nb\',odoo_name: \'\',comment: \'Item number - Variant index attribute
Various usage\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-16 14:05:54',
                'user_id' => '2',
            ),
            116 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:06:21',
                'id' => 117,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-weight-g\',odoo_name: \'Poids (g)\',comment: \'<p>Weight in grams - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'6\',data_type_id: \'5\'',
                'old_values' => 'name: \'var-weight-g\',odoo_name: \'\',comment: \'Weight in grams - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'6\',data_type_id: \'5\'',
                'updated_at' => '2023-10-16 14:06:21',
                'user_id' => '2',
            ),
            117 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:06:55',
                'id' => 118,
                'model' => 'Attribute',
                'new_values' => 'name: \'var-color\',odoo_name: \'Couleur\',comment: \'<p>Color - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'var-color\',odoo_name: \'\',comment: \'Color - Variant index attribute\',required: \'0\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 14:06:55',
                'user_id' => '2',
            ),
            118 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:07:26',
                'id' => 119,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-wear-eu\',odoo_name: \'Taille Wear\',comment: \'<p>Clothes EU sizing (36-38-40-42) - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'5\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'var-size-wear-eu\',odoo_name: \'\',comment: \'Clothes EU sizing (36-38-40-42) - Variant index attribute\',required: \'0\',attribute_list_id: \'5\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 14:07:26',
                'user_id' => '2',
            ),
            119 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:07:32',
                'id' => 120,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-wear-us\',odoo_name: \'Taille Wear\',comment: \'<p>Clothes US sizing (2-4-6-8) - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'7\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'var-size-wear-us\',odoo_name: \'\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'7\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 14:07:32',
                'user_id' => '2',
            ),
            120 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:07:40',
                'id' => 121,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-wear-uk\',odoo_name: \'Taille Wear\',comment: \'<p>Clothes UK sizing (2-4-6-8) - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'6\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'var-size-wear-uk\',odoo_name: \'\',comment: \'Clothes UK sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'6\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 14:07:40',
                'user_id' => '2',
            ),
            121 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:07:50',
                'id' => 122,
                'model' => 'Attribute',
            'new_values' => 'name: \'var-size-wear-int\',odoo_name: \'Taille Wear\',comment: \'<p>Clothes International sizing (XXS-XS... L-XL-XXL) - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'4\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'var-size-wear-int\',odoo_name: \'\',comment: \'Clothes International sizing (XXS-XS... L-XL-XXL) - Variant index attribute\',required: \'0\',attribute_list_id: \'4\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-16 14:07:50',
                'user_id' => '2',
            ),
            122 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:11:31',
                'id' => 123,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxs\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'XXS\'',
                'old_values' => 'name: \'xxs\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 14:11:31',
                'user_id' => '2',
            ),
            123 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:11:36',
                'id' => 124,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xs\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'XS\'',
                'old_values' => 'name: \'xs\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 14:11:36',
                'user_id' => '2',
            ),
            124 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:11:41',
                'id' => 125,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'s\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'S\'',
                'old_values' => 'name: \'s\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 14:11:41',
                'user_id' => '2',
            ),
            125 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:11:52',
                'id' => 126,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'m\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'M\'',
                'old_values' => 'name: \'m\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 14:11:52',
                'user_id' => '2',
            ),
            126 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:11:59',
                'id' => 127,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'l\',comment: \'Large tall\',attribute_list_id: \'4\',odoo_name: \'L\'',
                'old_values' => 'name: \'l\',comment: \'Large tall\',attribute_list_id: \'4\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 14:11:59',
                'user_id' => '2',
            ),
            127 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:12:07',
                'id' => 128,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xl\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'XL\'',
                'old_values' => 'name: \'xl\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 14:12:07',
                'user_id' => '2',
            ),
            128 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 14:12:15',
                'id' => 129,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxl\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'XXL\'',
                'old_values' => 'name: \'xxl\',comment: \'\',attribute_list_id: \'4\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 14:12:15',
                'user_id' => '2',
            ),
            129 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 22:20:17',
                'id' => 130,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'kitesurf-board-surf\',comment: \'kitesurf board surf\',attribute_list_id: \'2\',odoo_name: \'Tous / Kitesurf / Flotteur / Directionnel\'',
                'old_values' => 'name: \'kitesurf-board-surf\',comment: \'kitesurf board surf\',attribute_list_id: \'2\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 22:20:17',
                'user_id' => '2',
            ),
            130 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 22:21:29',
                'id' => 131,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'clothing-technical-jacket-men\',comment: \'clothing technical jacket men\',attribute_list_id: \'2\',odoo_name: \'Tous / Equipement / Vêtements / Technique / Veste / Homme\'',
                'old_values' => 'name: \'clothing-technical-jacket-men\',comment: \'clothing technical jacket men\',attribute_list_id: \'2\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 22:21:29',
                'user_id' => '2',
            ),
            131 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-16 22:22:16',
                'id' => 132,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'ski-maintenance-tools\',comment: \'ski maintenance tools\',attribute_list_id: \'2\',odoo_name: \'Tous / Ski alpin / Entretien / Outillage\'',
                'old_values' => 'name: \'ski-maintenance-tools\',comment: \'ski maintenance tools\',attribute_list_id: \'2\',odoo_name: \'\'',
                'updated_at' => '2023-10-16 22:22:16',
                'user_id' => '2',
            ),
            132 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-11-06 23:40:32',
                'id' => 133,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'fone\',comment: \'FONE\',attribute_list_id: \'3\',odoo_name: \'fone\'',
                'old_values' => 'name: \'fone\',comment: \'FONE\',attribute_list_id: \'3\',odoo_name: \'\'',
                'updated_at' => '2023-11-06 23:40:32',
                'user_id' => '2',
            ),
            133 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-11-06 23:40:46',
                'id' => 134,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'picture\',comment: \'PICTURE\',attribute_list_id: \'3\',odoo_name: \'picture\'',
                'old_values' => 'name: \'picture\',comment: \'PICTURE\',attribute_list_id: \'3\',odoo_name: \'\'',
                'updated_at' => '2023-11-06 23:40:46',
                'user_id' => '2',
            ),
            134 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-11-06 23:43:06',
                'id' => 135,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'deep-sea-base\',comment: \'Deep Sea Base #2c2c57\',attribute_list_id: \'1\',odoo_name: \'Bleu marine\'',
                'old_values' => 'name: \'deep-sea-base\',comment: \'Deep Sea Base #2c2c57\',attribute_list_id: \'1\',odoo_name: \'\'',
                'updated_at' => '2023-11-06 23:43:06',
                'user_id' => '2',
            ),
            135 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-11-06 23:44:09',
                'id' => 136,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'rooftop-garden\',comment: \'Rooftop Garden #9ead92\',attribute_list_id: \'1\',odoo_name: \'Amande\'',
                'old_values' => 'name: \'rooftop-garden\',comment: \'Rooftop Garden #9ead92\',attribute_list_id: \'1\',odoo_name: \'\'',
                'updated_at' => '2023-11-06 23:44:09',
                'user_id' => '2',
            ),
            136 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-11-06 23:45:20',
                'id' => 137,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'vola\',comment: \'VOLA\',attribute_list_id: \'3\',odoo_name: \'vola\'',
                'old_values' => 'name: \'vola\',comment: \'VOLA\',attribute_list_id: \'3\',odoo_name: \'\'',
                'updated_at' => '2023-11-06 23:45:20',
                'user_id' => '2',
            ),
        ));
        
        
    }
}