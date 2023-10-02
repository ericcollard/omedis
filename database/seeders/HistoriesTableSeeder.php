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
                'created_at' => '2023-09-28 21:03:04',
                'id' => 1,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-m-var\',comment: \'Size in Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-m-var\',comment: \'Size in Meters - Variant attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:03:04',
                'user_id' => '2',
            ),
            1 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:16:38',
                'id' => 2,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-m-var-copy\',comment: \'Size in Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:16:38',
                'user_id' => '2',
            ),
            2 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:17:40',
                'id' => 3,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-cm-var\',comment: \'Size in Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-m-var-copy\',comment: \'Size in Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:17:40',
                'user_id' => '2',
            ),
            3 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:17:49',
                'id' => 4,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-cm-var-copy\',comment: \'Size in Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:17:49',
                'user_id' => '2',
            ),
            4 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:18:19',
                'id' => 5,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-mm-var\',comment: \'Size in Milimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-cm-var-copy\',comment: \'Size in Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:18:19',
                'user_id' => '2',
            ),
            5 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:18:29',
                'id' => 6,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-cm-var\',comment: \'Size in Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'3\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-cm-var\',comment: \'Size in Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:18:29',
                'user_id' => '2',
            ),
            6 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:18:39',
                'id' => 7,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-mm-var\',comment: \'Size in Milimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'4\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-mm-var\',comment: \'Size in Milimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:18:39',
                'user_id' => '2',
            ),
            7 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:18:58',
                'id' => 8,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-m-var-copy\',comment: \'Size in Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:18:58',
                'user_id' => '2',
            ),
            8 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:19:33',
                'id' => 9,
                'model' => 'Attribute',
                'new_values' => 'name: \'surface-m2-var\',comment: \'Surface in Square Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'7\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-m-var-copy\',comment: \'Size in Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:19:33',
                'user_id' => '2',
            ),
            9 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:19:38',
                'id' => 10,
                'model' => 'Attribute',
                'new_values' => 'name: \'surface-m2-var-copy\',comment: \'Surface in Square Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'7\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:19:38',
                'user_id' => '2',
            ),
            10 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:19:59',
                'id' => 11,
                'model' => 'Attribute',
                'new_values' => 'name: \'surface-cm2-var\',comment: \'Surface in Square Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'20\',data_type_id: \'5\'',
                'old_values' => 'name: \'surface-m2-var-copy\',comment: \'Surface in Square Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'7\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:19:59',
                'user_id' => '2',
            ),
            11 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:21:44',
                'id' => 12,
                'model' => 'Attribute',
                'new_values' => 'name: \'surface-cm2-var-copy\',comment: \'Surface in Square Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'20\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:21:44',
                'user_id' => '2',
            ),
            12 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:22:14',
                'id' => 13,
                'model' => 'Attribute',
                'new_values' => 'name: \'volume-l-var\',comment: \'Volume in Liters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'9\',data_type_id: \'5\'',
                'old_values' => 'name: \'surface-cm2-var-copy\',comment: \'Surface in Square Centimeter - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'20\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:22:14',
                'user_id' => '2',
            ),
            13 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:22:35',
                'id' => 14,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-m-var-copy\',comment: \'Size in Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:22:35',
                'user_id' => '2',
            ),
            14 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:22:57',
                'id' => 15,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-ft-var\',comment: \'Size in Feets - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-m-var-copy\',comment: \'Size in Meters - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'2\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:22:57',
                'user_id' => '2',
            ),
            15 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:23:03',
                'id' => 16,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-ft-var-copy\',comment: \'Size in Feets - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:23:03',
                'user_id' => '2',
            ),
            16 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:23:33',
                'id' => 17,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-inch-var\',comment: \'Size in Inches - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'11\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-ft-var-copy\',comment: \'Size in Feets - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'12\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:23:33',
                'user_id' => '2',
            ),
            17 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:24:04',
                'id' => 18,
                'model' => 'Attribute',
                'new_values' => 'name: \'size-inch-var-copy\',comment: \'Size in Inches - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'11\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:24:04',
                'user_id' => '2',
            ),
            18 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:25:00',
                'id' => 19,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-fr-var\',comment: \'Boot size in French notation (35-36-..43,44) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'old_values' => 'name: \'size-inch-var-copy\',comment: \'Size in Inches - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'11\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:25:00',
                'user_id' => '2',
            ),
            19 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:25:27',
                'id' => 20,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-fr-var\',comment: \'Boot size in French notation (35-36-..43,44) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
            'old_values' => 'name: \'boot-size-fr-var\',comment: \'Boot size in French notation (35-36-..43,44) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:25:27',
                'user_id' => '2',
            ),
            20 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:25:56',
                'id' => 21,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-fr-var\',comment: \'Boot size in French notation (35-36-..43-44) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
            'old_values' => 'name: \'boot-size-fr-var\',comment: \'Boot size in French notation (35-36-..43,44) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:25:56',
                'user_id' => '2',
            ),
            21 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:26:02',
                'id' => 22,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-fr-var-copy\',comment: \'Boot size in French notation (35-36-..43-44) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:26:02',
                'user_id' => '2',
            ),
            22 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:27:22',
                'id' => 23,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-uk-var\',comment: \'Boot size in Uk notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'boot-size-fr-var-copy\',comment: \'Boot size in French notation (35-36-..43-44) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:27:22',
                'user_id' => '2',
            ),
            23 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:27:29',
                'id' => 24,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-uk-var-copy\',comment: \'Boot size in Uk notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:27:29',
                'user_id' => '2',
            ),
            24 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:27:43',
                'id' => 25,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-us-var\',comment: \'Boot size in Us notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'boot-size-uk-var-copy\',comment: \'Boot size in Uk notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:27:43',
                'user_id' => '2',
            ),
            25 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:28:38',
                'id' => 26,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-us-var-copy\',comment: \'Boot size in Us notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:28:38',
                'user_id' => '2',
            ),
            26 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:30:26',
                'id' => 27,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-mondo-var\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'boot-size-us-var-copy\',comment: \'Boot size in Us notation (6-6.5-7 ... 10-10.5) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:30:26',
                'user_id' => '2',
            ),
        ));
        
        
    }
}