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
                'model' => 'Attribute',
                'action' => 'UPDATE',
                'user_id' => '2',
                'old_values' => 'name: \'size-ft-var\',comment: \'Size in Feets - Variant index attribute
You must use the symbol “prime” which is a single quotation mark “ ‘ “ after feet part ... even when there is no inches part.
Sample : 5\'6 , 5\'4, 5\'2, ... 5\', 4\'9\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'2\'',
                'new_values' => 'name: \'size-ft-var\',comment: \'Size in Feets - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'2\'',
                'created_at' => '2023-10-02 18:48:26',
                'updated_at' => '2023-10-02 18:48:26',
            ),
            1 => 
            array (
                'id' => 2,
                'model' => 'Unit',
                'action' => 'UPDATE',
                'user_id' => '2',
            'old_values' => 'name: \'ft\',comment: \'Foot (pied) : impérial length unit (=30,48cm)\'',
            'new_values' => 'name: \'ft\',comment: \'Foot (pied) : impérial length unit (=30,48cm)
You must use the symbol “prime” which is a single quotation mark “ ‘ “ after feet part ... even when there is no inches part.
Sample : 5\'6 , 5\'4, 5\'2, ... 5\', 4\'9\'',
                'created_at' => '2023-10-02 18:48:40',
                'updated_at' => '2023-10-02 18:48:40',
            ),
        ));
        
        
    }
}