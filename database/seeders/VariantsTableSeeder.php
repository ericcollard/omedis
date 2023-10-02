<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VariantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('variants')->delete();

        \DB::table('variants')->insert(array (
            0 =>
                array (
                    'id' => 1,
                ),
        )
        );

    }
}
