<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_menu')->delete();
        
        \DB::table('p_role_has_menu')->insert(array (
            0 => 
            array (
                'id' => 155,
                'role_id' => 1,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            1 => 
            array (
                'id' => 299,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2023-05-29 15:15:25',
                'updated_at' => '2023-05-29 15:15:25',
            ),
            2 => 
            array (
                'id' => 300,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2023-05-29 15:15:33',
                'updated_at' => '2023-05-29 15:15:33',
            ),
            3 => 
            array (
                'id' => 306,
                'role_id' => 1,
                'menu_id' => 438,
                'created_at' => '2023-05-29 20:03:50',
                'updated_at' => '2023-05-29 20:03:50',
            ),
            4 => 
            array (
                'id' => 314,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2023-05-30 02:20:34',
                'updated_at' => '2023-05-30 02:20:34',
            ),
            5 => 
            array (
                'id' => 317,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2023-05-30 02:20:42',
                'updated_at' => '2023-05-30 02:20:42',
            ),
            6 => 
            array (
                'id' => 335,
                'role_id' => 1,
                'menu_id' => 448,
                'created_at' => '2023-07-01 16:03:47',
                'updated_at' => '2023-07-01 16:03:47',
            ),
            7 => 
            array (
                'id' => 346,
                'role_id' => 1,
                'menu_id' => 451,
                'created_at' => '2023-07-01 18:34:15',
                'updated_at' => '2023-07-01 18:34:15',
            ),
            8 => 
            array (
                'id' => 348,
                'role_id' => 1,
                'menu_id' => 446,
                'created_at' => '2023-07-01 20:47:39',
                'updated_at' => '2023-07-01 20:47:39',
            ),
            9 => 
            array (
                'id' => 349,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2023-07-01 23:09:34',
                'updated_at' => '2023-07-01 23:09:34',
            ),
            10 => 
            array (
                'id' => 350,
                'role_id' => 1,
                'menu_id' => 449,
                'created_at' => '2023-07-14 20:35:01',
                'updated_at' => '2023-07-14 20:35:01',
            ),
            11 => 
            array (
                'id' => 351,
                'role_id' => 1,
                'menu_id' => 450,
                'created_at' => '2023-07-14 20:35:05',
                'updated_at' => '2023-07-14 20:35:05',
            ),
            12 => 
            array (
                'id' => 352,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2023-07-14 20:35:11',
                'updated_at' => '2023-07-14 20:35:11',
            ),
            13 => 
            array (
                'id' => 353,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2023-07-14 20:35:20',
                'updated_at' => '2023-07-14 20:35:20',
            ),
            14 => 
            array (
                'id' => 354,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2023-07-14 20:35:26',
                'updated_at' => '2023-07-14 20:35:26',
            ),
            15 => 
            array (
                'id' => 356,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2024-08-03 19:43:02',
                'updated_at' => '2024-08-03 19:43:02',
            ),
            16 => 
            array (
                'id' => 357,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2024-08-03 19:43:11',
                'updated_at' => '2024-08-03 19:43:11',
            ),
            17 => 
            array (
                'id' => 359,
                'role_id' => 1,
                'menu_id' => 430,
                'created_at' => '2024-08-03 20:34:03',
                'updated_at' => '2024-08-03 20:34:03',
            ),
        ));
        
        
    }
}