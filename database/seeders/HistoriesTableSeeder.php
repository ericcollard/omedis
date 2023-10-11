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
        ));
        
        
    }
}