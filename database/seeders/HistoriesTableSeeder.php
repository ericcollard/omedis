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
                'model' => 'AttributeList',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'id: \'\',name: \'nom-options\',comment: \'options for quantity measurement\'',
                'created_at' => '2023-10-04 12:25:31',
                'updated_at' => '2023-10-04 12:25:31',
            ),
            2 => 
            array (
                'id' => 3,
                'model' => 'AttributeList',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'id: \'8\',name: \'nom-options\',comment: \'options for quantity measurement\'',
                'new_values' => 'id: \'8\',name: \'nom-options\',comment: \'options for quantity measurement\'',
                'created_at' => '2023-10-04 12:25:31',
                'updated_at' => '2023-10-04 12:25:31',
            ),
            3 => 
            array (
                'id' => 4,
                'model' => 'AttributeListValue',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'unit\',comment: \'Product is managed by unit\',attribute_list_id: \'8\'',
                'created_at' => '2023-10-04 12:26:00',
                'updated_at' => '2023-10-04 12:26:00',
            ),
            4 => 
            array (
                'id' => 5,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'unit\',comment: \'Product is managed by unit\',attribute_list_id: \'8\'',
                'new_values' => 'name: \'unit\',comment: \'Product is managed by unit\',attribute_list_id: \'8\'',
                'created_at' => '2023-10-04 12:26:00',
                'updated_at' => '2023-10-04 12:26:00',
            ),
            5 => 
            array (
                'id' => 6,
                'model' => 'AttributeListValue',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'kg\',comment: \'product is managed by his weight\',attribute_list_id: \'8\'',
                'created_at' => '2023-10-04 12:26:20',
                'updated_at' => '2023-10-04 12:26:20',
            ),
            6 => 
            array (
                'id' => 7,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'kg\',comment: \'product is managed by his weight\',attribute_list_id: \'8\'',
                'new_values' => 'name: \'kg\',comment: \'product is managed by his weight\',attribute_list_id: \'8\'',
                'created_at' => '2023-10-04 12:26:20',
                'updated_at' => '2023-10-04 12:26:20',
            ),
            7 => 
            array (
                'id' => 8,
                'model' => 'AttributeListValue',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'package\',comment: \'product is only managed by package with fix quantity\',attribute_list_id: \'8\'',
                'created_at' => '2023-10-04 12:26:56',
                'updated_at' => '2023-10-04 12:26:56',
            ),
            8 => 
            array (
                'id' => 9,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'package\',comment: \'product is only managed by package with fix quantity\',attribute_list_id: \'8\'',
                'new_values' => 'name: \'package\',comment: \'product is only managed by package with fix quantity\',attribute_list_id: \'8\'',
                'created_at' => '2023-10-04 12:26:56',
                'updated_at' => '2023-10-04 12:26:56',
            ),
            9 => 
            array (
                'id' => 10,
                'model' => 'AttributeList',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'id: \'8\',name: \'nom-options\',comment: \'options for quantity measurement\'',
                'new_values' => 'id: \'8\',name: \'uom-options\',comment: \'options for quantity measurement\'',
                'created_at' => '2023-10-04 12:27:15',
                'updated_at' => '2023-10-04 12:27:15',
            ),
            10 => 
            array (
                'id' => 11,
                'model' => 'Attribute',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
            'new_values' => 'name: \'uom\',comment: \'Tell how product quantity is managed in stock (unit if not defined)\',required: \'\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-04 12:28:07',
                'updated_at' => '2023-10-04 12:28:07',
            ),
            11 => 
            array (
                'id' => 12,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',comment: \'Tell how product quantity is managed in stock (unit if not defined)\',required: \'\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',comment: \'Tell how product quantity is managed in stock (unit if not defined)\',required: \'\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-04 12:28:07',
                'updated_at' => '2023-10-04 12:28:07',
            ),
            12 => 
            array (
                'id' => 13,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'uom\',comment: \'Tell how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
            'new_values' => 'name: \'uom\',comment: \'Tells how product quantity is managed in stock (unit if not defined)\',required: \'0\',attribute_list_id: \'8\',unit_id: \'\',data_type_id: \'1\'',
                'created_at' => '2023-10-04 12:28:23',
                'updated_at' => '2023-10-04 12:28:23',
            ),
            13 => 
            array (
                'id' => 14,
                'model' => 'Attribute',
                'action' => 'CREATE',
                'user_id' => '2',
                'old_values' => 'none',
                'new_values' => 'name: \'logistic-qty\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-04 12:30:46',
                'updated_at' => '2023-10-04 12:30:46',
            ),
            14 => 
            array (
                'id' => 15,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'logistic-qty\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'new_values' => 'name: \'logistic-qty\',comment: \'tells how is handled product from logistics
if uom is "package", quantity in each package
id uom us "unit", quantity by carton\',required: \'\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'created_at' => '2023-10-04 12:30:46',
                'updated_at' => '2023-10-04 12:30:46',
            ),
            15 => 
            array (
                'id' => 16,
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'pictures\',comment: \'Product picture links, semicolon separated\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'new_values' => 'name: \'pictures\',comment: \'Product picture links, semicolon separated, most important first
We suggest that picture should be square aspect, at least 800x800px, white background, jpeg format
We suggest that picture should be stored on a cnd, so that processing programs could upload them automatically, provided the link is supplied\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'created_at' => '2023-10-04 13:12:09',
                'updated_at' => '2023-10-04 13:12:09',
            ),
        ));
        
        
    }
}