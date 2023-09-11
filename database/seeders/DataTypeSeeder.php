<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'text',
                    'comment' => 'Text field without length limit',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'string',
                    'comment' => 'Text field without 256 char limit',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'boolean',
                    'comment' => 'Values : True or False',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'integer',
                    'comment' => 'numeric value without decimal',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'float',
                    'comment' => 'numeric value with decimals',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'money',
                    'comment' => 'numeric value with 2 decimals representing a price',
                ),
        ));
    }
}
