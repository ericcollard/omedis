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
            27 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:36:49',
                'id' => 28,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-mondo-var\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'boot-size-mondo-var\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:36:49',
                'user_id' => '2',
            ),
            28 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:37:06',
                'id' => 29,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-mondo-var\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'boot-size-mondo-var\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:37:06',
                'user_id' => '2',
            ),
            29 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:37:36',
                'id' => 30,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-mondo-var\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
This represents the length of the foot in centimeters\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
            'old_values' => 'name: \'boot-size-mondo-var\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs
ksdmlqksdj fluid lqkjhds lkqjhd flkqjshdf lkjhdf lqksjhfd lksjdfh dlkqjhsf lqkjhs\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:37:36',
                'user_id' => '2',
            ),
            30 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:39:35',
                'id' => 31,
                'model' => 'Attribute',
            'new_values' => 'name: \'boot-size-mondo-var-copy\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
This represents the length of the foot in centimeters\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:39:35',
                'user_id' => '2',
            ),
            31 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:40:21',
                'id' => 32,
                'model' => 'Attribute',
                'new_values' => 'name: \'item-nb-var\',comment: \'Item number - Variant index attribute
Various usage\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
            'old_values' => 'name: \'boot-size-mondo-var-copy\',comment: \'Boot size in Mondopoint (25-25.5-26 ... 28-28.5-29) - Variant index attribute
Only integer value or x.5 value
This represents the length of the foot in centimeters\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:40:21',
                'user_id' => '2',
            ),
            32 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:40:34',
                'id' => 33,
                'model' => 'Attribute',
                'new_values' => 'name: \'item-nb-var-copy\',comment: \'Item number - Variant index attribute
Various usage\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:40:34',
                'user_id' => '2',
            ),
            33 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:41:08',
                'id' => 34,
                'model' => 'Attribute',
                'new_values' => 'name: \'weight-kg-var\',comment: \'Weight in Kilogram - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'5\',data_type_id: \'5\'',
                'old_values' => 'name: \'item-nb-var-copy\',comment: \'Item number - Variant index attribute
Various usage\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:41:08',
                'user_id' => '2',
            ),
            34 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:41:12',
                'id' => 35,
                'model' => 'Attribute',
                'new_values' => 'name: \'weight-kg-var-copy\',comment: \'Weight in Kilogram - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'5\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:41:12',
                'user_id' => '2',
            ),
            35 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:41:26',
                'id' => 36,
                'model' => 'Attribute',
                'new_values' => 'name: \'weight-g-var\',comment: \'Weight in grams - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'6\',data_type_id: \'5\'',
                'old_values' => 'name: \'weight-kg-var-copy\',comment: \'Weight in Kilogram - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'5\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:41:26',
                'user_id' => '2',
            ),
            36 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:41:56',
                'id' => 37,
                'model' => 'Attribute',
                'new_values' => 'name: \'weight-g-var-copy\',comment: \'Weight in grams - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'6\',data_type_id: \'5\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:41:56',
                'user_id' => '2',
            ),
            37 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:42:15',
                'id' => 38,
                'model' => 'Attribute',
                'new_values' => 'name: \'color-var\',comment: \'Color - Variant index attribute\',required: \'0\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'name: \'weight-g-var-copy\',comment: \'Weight in grams - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'6\',data_type_id: \'5\'',
                'updated_at' => '2023-09-28 21:42:15',
                'user_id' => '2',
            ),
            38 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:42:35',
                'id' => 39,
                'model' => 'Attribute',
                'new_values' => 'name: \'color-var-copy\',comment: \'Color - Variant index attribute\',required: \'0\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:42:35',
                'user_id' => '2',
            ),
            39 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:43:38',
                'id' => 40,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-fr-var\',comment: \'Clothes French sizing (36-38-40-42) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'name: \'color-var-copy\',comment: \'Color - Variant index attribute\',required: \'0\',attribute_list_id: \'1\',unit_id: \'\',data_type_id: \'1\'',
                'updated_at' => '2023-09-28 21:43:38',
                'user_id' => '2',
            ),
            40 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:43:43',
                'id' => 41,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-fr-var-copy\',comment: \'Clothes French sizing (36-38-40-42) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:43:43',
                'user_id' => '2',
            ),
            41 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:44:09',
                'id' => 42,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-us-copy\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
            'old_values' => 'name: \'size-wear-fr-var-copy\',comment: \'Clothes French sizing (36-38-40-42) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:44:09',
                'user_id' => '2',
            ),
            42 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:44:19',
                'id' => 43,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-us\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
            'old_values' => 'name: \'size-wear-us-copy\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:44:19',
                'user_id' => '2',
            ),
            43 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:44:26',
                'id' => 44,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-us-copy\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:44:26',
                'user_id' => '2',
            ),
            44 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:44:45',
                'id' => 45,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-uk-var\',comment: \'Clothes UK sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
            'old_values' => 'name: \'size-wear-us-copy\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:44:45',
                'user_id' => '2',
            ),
            45 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:44:58',
                'id' => 46,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-us-var\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
            'old_values' => 'name: \'size-wear-us\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:44:58',
                'user_id' => '2',
            ),
            46 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:45:10',
                'id' => 47,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-uk-var-copy\',comment: \'Clothes UK sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:45:10',
                'user_id' => '2',
            ),
            47 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:45:52',
                'id' => 48,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-int-var\',comment: \'Clothes International sizing (XXS-XS... L-XL-XXL) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
            'old_values' => 'name: \'size-wear-uk-var-copy\',comment: \'Clothes UK sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:45:52',
                'user_id' => '2',
            ),
            48 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:47:03',
                'id' => 49,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-eu-var\',comment: \'Clothes EU sizing (36-38-40-42) - Variant index attribute\',required: \'0\',attribute_list_id: \'5\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'size-wear-fr-var\',comment: \'Clothes French sizing (36-38-40-42) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:47:03',
                'user_id' => '2',
            ),
            49 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:47:16',
                'id' => 50,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-us-var\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'7\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'size-wear-us-var\',comment: \'Clothes US sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:47:16',
                'user_id' => '2',
            ),
            50 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:47:27',
                'id' => 51,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-uk-var\',comment: \'Clothes UK sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'6\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'size-wear-uk-var\',comment: \'Clothes UK sizing (2-4-6-8) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'4\'',
                'updated_at' => '2023-09-28 21:47:27',
                'user_id' => '2',
            ),
            51 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:47:42',
                'id' => 52,
                'model' => 'Attribute',
            'new_values' => 'name: \'size-wear-int-var\',comment: \'Clothes International sizing (XXS-XS... L-XL-XXL) - Variant index attribute\',required: \'0\',attribute_list_id: \'4\',unit_id: \'\',data_type_id: \'1\'',
            'old_values' => 'name: \'size-wear-int-var\',comment: \'Clothes International sizing (XXS-XS... L-XL-XXL) - Variant index attribute\',required: \'0\',attribute_list_id: \'\',unit_id: \'1\',data_type_id: \'2\'',
                'updated_at' => '2023-09-28 21:47:42',
                'user_id' => '2',
            ),
            52 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:48:14',
                'id' => 53,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxs\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:48:14',
                'user_id' => '2',
            ),
            53 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:48:14',
                'id' => 54,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxs\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'xxs\',comment: \'\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:48:14',
                'user_id' => '2',
            ),
            54 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:48:23',
                'id' => 55,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xs\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:48:23',
                'user_id' => '2',
            ),
            55 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:48:23',
                'id' => 56,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xs\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'xs\',comment: \'\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:48:23',
                'user_id' => '2',
            ),
            56 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:48:45',
                'id' => 57,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'s\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:48:45',
                'user_id' => '2',
            ),
            57 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:48:45',
                'id' => 58,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'s\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'s\',comment: \'\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:48:45',
                'user_id' => '2',
            ),
            58 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:48:57',
                'id' => 59,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'st\',comment: \'S Tall\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:48:57',
                'user_id' => '2',
            ),
            59 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:48:57',
                'id' => 60,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'st\',comment: \'S Tall\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'st\',comment: \'S Tall\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:48:57',
                'user_id' => '2',
            ),
            60 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:49:16',
                'id' => 61,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'ms\',comment: \'Medium Small\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:49:16',
                'user_id' => '2',
            ),
            61 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:49:16',
                'id' => 62,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'ms\',comment: \'Medium Small\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'ms\',comment: \'Medium Small\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:49:16',
                'user_id' => '2',
            ),
            62 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:49:23',
                'id' => 63,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'m\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:49:23',
                'user_id' => '2',
            ),
            63 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:49:23',
                'id' => 64,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'m\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'m\',comment: \'\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:49:23',
                'user_id' => '2',
            ),
            64 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:49:33',
                'id' => 65,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'mt\',comment: \'Medium Tall\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:49:33',
                'user_id' => '2',
            ),
            65 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:49:33',
                'id' => 66,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'mt\',comment: \'Medium Tall\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'mt\',comment: \'Medium Tall\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:49:33',
                'user_id' => '2',
            ),
            66 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:49:43',
                'id' => 67,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'ls\',comment: \'Large small\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:49:43',
                'user_id' => '2',
            ),
            67 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:49:43',
                'id' => 68,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'ls\',comment: \'Large small\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'ls\',comment: \'Large small\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:49:43',
                'user_id' => '2',
            ),
            68 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:49:53',
                'id' => 69,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'l\',comment: \'Large tall\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:49:53',
                'user_id' => '2',
            ),
            69 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:49:53',
                'id' => 70,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'l\',comment: \'Large tall\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'l\',comment: \'Large tall\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:49:53',
                'user_id' => '2',
            ),
            70 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:50:07',
                'id' => 71,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xls\',comment: \'XL Small\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:50:07',
                'user_id' => '2',
            ),
            71 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:50:07',
                'id' => 72,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xls\',comment: \'XL Small\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'xls\',comment: \'XL Small\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:50:07',
                'user_id' => '2',
            ),
            72 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:50:13',
                'id' => 73,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xl\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:50:13',
                'user_id' => '2',
            ),
            73 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:50:13',
                'id' => 74,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xl\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'xl\',comment: \'\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:50:13',
                'user_id' => '2',
            ),
            74 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:50:18',
                'id' => 75,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxl\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:50:18',
                'user_id' => '2',
            ),
            75 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:50:18',
                'id' => 76,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxl\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'xxl\',comment: \'\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:50:18',
                'user_id' => '2',
            ),
            76 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:50:23',
                'id' => 77,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxxl\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:50:23',
                'user_id' => '2',
            ),
            77 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:50:23',
                'id' => 78,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxxl\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'xxxl\',comment: \'\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:50:23',
                'user_id' => '2',
            ),
            78 => 
            array (
                'action' => 'CREATE',
                'created_at' => '2023-09-28 21:50:28',
                'id' => 79,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxxxl\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'none',
                'updated_at' => '2023-09-28 21:50:28',
                'user_id' => '2',
            ),
            79 => 
            array (
                'action' => 'UPDATE',
                'created_at' => '2023-09-28 21:50:28',
                'id' => 80,
                'model' => 'AttributeListValue',
                'new_values' => 'name: \'xxxxl\',comment: \'\',attribute_list_id: \'4\'',
                'old_values' => 'name: \'xxxxl\',comment: \'\',attribute_list_id: \'4\'',
                'updated_at' => '2023-09-28 21:50:28',
                'user_id' => '2',
            ),
        ));
        
        
    }
}