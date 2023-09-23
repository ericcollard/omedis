<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('units')->delete();

        \DB::table('units')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'none',
                    'comment' => 'No unit, for string as an exemple',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'meter',
                    'comment' => 'Size in meters',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'kg',
                    'comment' => 'Weight in kilograms',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'eur',
                    'comment' => 'Europeen currency',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'usd',
                    'comment' => 'US Dollars currency',
                ),
        ));
    }
}
