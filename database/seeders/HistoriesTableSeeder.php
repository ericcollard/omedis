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
                'id' => 3090,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'boards-&-more\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Boards & More gmbh\'',
                'new_values' => 'name: \'boards-and-more\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Boards & More gmbh\'',
                'created_at' => '2024-01-31 17:31:17',
                'updated_at' => '2024-01-31 17:31:17',
            ),
            2 => 
            array (
                'id' => 3091,
                'model' => 'AttributeListValue',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'vola-racing\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Vola Racing\'',
                'new_values' => 'name: \'vola\',comment: \'\',attribute_list_id: \'9\',odoo_name: \'Vola Racing\'',
                'created_at' => '2024-01-31 17:32:01',
                'updated_at' => '2024-01-31 17:32:01',
            ),
        ));
        
        
    }
}