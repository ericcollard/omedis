<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('units')->delete();
        
        \DB::table('units')->insert(array (
            0 => 
            array (
                'comment' => 'No unit, for string as an exemple',
                'created_at' => NULL,
                'id' => 1,
                'name' => 'none',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
            'comment' => 'Meters (SI)',
                'created_at' => NULL,
                'id' => 2,
                'name' => 'm',
                'updated_at' => '2023-09-23 15:54:30',
                'user_id' => 1,
            ),
            2 => 
            array (
                'comment' => 'Centimeter',
                'created_at' => NULL,
                'id' => 3,
                'name' => 'cm',
                'updated_at' => '2023-09-23 15:54:40',
                'user_id' => 1,
            ),
            3 => 
            array (
                'comment' => 'Milimeter',
                'created_at' => NULL,
                'id' => 4,
                'name' => 'mm',
                'updated_at' => '2023-09-23 15:54:52',
                'user_id' => 1,
            ),
            4 => 
            array (
            'comment' => 'Kilogram (SI)',
                'created_at' => NULL,
                'id' => 5,
                'name' => 'kg',
                'updated_at' => '2023-09-23 15:55:10',
                'user_id' => 1,
            ),
            5 => 
            array (
            'comment' => 'Gram (1/1000 kg)',
                'created_at' => '2023-09-23 15:55:29',
                'id' => 6,
                'name' => 'g',
                'updated_at' => '2023-09-23 15:55:29',
                'user_id' => 1,
            ),
            6 => 
            array (
            'comment' => 'Square meter surface (SI)',
                'created_at' => '2023-09-23 15:56:05',
                'id' => 7,
                'name' => 'm2',
                'updated_at' => '2023-09-23 15:56:59',
                'user_id' => 1,
            ),
            7 => 
            array (
            'comment' => 'Cubic meter volume (SI)',
                'created_at' => '2023-09-23 15:56:23',
                'id' => 8,
                'name' => 'm3',
                'updated_at' => '2023-09-23 15:57:07',
                'user_id' => 1,
            ),
            8 => 
            array (
            'comment' => 'Liter (volume)',
                'created_at' => '2023-09-23 15:56:43',
                'id' => 9,
                'name' => 'l',
                'updated_at' => '2023-09-23 15:56:43',
                'user_id' => 1,
            ),
            9 => 
            array (
            'comment' => 'Second (duration)',
                'created_at' => '2023-09-23 15:57:39',
                'id' => 10,
                'name' => 's',
                'updated_at' => '2023-09-23 15:57:39',
                'user_id' => 1,
            ),
            10 => 
            array (
            'comment' => 'Inch (Pouce) : imperial length unit (=2,54cm)',
                'created_at' => '2023-09-23 16:00:19',
                'id' => 11,
                'name' => 'inch',
                'updated_at' => '2023-09-23 16:00:19',
                'user_id' => 1,
            ),
            11 => 
            array (
            'comment' => 'Foot (pied) : impérial length unit (=30,48cm)',
                'created_at' => '2023-09-23 16:01:13',
                'id' => 12,
                'name' => 'ft',
                'updated_at' => '2023-09-23 16:01:13',
                'user_id' => 1,
            ),
            12 => 
            array (
            'comment' => 'Yard : imperial length unit (=91,44cm)',
                'created_at' => '2023-09-23 16:01:45',
                'id' => 13,
                'name' => 'yd',
                'updated_at' => '2023-09-23 16:01:45',
                'user_id' => 1,
            ),
            13 => 
            array (
            'comment' => 'Mile : imperial length unit (=1,609344km)',
                'created_at' => '2023-09-23 16:02:33',
                'id' => 14,
                'name' => 'mile',
                'updated_at' => '2023-09-23 16:02:33',
                'user_id' => 1,
            ),
            14 => 
            array (
            'comment' => 'Degree (angle unit)',
                'created_at' => '2023-09-23 16:03:44',
                'id' => 15,
                'name' => 'deg',
                'updated_at' => '2023-09-23 16:03:44',
                'user_id' => 1,
            ),
            15 => 
            array (
            'comment' => 'Europeen currency (money)',
                'created_at' => '2023-09-23 16:04:22',
                'id' => 16,
                'name' => 'eur',
                'updated_at' => '2023-09-23 16:04:22',
                'user_id' => 1,
            ),
            16 => 
            array (
            'comment' => 'US dollars currency (money)',
                'created_at' => '2023-09-23 16:04:34',
                'id' => 17,
                'name' => 'usd',
                'updated_at' => '2023-09-23 16:04:34',
                'user_id' => 1,
            ),
            17 => 
            array (
            'comment' => 'Great Britain pound (Livre sterling) : currency',
                'created_at' => '2023-09-23 16:05:51',
                'id' => 18,
                'name' => 'gbp',
                'updated_at' => '2023-09-23 16:05:51',
                'user_id' => 1,
            ),
            18 => 
            array (
            'comment' => 'Suiss currency unit (money)',
                'created_at' => '2023-09-23 16:06:12',
                'id' => 19,
                'name' => 'chf',
                'updated_at' => '2023-09-23 16:06:12',
                'user_id' => 1,
            ),
            19 => 
            array (
                'comment' => 'Square centimeter surface',
                'created_at' => '2023-09-23 16:06:12',
                'id' => 20,
                'name' => 'cm2',
                'updated_at' => '2023-09-23 16:06:12',
                'user_id' => 1,
            ),
            20 => 
            array (
                'comment' => 'Square milimeter surface',
                'created_at' => '2023-09-23 16:06:12',
                'id' => 21,
                'name' => 'mm2',
                'updated_at' => '2023-09-23 16:06:12',
                'user_id' => 1,
            ),
        ));
        
        
    }
}