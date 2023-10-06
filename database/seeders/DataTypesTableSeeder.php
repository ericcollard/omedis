<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array (
            0 =>
            array (
                'comment' => 'Value choosen in a closed list of string values',
                'created_at' => NULL,
                'id' => 1,
                'name' => 'selection',
                'validation_str' => 'string|max:255',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 =>
            array (
                'comment' => 'Text field without 256 char limit. Utf-8 encoded characters.',
                'created_at' => NULL,
                'id' => 2,
                'name' => 'string',
                'validation_str' => 'string|max:255',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            2 =>
            array (
            'comment' => 'Values : 0 (false) or 1 (true). Encoded as integer numeric value',
                'created_at' => NULL,
                'id' => 3,
                'name' => 'boolean',
                'validation_str' => 'numeric|integer|min:0|max:1',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            3 =>
            array (
                'comment' => 'Positive numeric value without decimal part. Max : 2147483647',
                'created_at' => NULL,
                'id' => 4,
                'name' => 'integer',
                'validation_str' => 'numeric|integer|gt:0|max:2147483646',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            4 =>
            array (
                'comment' => 'Numeric value with maximum 4 digits decimal part. Decimal separator: ".", no thousand separator. Ex. "123456.45"',
                'created_at' => NULL,
                'id' => 5,
                'name' => 'float',
                'validation_str' => 'numeric|decimal:0,4|gt:0',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            5 =>
            array (
                'comment' => 'Numeric value with maximum 2 digits decimal part. Decimal separator: ".", no thousand separator.Ex. "123.45"',
                'created_at' => NULL,
                'id' => 6,
                'name' => 'money',
                'validation_str' => 'numeric|decimal:0,2|gt:0',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            6 =>
            array (
                'comment' => 'Text field without length limit. Utf-8 encoded characters.',
                'created_at' => NULL,
                'id' => 7,
                'name' => 'text',
                'validation_str' => 'string|max:255',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));


    }
}
