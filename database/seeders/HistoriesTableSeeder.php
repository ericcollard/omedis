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
                'id' => 1,
                'model' => 'all',
                'action' => 'VERSION',
                'user_id' => '1',
                'old_values' => '0.5',
                'new_values' => '0.6',
                'created_at' => '2023-10-02 18:48:26',
                'updated_at' => '2023-10-02 18:48:26',
            ),
            1 => 
            array (
                'id' => 2,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',comment: \'Product brand
This name has to be the one of the brand, and not the one of company or distributor.\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',comment: \'Product brand
This name has to be the one of the brand, but not the one of company or distributor
Exemple : "Duotone" but not "Boards and More".\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-11 07:05:37',
                'updated_at' => '2023-10-11 07:05:37',
            ),
            2 => 
            array (
                'id' => 3,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'windsurf-sail-wave\',comment: \'windsurf sail wave\',attribute_list_id: \'2\',odoo_name: \'\'',
                'new_values' => 'name: \'windsurf-sail-wave\',comment: \'windsurf sail wave\',attribute_list_id: \'2\',odoo_name: \'Tous / Windsurf / Voile / Vague\'',
                'created_at' => '2023-10-12 20:50:09',
                'updated_at' => '2023-10-12 20:50:09',
            ),
            3 => 
            array (
                'id' => 4,
                'model' => 'Attribute',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-12 21:10:56',
                'updated_at' => '2023-10-12 21:10:56',
            ),
            4 => 
            array (
                'id' => 5,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-12 21:10:56',
                'updated_at' => '2023-10-12 21:10:56',
            ),
            5 => 
            array (
                'id' => 6,
                'model' => 'AttributeList',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'id: \'\',name: \'supplier\',comment: \'\'',
                'created_at' => '2023-10-12 21:11:15',
                'updated_at' => '2023-10-12 21:11:15',
            ),
            6 => 
            array (
                'id' => 7,
                'model' => 'AttributeList',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'id: \'9\',name: \'supplier\',comment: \'\'',
                'new_values' => 'id: \'9\',name: \'supplier\',comment: \'\'',
                'created_at' => '2023-10-12 21:11:15',
                'updated_at' => '2023-10-12 21:11:15',
            ),
            7 => 
            array (
                'id' => 8,
                'model' => 'AttributeList',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'id: \'9\',name: \'supplier\',comment: \'\'',
                'new_values' => 'id: \'9\',name: \'supplier\',comment: \'Supplier company\'',
                'created_at' => '2023-10-12 21:11:43',
                'updated_at' => '2023-10-12 21:11:43',
            ),
            8 => 
            array (
                'id' => 9,
                'model' => 'AttributeList',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'id: \'9\',name: \'supplier\',comment: \'Supplier company\'',
                'new_values' => 'id: \'9\',name: \'supplier\',comment: \'Supplier company or distributor\'',
                'created_at' => '2023-10-12 21:11:53',
                'updated_at' => '2023-10-12 21:11:53',
            ),
            9 => 
            array (
                'id' => 10,
                'model' => 'AttributeListValue',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'boards-and-more\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Boards & More gmbh\'',
                'created_at' => '2023-10-12 21:12:56',
                'updated_at' => '2023-10-12 21:12:56',
            ),
            10 => 
            array (
                'id' => 11,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'boards-and-more\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Boards & More gmbh\'',
                'new_values' => 'name: \'boards-and-more\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Boards & More gmbh\'',
                'created_at' => '2023-10-12 21:12:56',
                'updated_at' => '2023-10-12 21:12:56',
            ),
            11 => 
            array (
                'id' => 12,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'supplier\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-12 21:13:18',
                'updated_at' => '2023-10-12 21:13:18',
            ),
            12 => 
            array (
                'id' => 13,
                'model' => 'AttributeListValue',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'f-one\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'F One\'',
                'created_at' => '2023-10-12 21:14:43',
                'updated_at' => '2023-10-12 21:14:43',
            ),
            13 => 
            array (
                'id' => 14,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'f-one\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'F One\'',
                'new_values' => 'name: \'f-one\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'F One\'',
                'created_at' => '2023-10-12 21:14:43',
                'updated_at' => '2023-10-12 21:14:43',
            ),
            14 => 
            array (
                'id' => 15,
                'model' => 'AttributeListValue',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'vola\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Vola\'',
                'created_at' => '2023-10-12 21:14:57',
                'updated_at' => '2023-10-12 21:14:57',
            ),
            15 => 
            array (
                'id' => 16,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'vola\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Vola\'',
                'new_values' => 'name: \'vola\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Vola\'',
                'created_at' => '2023-10-12 21:14:57',
                'updated_at' => '2023-10-12 21:14:57',
            ),
            16 => 
            array (
                'id' => 17,
                'model' => 'AttributeListValue',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'picture\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'created_at' => '2023-10-12 21:18:56',
                'updated_at' => '2023-10-12 21:18:56',
            ),
            17 => 
            array (
                'id' => 18,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'picture\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'new_values' => 'name: \'picture\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'created_at' => '2023-10-12 21:18:56',
                'updated_at' => '2023-10-12 21:18:56',
            ),
            18 => 
            array (
                'id' => 19,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'picture\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'new_values' => 'name: \'picture-organic-clothing\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Picture Organic Clothing\'',
                'created_at' => '2023-10-12 21:19:45',
                'updated_at' => '2023-10-12 21:19:45',
            ),
            19 => 
            array (
                'id' => 20,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'Product brand
This name has to be the one of the brand, but not the one of company or distributor
Exemple : "Duotone" but not "Boards and More".\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'test\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 07:43:30',
                'updated_at' => '2023-10-14 07:43:30',
            ),
            20 => 
            array (
                'id' => 21,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'test\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 07:43:59',
                'updated_at' => '2023-10-14 07:43:59',
            ),
            21 => 
            array (
                'id' => 22,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'var-surface-m2\',odoo_name: \'\',comment: \'Surface in Square Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'7\',data_type_id: \'5\'',
            'new_values' => 'name: \'var-surface-m2\',odoo_name: \'Surface (m2)\',comment: \'<p>Surface in Square Meters - Variant index attribute</p>\',required: \'0\',attribute_list_id: \'\',unit_id: \'7\',data_type_id: \'5\'',
                'created_at' => '2023-10-14 07:45:51',
                'updated_at' => '2023-10-14 07:45:51',
            ),
            22 => 
            array (
                'id' => 23,
                'model' => 'Attribute',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'test\',odoo_name: \'\',comment: \'\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'created_at' => '2023-10-14 09:49:14',
                'updated_at' => '2023-10-14 09:49:14',
            ),
            23 => 
            array (
                'id' => 24,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'test\',odoo_name: \'\',comment: \'\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'new_values' => 'name: \'test\',odoo_name: \'\',comment: \'\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'created_at' => '2023-10-14 09:49:14',
                'updated_at' => '2023-10-14 09:49:14',
            ),
            24 => 
            array (
                'id' => 25,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-14 09:58:31',
                'updated_at' => '2023-10-14 09:58:31',
            ),
            25 => 
            array (
                'id' => 26,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 09:58:31',
                'updated_at' => '2023-10-14 09:58:31',
            ),
            26 => 
            array (
                'id' => 27,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-14 10:00:28',
                'updated_at' => '2023-10-14 10:00:28',
            ),
            27 => 
            array (
                'id' => 28,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 10:00:28',
                'updated_at' => '2023-10-14 10:00:28',
            ),
            28 => 
            array (
                'id' => 29,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-14 10:00:31',
                'updated_at' => '2023-10-14 10:00:31',
            ),
            29 => 
            array (
                'id' => 30,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 10:00:31',
                'updated_at' => '2023-10-14 10:00:31',
            ),
            30 => 
            array (
                'id' => 31,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-14 10:00:34',
                'updated_at' => '2023-10-14 10:00:34',
            ),
            31 => 
            array (
                'id' => 32,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 10:00:34',
                'updated_at' => '2023-10-14 10:00:34',
            ),
            32 => 
            array (
                'id' => 33,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-14 10:01:55',
                'updated_at' => '2023-10-14 10:01:55',
            ),
            33 => 
            array (
                'id' => 34,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 10:01:55',
                'updated_at' => '2023-10-14 10:01:55',
            ),
            34 => 
            array (
                'id' => 35,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-14 10:02:03',
                'updated_at' => '2023-10-14 10:02:03',
            ),
            35 => 
            array (
                'id' => 36,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 10:02:03',
                'updated_at' => '2023-10-14 10:02:03',
            ),
            36 => 
            array (
                'id' => 37,
                'model' => 'Attribute',
                'action' => 'DELETE',
                'user_id' => '2',
                'old_values' => 'name: \'test\',odoo_name: \'\',comment: \'\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'new_values' => 'none',
                'created_at' => '2023-10-14 10:02:12',
                'updated_at' => '2023-10-14 10:02:12',
            ),
            37 => 
            array (
                'id' => 38,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-14 10:02:18',
                'updated_at' => '2023-10-14 10:02:18',
            ),
            38 => 
            array (
                'id' => 39,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 10:02:18',
                'updated_at' => '2023-10-14 10:02:18',
            ),
            39 => 
            array (
                'id' => 40,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 10:02:23',
                'updated_at' => '2023-10-14 10:02:23',
            ),
            40 => 
            array (
                'id' => 41,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-14 10:02:23',
                'updated_at' => '2023-10-14 10:02:23',
            ),
            41 => 
            array (
                'id' => 42,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:25:11',
                'updated_at' => '2023-10-16 12:25:11',
            ),
            42 => 
            array (
                'id' => 43,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:25:48',
                'updated_at' => '2023-10-16 12:25:48',
            ),
            43 => 
            array (
                'id' => 44,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:25:48',
                'updated_at' => '2023-10-16 12:25:48',
            ),
            44 => 
            array (
                'id' => 45,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:20',
                'updated_at' => '2023-10-16 12:26:20',
            ),
            45 => 
            array (
                'id' => 46,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:24',
                'updated_at' => '2023-10-16 12:26:24',
            ),
            46 => 
            array (
                'id' => 47,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:31',
                'updated_at' => '2023-10-16 12:26:31',
            ),
            47 => 
            array (
                'id' => 48,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:31',
                'updated_at' => '2023-10-16 12:26:31',
            ),
            48 => 
            array (
                'id' => 49,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:32',
                'updated_at' => '2023-10-16 12:26:32',
            ),
            49 => 
            array (
                'id' => 50,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:32',
                'updated_at' => '2023-10-16 12:26:32',
            ),
            50 => 
            array (
                'id' => 51,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:34',
                'updated_at' => '2023-10-16 12:26:34',
            ),
            51 => 
            array (
                'id' => 52,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:34',
                'updated_at' => '2023-10-16 12:26:34',
            ),
            52 => 
            array (
                'id' => 53,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:35',
                'updated_at' => '2023-10-16 12:26:35',
            ),
            53 => 
            array (
                'id' => 54,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:35',
                'updated_at' => '2023-10-16 12:26:35',
            ),
            54 => 
            array (
                'id' => 55,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-16 12:26:37',
                'updated_at' => '2023-10-16 12:26:37',
            ),
            55 => 
            array (
                'id' => 56,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:37',
                'updated_at' => '2023-10-16 12:26:37',
            ),
            56 => 
            array (
                'id' => 57,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'sku\',odoo_name: \'\',comment: \'SKU code : unique identifier for one product variant for brand internal use.
This code has to be unique for one product, and has to change each time the product is changing technically (even if only graphics).
It will be used by programs for price updates\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'sku\',odoo_name: \'\',comment: \'SKU code : unique identifier for one product variant for brand internal use.
This code has to be unique for one product, and has to change each time the product is changing technically (even if only graphics).
It will be used by programs for price updates\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-16 12:26:38',
                'updated_at' => '2023-10-16 12:26:38',
            ),
            57 => 
            array (
                'id' => 58,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:38',
                'updated_at' => '2023-10-16 12:26:38',
            ),
            58 => 
            array (
                'id' => 59,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'name\',odoo_name: \'\',comment: \'Name : official name for trade. Should be as short as possible.
Doesn\'t contain other information that can be found is specialized attribute, like variant data, brand name of year.
For a tee shirt, available in 3 colors and 4 sizes, this will be for exemple : "BRADFORD", and variants data will complete with size and color
For a tee shirt, available in only one colors and 4 sizes, this will be for exemple : "BRADFORD RED", and variants data will complete with size
In both case, the name in not containing the category ("TEE") or brand ("PICTURE").\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'name\',odoo_name: \'\',comment: \'Name : official name for trade. Should be as short as possible.
Doesn\'t contain other information that can be found is specialized attribute, like variant data, brand name of year.
For a tee shirt, available in 3 colors and 4 sizes, this will be for exemple : "BRADFORD", and variants data will complete with size and color
For a tee shirt, available in only one colors and 4 sizes, this will be for exemple : "BRADFORD RED", and variants data will complete with size
In both case, the name in not containing the category ("TEE") or brand ("PICTURE").\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-16 12:26:39',
                'updated_at' => '2023-10-16 12:26:39',
            ),
            59 => 
            array (
                'id' => 60,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:39',
                'updated_at' => '2023-10-16 12:26:39',
            ),
            60 => 
            array (
                'id' => 61,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'category\',odoo_name: \'\',comment: \'Commercial category for product classification\',required: \'1\',attribute_list_id: \'2\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'category\',odoo_name: \'\',comment: \'Commercial category for product classification\',required: \'1\',attribute_list_id: \'2\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:42',
                'updated_at' => '2023-10-16 12:26:42',
            ),
            61 => 
            array (
                'id' => 62,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:42',
                'updated_at' => '2023-10-16 12:26:42',
            ),
            62 => 
            array (
                'id' => 63,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'description-long-fr\',odoo_name: \'\',comment: \'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'new_values' => 'name: \'description-long-fr\',odoo_name: \'\',comment: \'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'created_at' => '2023-10-16 12:26:43',
                'updated_at' => '2023-10-16 12:26:43',
            ),
            63 => 
            array (
                'id' => 64,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:43',
                'updated_at' => '2023-10-16 12:26:43',
            ),
            64 => 
            array (
                'id' => 65,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'description-short-fr\',odoo_name: \'\',comment: \'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'new_values' => 'name: \'description-short-fr\',odoo_name: \'\',comment: \'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'created_at' => '2023-10-16 12:26:46',
                'updated_at' => '2023-10-16 12:26:46',
            ),
            65 => 
            array (
                'id' => 66,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:46',
                'updated_at' => '2023-10-16 12:26:46',
            ),
            66 => 
            array (
                'id' => 67,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'brand\',odoo_name: \'\',comment: \'<p>Product brand This name has to be the one of the brand, but not the one of company or distributor Exemple : "Duotone" but not "Boards and More".</p>\',required: \'1\',attribute_list_id: \'3\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:49',
                'updated_at' => '2023-10-16 12:26:49',
            ),
            67 => 
            array (
                'id' => 68,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:49',
                'updated_at' => '2023-10-16 12:26:49',
            ),
            68 => 
            array (
                'id' => 69,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'supplier\',odoo_name: \'\',comment: \'<p>name of the supplier company</p>\',required: \'1\',attribute_list_id: \'9\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:50',
                'updated_at' => '2023-10-16 12:26:50',
            ),
            69 => 
            array (
                'id' => 70,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:50',
                'updated_at' => '2023-10-16 12:26:50',
            ),
            70 => 
            array (
                'id' => 71,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'season\',odoo_name: \'\',comment: \'Year validity for the product, for the case where this product is specific to one season. This has to be a year like 2023.
We suggest that this should be the last year of validity (ie. 2024 for a 23-24 winter season product)\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:26:52',
                'updated_at' => '2023-10-16 12:26:52',
            ),
            71 => 
            array (
                'id' => 72,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:52',
                'updated_at' => '2023-10-16 12:26:52',
            ),
            72 => 
            array (
                'id' => 73,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'ean\',odoo_name: \'\',comment: \'EAN code : unique identifier for one product variant delivered by GS1 autority or similar\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-16 12:26:53',
                'updated_at' => '2023-10-16 12:26:53',
            ),
            73 => 
            array (
                'id' => 74,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:53',
                'updated_at' => '2023-10-16 12:26:53',
            ),
            74 => 
            array (
                'id' => 75,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'sku\',odoo_name: \'\',comment: \'SKU code : unique identifier for one product variant for brand internal use.
This code has to be unique for one product, and has to change each time the product is changing technically (even if only graphics).
It will be used by programs for price updates\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'sku\',odoo_name: \'\',comment: \'SKU code : unique identifier for one product variant for brand internal use.
This code has to be unique for one product, and has to change each time the product is changing technically (even if only graphics).
It will be used by programs for price updates\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-16 12:26:54',
                'updated_at' => '2023-10-16 12:26:54',
            ),
            75 => 
            array (
                'id' => 76,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:54',
                'updated_at' => '2023-10-16 12:26:54',
            ),
            76 => 
            array (
                'id' => 77,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'name\',odoo_name: \'\',comment: \'Name : official name for trade. Should be as short as possible.
Doesn\'t contain other information that can be found is specialized attribute, like variant data, brand name of year.
For a tee shirt, available in 3 colors and 4 sizes, this will be for exemple : "BRADFORD", and variants data will complete with size and color
For a tee shirt, available in only one colors and 4 sizes, this will be for exemple : "BRADFORD RED", and variants data will complete with size
In both case, the name in not containing the category ("TEE") or brand ("PICTURE").\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'name\',odoo_name: \'\',comment: \'Name : official name for trade. Should be as short as possible.
Doesn\'t contain other information that can be found is specialized attribute, like variant data, brand name of year.
For a tee shirt, available in 3 colors and 4 sizes, this will be for exemple : "BRADFORD", and variants data will complete with size and color
For a tee shirt, available in only one colors and 4 sizes, this will be for exemple : "BRADFORD RED", and variants data will complete with size
In both case, the name in not containing the category ("TEE") or brand ("PICTURE").\',required: \'1\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-16 12:26:56',
                'updated_at' => '2023-10-16 12:26:56',
            ),
            77 => 
            array (
                'id' => 78,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:56',
                'updated_at' => '2023-10-16 12:26:56',
            ),
            78 => 
            array (
                'id' => 79,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'category\',odoo_name: \'\',comment: \'Commercial category for product classification\',required: \'1\',attribute_list_id: \'2\',unit_id: \'\',data_type_id: \'1\'',
                'new_values' => 'name: \'category\',odoo_name: \'\',comment: \'Commercial category for product classification\',required: \'1\',attribute_list_id: \'2\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:57',
                'updated_at' => '2023-10-16 12:26:57',
            ),
            79 => 
            array (
                'id' => 80,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:57',
                'updated_at' => '2023-10-16 12:26:57',
            ),
            80 => 
            array (
                'id' => 81,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'description-long-fr\',odoo_name: \'\',comment: \'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'new_values' => 'name: \'description-long-fr\',odoo_name: \'\',comment: \'Description longue en Français : description marketing complète du produit, à destination des sites web. Peut contenir un formatage HTML basique.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'created_at' => '2023-10-16 12:26:58',
                'updated_at' => '2023-10-16 12:26:58',
            ),
            81 => 
            array (
                'id' => 82,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:26:58',
                'updated_at' => '2023-10-16 12:26:58',
            ),
            82 => 
            array (
                'id' => 83,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'description-short-fr\',odoo_name: \'\',comment: \'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'new_values' => 'name: \'description-short-fr\',odoo_name: \'\',comment: \'Description courte en Français : description marketing résumée du produit, idéalement une 15aine de mots maximum\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'7\'',
                'created_at' => '2023-10-16 12:27:01',
                'updated_at' => '2023-10-16 12:27:01',
            ),
            83 => 
            array (
                'id' => 84,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:27:01',
                'updated_at' => '2023-10-16 12:27:01',
            ),
            84 => 
            array (
                'id' => 85,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:27:02',
                'updated_at' => '2023-10-16 12:27:02',
            ),
            85 => 
            array (
                'id' => 86,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:27:02',
                'updated_at' => '2023-10-16 12:27:02',
            ),
            86 => 
            array (
                'id' => 87,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:27:06',
                'updated_at' => '2023-10-16 12:27:06',
            ),
            87 => 
            array (
                'id' => 88,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:27:06',
                'updated_at' => '2023-10-16 12:27:06',
            ),
            88 => 
            array (
                'id' => 89,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'pictures\',odoo_name: \'\',comment: \'Product picture links, semicolon separated, no space or special character except _ and -, most important first.
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format.
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'pictures\',odoo_name: \'\',comment: \'Product picture links, semicolon separated, no space or special character except _ and -, most important first.
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format.
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-16 12:27:12',
                'updated_at' => '2023-10-16 12:27:12',
            ),
            89 => 
            array (
                'id' => 90,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:27:12',
                'updated_at' => '2023-10-16 12:27:12',
            ),
            90 => 
            array (
                'id' => 91,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'wholesale-price\',odoo_name: \'\',comment: \'Wholesale Price : Standard purchase price excuding VAT.
This does not include any discount (like volume discount, year discount, client specific discount).\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'new_values' => 'name: \'wholesale-price\',odoo_name: \'\',comment: \'Wholesale Price : Standard purchase price excuding VAT.
This does not include any discount (like volume discount, year discount, client specific discount).\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'created_at' => '2023-10-16 12:27:17',
                'updated_at' => '2023-10-16 12:27:17',
            ),
            91 => 
            array (
                'id' => 92,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:27:17',
                'updated_at' => '2023-10-16 12:27:17',
            ),
            92 => 
            array (
                'id' => 93,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'pictures\',odoo_name: \'\',comment: \'Product picture links, semicolon separated, no space or special character except _ and -, most important first.
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format.
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'pictures\',odoo_name: \'\',comment: \'Product picture links, semicolon separated, no space or special character except _ and -, most important first.
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format.
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically.\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-16 12:27:21',
                'updated_at' => '2023-10-16 12:27:21',
            ),
            93 => 
            array (
                'id' => 94,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:27:21',
                'updated_at' => '2023-10-16 12:27:21',
            ),
            94 => 
            array (
                'id' => 95,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'wholesale-price\',odoo_name: \'\',comment: \'Wholesale Price : Standard purchase price excuding VAT.
This does not include any discount (like volume discount, year discount, client specific discount).\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'new_values' => 'name: \'wholesale-price\',odoo_name: \'\',comment: \'Wholesale Price : Standard purchase price excuding VAT.
This does not include any discount (like volume discount, year discount, client specific discount).\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'created_at' => '2023-10-16 12:27:25',
                'updated_at' => '2023-10-16 12:27:25',
            ),
            95 => 
            array (
                'id' => 96,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:27:25',
                'updated_at' => '2023-10-16 12:27:25',
            ),
            96 => 
            array (
                'id' => 97,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:27:28',
                'updated_at' => '2023-10-16 12:27:28',
            ),
            97 => 
            array (
                'id' => 98,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:27:28',
                'updated_at' => '2023-10-16 12:27:28',
            ),
            98 => 
            array (
                'id' => 99,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:27:33',
                'updated_at' => '2023-10-16 12:27:33',
            ),
            99 => 
            array (
                'id' => 100,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:27:33',
                'updated_at' => '2023-10-16 12:27:33',
            ),
            100 => 
            array (
                'id' => 101,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'retail-price\',odoo_name: \'\',comment: \'Retail Price : Recommanded retail price including VAT\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'new_values' => 'name: \'retail-price\',odoo_name: \'\',comment: \'Retail Price : Recommanded retail price including VAT\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'created_at' => '2023-10-16 12:27:38',
                'updated_at' => '2023-10-16 12:27:38',
            ),
            101 => 
            array (
                'id' => 102,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',odoo_name: \'\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-16 12:27:38',
                'updated_at' => '2023-10-16 12:27:38',
            ),
            102 => 
            array (
                'id' => 103,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'retail-price\',odoo_name: \'\',comment: \'Retail Price : Recommanded retail price including VAT\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'new_values' => 'name: \'retail-price\',odoo_name: \'\',comment: \'Retail Price : Recommanded retail price including VAT\',required: \'1\',attribute_list_id: \'\',unit_id: \'16\',data_type_id: \'6\'',
                'created_at' => '2023-10-16 12:27:44',
                'updated_at' => '2023-10-16 12:27:44',
            ),
            103 => 
            array (
                'id' => 104,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',odoo_name: \'\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-16 12:27:44',
                'updated_at' => '2023-10-16 12:27:44',
            ),
        ));
        
        
    }
}