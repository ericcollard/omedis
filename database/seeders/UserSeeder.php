<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Administrateur général',
                    'email' => 'eric@glissattitude.com',
                    'email_verified_at' => '2022-06-01 02:00:00',
                    'password' => '$2y$10$Qy.UROfMdVwkZKQlopVjWOapcHwDxLeLIG.4z7E.AJ7C0x2nv7b8e',
                    'roles' => '["ROLE_ADMIN"]',
                    'adress' => '17 montée du Cdt Robien',
                    'postal_code' => '13011',
                    'city' => 'Marseille',
                    'phone' => '06 03 24 19 77',
                    'last_login' => '2022-06-01 02:00:00',
                    'comment' => NULL,
                    'remember_token' => null,
                    'created_at' => '2022-06-01 02:00:00',
                    'updated_at' => '2022-07-21 16:35:50',
                ),
        ));


    }
}
