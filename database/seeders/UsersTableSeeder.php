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
                'id' => 1,
                'name' => 'Admin 123',
                'email' => 'admin123@gmail.com',
                'foto' => '2023071423045849.png',
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$GjjsqWoOsKZJrTNlVmBnwOn3xbU2yT/RTNLGKwyCkZMvM2Ml18hTi',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => 'YF69bBdZ2hNgjMEU0Jil7uYBdcw5LSw9T4axbMUPkRx8jDwCu0LD5Ucg44da',
                'created_at' => NULL,
                'updated_at' => '2023-07-15 00:47:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$Al/JwJGbpHHK/poZk0Yoo.qWl.W.TpftFXlZs11ulBpch7M/BuYPG',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-15 00:47:42',
                'updated_at' => '2023-07-15 00:47:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bagas',
                'email' => 'bagas@gmail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$g4Rk1ln7SFTh.7fQAFSpQOiRyPK0vh4R18atVKZfB/D2xOyKjGRS2',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-17 21:52:38',
                'updated_at' => '2023-07-17 21:52:38',
            ),
        ));
        
        
    }
}