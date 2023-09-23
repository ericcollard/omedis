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
                    'name' => 'selection',
                    'comment' => 'Value choosen in a closed list of string values',
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
                    'comment' => 'Values : 0 (false) or 1 (true)',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'integer',
                    'comment' => 'numeric value without decimal part',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'float',
                    'comment' => 'Numeric value with maximum 4 digits decimal part. Decimal separator: "."',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'money',
                    'comment' => 'Numeric value with maximum 2 digits decimal part. Decimal separator: "."',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'text',
                    'comment' => 'Text field without length limit',
                ),
        ));
    }
}
