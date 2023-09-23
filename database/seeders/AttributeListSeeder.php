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
            1 =>
                array (
                    'id' => 1,
                    'name' => 'color',
                    'comment' => 'Color name',
                ),
            2 =>
                array (
                    'id' => 2,
                    'name' => 'Category',
                    'comment' => null,
                ),
            3 =>
                array (
                    'id' => 3,
                    'name' => 'Brand',
                    'comment' => null,
                ),
        ));
    }
}
