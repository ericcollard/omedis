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
        ));
        
        
    }
}