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
                'action' => 'UPDATE',
                'created_at' => '2023-10-02 18:48:26',
                'id' => 1,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-ft-var\',comment: \'Size in Feets - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'2\'',
                'old_values' => 'name: \'size-ft-var\',comment: \'Size in Feets - Variant index attribute
You must use the symbol “prime” which is a single quotation mark “ ‘ “ after feet part ... even when there is no inches part.
Sample : 5\'6 , 5\'4, 5\'2, ... 5\', 4\'9\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'2\'',
                'updated_at' => '2023-10-02 18:48:26',
                'user_id' => '2',
            ),
            1 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-10-02 18:48:40',
                'id' => 2,
                'model' => 'Unit',
            'new_values' => 'name: \'ft\',comment: \'Foot (pied) : impérial length unit (=30,48cm)
You must use the symbol “prime” which is a single quotation mark “ ‘ “ after feet part ... even when there is no inches part.
Sample : 5\'6 , 5\'4, 5\'2, ... 5\', 4\'9\'',
            'old_values' => 'name: \'ft\',comment: \'Foot (pied) : impérial length unit (=30,48cm)\'',
                'updated_at' => '2023-10-02 18:48:40',
                'user_id' => '2',
            ),
        ));
        
        
    }
}