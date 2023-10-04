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
                'action' => 'CREATE',
                'created_at' => '2023-10-04 12:25:31',
                'id' => 2,
                'model' => 'AttributeList',
                'new_values' => 'id: \'\',name: \'nom-options\',comment: \'options for quantity measurement\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-04 12:25:31',
                'user_id' => '2',
            ),
            2 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 12:25:31',
                'id' => 3,
                'model' => 'AttributeList',
                'new_values' => 'id: \'8\',name: \'nom-options\',comment: \'options for quantity measurement\'',
                'old_values' => 'id: \'8\',name: \'nom-options\',comment: \'options for quantity measurement\'',
                'updated_at' => '2023-10-04 12:25:31',
                'user_id' => '2',
            ),
            3 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-04 12:26:00',
                'id' => 4,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'unit\',comment: \'Product is managed by unit\',attribute_list_id: \'8\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-04 12:26:00',
                'user_id' => '2',
            ),
            4 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 12:26:00',
                'id' => 5,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'unit\',comment: \'Product is managed by unit\',attribute_list_id: \'8\'',
                'old_values' => 'name: \'unit\',comment: \'Product is managed by unit\',attribute_list_id: \'8\'',
                'updated_at' => '2023-10-04 12:26:00',
                'user_id' => '2',
            ),
            5 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-04 12:26:20',
                'id' => 6,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'kg\',comment: \'product is managed by his weight\',attribute_list_id: \'8\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-04 12:26:20',
                'user_id' => '2',
            ),
            6 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 12:26:20',
                'id' => 7,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'kg\',comment: \'product is managed by his weight\',attribute_list_id: \'8\'',
                'old_values' => 'name: \'kg\',comment: \'product is managed by his weight\',attribute_list_id: \'8\'',
                'updated_at' => '2023-10-04 12:26:20',
                'user_id' => '2',
            ),
            7 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-04 12:26:56',
                'id' => 8,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'package\',comment: \'product is only managed by package with fix quantity\',attribute_list_id: \'8\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-04 12:26:56',
                'user_id' => '2',
            ),
            8 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 12:26:56',
                'id' => 9,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'package\',comment: \'product is only managed by package with fix quantity\',attribute_list_id: \'8\'',
                'old_values' => 'name: \'package\',comment: \'product is only managed by package with fix quantity\',attribute_list_id: \'8\'',
                'updated_at' => '2023-10-04 12:26:56',
                'user_id' => '2',
            ),
            9 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 12:27:15',
                'id' => 10,
                'model' => 'AttributeList',
                'new_values' => 'id: \'8\',name: \'uom-options\',comment: \'options for quantity measurement\'',
                'old_values' => 'id: \'8\',name: \'nom-options\',comment: \'options for quantity measurement\'',
                'updated_at' => '2023-10-04 12:27:15',
                'user_id' => '2',
            ),
            10 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-04 12:28:07',
                'id' => 11,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',comment: \'Tell how product quantity is managed in stock (unit if not defined)\',required: \'\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-04 12:28:07',
                'user_id' => '2',
            ),
            11 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 12:28:07',
                'id' => 12,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',comment: \'Tell how product quantity is managed in stock (unit if not defined)\',required: \'\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',comment: \'Tell how product quantity is managed in stock (unit if not defined)\',required: \'\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-04 12:28:07',
                'user_id' => '2',
            ),
            12 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 12:28:23',
                'id' => 13,
                'model' => 'Attribute',
            'new_values' => 'name: \'uom\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'uom\',comment: \'Tell how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-10-04 12:28:23',
                'user_id' => '2',
            ),
            13 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-10-04 12:30:46',
                'id' => 14,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-10-04 12:30:46',
                'user_id' => '2',
            ),
            14 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 12:30:46',
                'id' => 15,
                'model' => 'Attribute',
                'new_values' => 'name: \'logistic-qty\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'logistic-qty\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-10-04 12:30:46',
                'user_id' => '2',
            ),
            15 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-04 13:12:09',
                'id' => 16,
                'model' => 'Attribute',
                'new_values' => 'name: \'pictures\',comment: \'Product picture links, semicolon separated, most important first
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically, provided the link is supplied\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'old_values' => 'name: \'pictures\',comment: \'Product picture links, semicolon separated\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-10-04 13:12:09',
                'user_id' => '2',
            ),
        ));
        
        
    }
}