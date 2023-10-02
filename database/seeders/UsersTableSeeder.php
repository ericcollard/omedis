<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'adress' => '17 montée du Cdt Robien',
                'city' => 'Marseille',
                'comment' => NULL,
                'created_at' => '2022-06-01 02:00:00',
                'current_team_id' => NULL,
                'email' => 'eric.collard@free.fr',
                'email_verified_at' => '2022-06-01 02:00:00',
                'id' => 1,
                'last_login' => '2022-06-01 02:00:00',
                'name' => 'Administrateur général',
                'password' => '$2y$10$Qy.UROfMdVwkZKQlopVjWOapcHwDxLeLIG.4z7E.AJ7C0x2nv7b8e',
                'phone' => '06 03 24 19 77',
                'postal_code' => '13011',
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'roles' => '["ROLE_ADMIN"]',
                'two_factor_confirmed_at' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2022-07-21 16:35:50',
            ),
            1 => 
            array (
                'adress' => '17 montée du Cdt Robien',
                'city' => 'Marseille',
                'comment' => NULL,
                'created_at' => '2022-06-01 02:00:00',
                'current_team_id' => NULL,
                'email' => 'eric@glissattitude.com',
                'email_verified_at' => '2022-06-01 02:00:00',
                'id' => 2,
                'last_login' => '2022-06-01 02:00:00',
                'name' => 'Eric COLLARD',
                'password' => '$2y$10$Qy.UROfMdVwkZKQlopVjWOapcHwDxLeLIG.4z7E.AJ7C0x2nv7b8e',
                'phone' => '06 03 24 19 77',
                'postal_code' => '13011',
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'roles' => '["ROLE_CONTRIBUTOR"]',
                'two_factor_confirmed_at' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2022-07-21 16:35:50',
            ),
            2 => 
            array (
                'adress' => NULL,
                'city' => NULL,
                'comment' => NULL,
                'created_at' => '2022-06-01 02:00:00',
                'current_team_id' => NULL,
                'email' => 'damien@f-onekites.com',
                'email_verified_at' => '2022-06-01 00:00:00',
                'id' => 3,
                'last_login' => '2022-06-01 02:00:00',
                'name' => 'Damien GOSSELIN',
                'password' => '$2y$10$WXg23nzsPfu2ootQqVxt1uAngBAglxWWVYT0mcfC5tc4vESfDWx12',
                'phone' => '04 67 99 99 33',
                'postal_code' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'roles' => '["ROLE_CONTRIBUTOR"]',
                'two_factor_confirmed_at' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2023-09-27 15:25:16',
            ),
        ));
        
        
    }
}