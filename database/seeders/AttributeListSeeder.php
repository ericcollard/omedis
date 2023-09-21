<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('attribute_lists')->delete();

        \DB::table('attribute_lists')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Surface (m2)',
                    'comment' => 'Surface in square meter',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Color',
                    'comment' => 'Color name',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Size (m)',
                    'comment' => null,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Size (cm)',
                    'comment' => null,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Size (mm)',
                    'comment' => null,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Category',
                    'comment' => null,
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Brand',
                    'comment' => null,
                ),
        ));
    }
}
