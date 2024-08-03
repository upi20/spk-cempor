<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('logs')->delete();
        
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:38:36',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":1,"nopeserta":"CFTG0030140","nama":"ACHMAD IMRON ROSYADI","slug":"achmad-imron-rosyadi","import_id":null,"created_at":"2023-07-14 18:55:41","updated_at":"2023-07-14 18:55:41"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'import_alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Data akumulasi","slug":"data-akumulasi","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":1}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030002","nama":"Adrian Chandika","import_id":1,"slug":"adrian-chandika","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":2}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":1}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":2,"nilai":"100","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":2}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":3}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":4}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":5}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030003","nama":"Andre Al Mahdi","import_id":1,"slug":"andre-al-mahdi","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":3}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":1,"nilai":"270","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":6}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":7}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":8}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":9}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":10}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030004","nama":"Angi Anggraeni","import_id":1,"slug":"angi-anggraeni","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":4}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":11}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":12}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":13}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":14}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":15}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030005","nama":"Arif Muwahhid Kholilulloh","import_id":1,"slug":"arif-muwahhid-kholilulloh","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":5}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":16}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":17}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":18}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":19}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":20}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030006","nama":"Ayuni Putri Utami","import_id":1,"slug":"ayuni-putri-utami","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":6}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":21}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":22}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":23}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":24}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":25}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030007","nama":"Barik Abdan Taqiyan","import_id":1,"slug":"barik-abdan-taqiyan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":7}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":26}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":27}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":28}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":29}',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":30}',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030008","nama":"Bily Irawan","import_id":1,"slug":"bily-irawan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":8}',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":31}',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":32}',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":33}',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":34}',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":35}',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030009","nama":"Cecep Sudrajat","import_id":1,"slug":"cecep-sudrajat","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":9}',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":36}',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":37}',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":38}',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":39}',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":40}',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030010","nama":"Chenley Fasawwa","import_id":1,"slug":"chenley-fasawwa","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":10}',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":41}',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":42}',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":43}',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":44}',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":45}',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030011","nama":"Deni Armansyah","import_id":1,"slug":"deni-armansyah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":11}',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":46}',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":47}',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":48}',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":49}',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":50}',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030012","nama":"Dhiya\' Fajri Tuhfahillah","import_id":1,"slug":"dhiya-fajri-tuhfahillah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":12}',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":51}',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":52}',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":53}',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":54}',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":55}',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030013","nama":"Dimas Maulana","import_id":1,"slug":"dimas-maulana","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":13}',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":56}',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":57}',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":58}',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":59}',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":60}',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030014","nama":"Dini Gustiani","import_id":1,"slug":"dini-gustiani","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":14}',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":61}',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":62}',
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":63}',
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":64}',
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":65}',
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030015","nama":"Fiki Hanggara","import_id":1,"slug":"fiki-hanggara","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":15}',
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":66}',
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":67}',
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":68}',
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":69}',
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":70}',
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030016","nama":"Fraya Fanisa Sugita","import_id":1,"slug":"fraya-fanisa-sugita","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":16}',
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":71}',
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":72}',
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":73}',
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":74}',
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":75}',
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030017","nama":"Fulgentius Sendy Nur Ridwan","import_id":1,"slug":"fulgentius-sendy-nur-ridwan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":17}',
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":76}',
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":77}',
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":78}',
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":79}',
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":80}',
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030018","nama":"Guntur Nur Afandi","import_id":1,"slug":"guntur-nur-afandi","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":18}',
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":81}',
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":82}',
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":83}',
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":84}',
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":85}',
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030019","nama":"Halimatus\'Sadiyah","import_id":1,"slug":"halimatus-sadiyah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":19}',
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":86}',
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":87}',
            ),
            107 => 
            array (
                'id' => 108,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":88}',
            ),
            108 => 
            array (
                'id' => 109,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":89}',
            ),
            109 => 
            array (
                'id' => 110,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":90}',
            ),
            110 => 
            array (
                'id' => 111,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030020","nama":"Harry Saravi Sehati Siregar","import_id":1,"slug":"harry-saravi-sehati-siregar","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":20}',
            ),
            111 => 
            array (
                'id' => 112,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":91}',
            ),
            112 => 
            array (
                'id' => 113,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":92}',
            ),
            113 => 
            array (
                'id' => 114,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":93}',
            ),
            114 => 
            array (
                'id' => 115,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":94}',
            ),
            115 => 
            array (
                'id' => 116,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":95}',
            ),
            116 => 
            array (
                'id' => 117,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030021","nama":"Intan Satia Hotimah","import_id":1,"slug":"intan-satia-hotimah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":21}',
            ),
            117 => 
            array (
                'id' => 118,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":96}',
            ),
            118 => 
            array (
                'id' => 119,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":97}',
            ),
            119 => 
            array (
                'id' => 120,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":98}',
            ),
            120 => 
            array (
                'id' => 121,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":99}',
            ),
            121 => 
            array (
                'id' => 122,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":100}',
            ),
            122 => 
            array (
                'id' => 123,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030022","nama":"Kiki Rahmatuloh","import_id":1,"slug":"kiki-rahmatuloh","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":22}',
            ),
            123 => 
            array (
                'id' => 124,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":101}',
            ),
            124 => 
            array (
                'id' => 125,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":102}',
            ),
            125 => 
            array (
                'id' => 126,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":103}',
            ),
            126 => 
            array (
                'id' => 127,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":104}',
            ),
            127 => 
            array (
                'id' => 128,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":105}',
            ),
            128 => 
            array (
                'id' => 129,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030023","nama":"Kristi Rahmawati","import_id":1,"slug":"kristi-rahmawati","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":23}',
            ),
            129 => 
            array (
                'id' => 130,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":106}',
            ),
            130 => 
            array (
                'id' => 131,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":107}',
            ),
            131 => 
            array (
                'id' => 132,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":108}',
            ),
            132 => 
            array (
                'id' => 133,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":109}',
            ),
            133 => 
            array (
                'id' => 134,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":110}',
            ),
            134 => 
            array (
                'id' => 135,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030024","nama":"Laudi Kayluna Maisha","import_id":1,"slug":"laudi-kayluna-maisha","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":24}',
            ),
            135 => 
            array (
                'id' => 136,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":111}',
            ),
            136 => 
            array (
                'id' => 137,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":112}',
            ),
            137 => 
            array (
                'id' => 138,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":113}',
            ),
            138 => 
            array (
                'id' => 139,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":114}',
            ),
            139 => 
            array (
                'id' => 140,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":115}',
            ),
            140 => 
            array (
                'id' => 141,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030025","nama":"M Iqbal Permana","import_id":1,"slug":"m-iqbal-permana","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":25}',
            ),
            141 => 
            array (
                'id' => 142,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":116}',
            ),
            142 => 
            array (
                'id' => 143,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":117}',
            ),
            143 => 
            array (
                'id' => 144,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":118}',
            ),
            144 => 
            array (
                'id' => 145,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":119}',
            ),
            145 => 
            array (
                'id' => 146,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":120}',
            ),
            146 => 
            array (
                'id' => 147,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030026","nama":"Mardhita Amilatu Rahmawati","import_id":1,"slug":"mardhita-amilatu-rahmawati","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":26}',
            ),
            147 => 
            array (
                'id' => 148,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":121}',
            ),
            148 => 
            array (
                'id' => 149,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":122}',
            ),
            149 => 
            array (
                'id' => 150,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":123}',
            ),
            150 => 
            array (
                'id' => 151,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":124}',
            ),
            151 => 
            array (
                'id' => 152,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":125}',
            ),
            152 => 
            array (
                'id' => 153,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030027","nama":"Michael","import_id":1,"slug":"michael","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":27}',
            ),
            153 => 
            array (
                'id' => 154,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":126}',
            ),
            154 => 
            array (
                'id' => 155,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":127}',
            ),
            155 => 
            array (
                'id' => 156,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":128}',
            ),
            156 => 
            array (
                'id' => 157,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":129}',
            ),
            157 => 
            array (
                'id' => 158,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":130}',
            ),
            158 => 
            array (
                'id' => 159,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030028","nama":"Miko Alistair Davian","import_id":1,"slug":"miko-alistair-davian","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":28}',
            ),
            159 => 
            array (
                'id' => 160,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":131}',
            ),
            160 => 
            array (
                'id' => 161,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":132}',
            ),
            161 => 
            array (
                'id' => 162,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":133}',
            ),
            162 => 
            array (
                'id' => 163,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":134}',
            ),
            163 => 
            array (
                'id' => 164,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":135}',
            ),
            164 => 
            array (
                'id' => 165,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030029","nama":"Moch Idris Daryadi","import_id":1,"slug":"moch-idris-daryadi","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":29}',
            ),
            165 => 
            array (
                'id' => 166,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":136}',
            ),
            166 => 
            array (
                'id' => 167,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":137}',
            ),
            167 => 
            array (
                'id' => 168,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":138}',
            ),
            168 => 
            array (
                'id' => 169,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":139}',
            ),
            169 => 
            array (
                'id' => 170,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":140}',
            ),
            170 => 
            array (
                'id' => 171,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030030","nama":"Muhamad Dhaffa Ardisa Pratama","import_id":1,"slug":"muhamad-dhaffa-ardisa-pratama","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":30}',
            ),
            171 => 
            array (
                'id' => 172,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":141}',
            ),
            172 => 
            array (
                'id' => 173,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":142}',
            ),
            173 => 
            array (
                'id' => 174,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":143}',
            ),
            174 => 
            array (
                'id' => 175,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":144}',
            ),
            175 => 
            array (
                'id' => 176,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":145}',
            ),
            176 => 
            array (
                'id' => 177,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030031","nama":"Muhamad Fadil Abdilah","import_id":1,"slug":"muhamad-fadil-abdilah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":31}',
            ),
            177 => 
            array (
                'id' => 178,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":146}',
            ),
            178 => 
            array (
                'id' => 179,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":147}',
            ),
            179 => 
            array (
                'id' => 180,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":148}',
            ),
            180 => 
            array (
                'id' => 181,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":149}',
            ),
            181 => 
            array (
                'id' => 182,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":150}',
            ),
            182 => 
            array (
                'id' => 183,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030032","nama":"Muhamad Syaeful Siddiq","import_id":1,"slug":"muhamad-syaeful-siddiq","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":32}',
            ),
            183 => 
            array (
                'id' => 184,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":151}',
            ),
            184 => 
            array (
                'id' => 185,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":152}',
            ),
            185 => 
            array (
                'id' => 186,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":153}',
            ),
            186 => 
            array (
                'id' => 187,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":154}',
            ),
            187 => 
            array (
                'id' => 188,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":155}',
            ),
            188 => 
            array (
                'id' => 189,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030033","nama":"Muhammad Azriel Iriandica Pratama","import_id":1,"slug":"muhammad-azriel-iriandica-pratama","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":33}',
            ),
            189 => 
            array (
                'id' => 190,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":156}',
            ),
            190 => 
            array (
                'id' => 191,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":157}',
            ),
            191 => 
            array (
                'id' => 192,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":158}',
            ),
            192 => 
            array (
                'id' => 193,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":159}',
            ),
            193 => 
            array (
                'id' => 194,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":160}',
            ),
            194 => 
            array (
                'id' => 195,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030034","nama":"Muhammad Dzakhwan Azizan","import_id":1,"slug":"muhammad-dzakhwan-azizan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":34}',
            ),
            195 => 
            array (
                'id' => 196,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":161}',
            ),
            196 => 
            array (
                'id' => 197,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":162}',
            ),
            197 => 
            array (
                'id' => 198,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":163}',
            ),
            198 => 
            array (
                'id' => 199,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":164}',
            ),
            199 => 
            array (
                'id' => 200,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":165}',
            ),
            200 => 
            array (
                'id' => 201,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030035","nama":"Muhammad Fahrurrozzi Abiyasa","import_id":1,"slug":"muhammad-fahrurrozzi-abiyasa","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":35}',
            ),
            201 => 
            array (
                'id' => 202,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":166}',
            ),
            202 => 
            array (
                'id' => 203,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":167}',
            ),
            203 => 
            array (
                'id' => 204,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":168}',
            ),
            204 => 
            array (
                'id' => 205,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":169}',
            ),
            205 => 
            array (
                'id' => 206,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":170}',
            ),
            206 => 
            array (
                'id' => 207,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030036","nama":"Muhammad Rhamdhan","import_id":1,"slug":"muhammad-rhamdhan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":36}',
            ),
            207 => 
            array (
                'id' => 208,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":171}',
            ),
            208 => 
            array (
                'id' => 209,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":172}',
            ),
            209 => 
            array (
                'id' => 210,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":173}',
            ),
            210 => 
            array (
                'id' => 211,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":174}',
            ),
            211 => 
            array (
                'id' => 212,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":175}',
            ),
            212 => 
            array (
                'id' => 213,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030037","nama":"Naba Syifaul Qolbi Safrudin","import_id":1,"slug":"naba-syifaul-qolbi-safrudin","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":37}',
            ),
            213 => 
            array (
                'id' => 214,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":176}',
            ),
            214 => 
            array (
                'id' => 215,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":177}',
            ),
            215 => 
            array (
                'id' => 216,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":178}',
            ),
            216 => 
            array (
                'id' => 217,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":179}',
            ),
            217 => 
            array (
                'id' => 218,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":180}',
            ),
            218 => 
            array (
                'id' => 219,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030038","nama":"Nawwaroh Ardiyah","import_id":1,"slug":"nawwaroh-ardiyah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":38}',
            ),
            219 => 
            array (
                'id' => 220,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":181}',
            ),
            220 => 
            array (
                'id' => 221,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":182}',
            ),
            221 => 
            array (
                'id' => 222,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":183}',
            ),
            222 => 
            array (
                'id' => 223,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":184}',
            ),
            223 => 
            array (
                'id' => 224,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":185}',
            ),
            224 => 
            array (
                'id' => 225,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030039","nama":"Nindi Trisni Noer Solihat","import_id":1,"slug":"nindi-trisni-noer-solihat","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":39}',
            ),
            225 => 
            array (
                'id' => 226,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":186}',
            ),
            226 => 
            array (
                'id' => 227,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":187}',
            ),
            227 => 
            array (
                'id' => 228,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":188}',
            ),
            228 => 
            array (
                'id' => 229,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":189}',
            ),
            229 => 
            array (
                'id' => 230,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":190}',
            ),
            230 => 
            array (
                'id' => 231,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030040","nama":"Oktavianus Aggi Nugroho","import_id":1,"slug":"oktavianus-aggi-nugroho","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":40}',
            ),
            231 => 
            array (
                'id' => 232,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":191}',
            ),
            232 => 
            array (
                'id' => 233,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":192}',
            ),
            233 => 
            array (
                'id' => 234,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":193}',
            ),
            234 => 
            array (
                'id' => 235,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":194}',
            ),
            235 => 
            array (
                'id' => 236,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":195}',
            ),
            236 => 
            array (
                'id' => 237,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030041","nama":"Pramada Hadha Mahardika","import_id":1,"slug":"pramada-hadha-mahardika","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":41}',
            ),
            237 => 
            array (
                'id' => 238,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":196}',
            ),
            238 => 
            array (
                'id' => 239,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":197}',
            ),
            239 => 
            array (
                'id' => 240,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":198}',
            ),
            240 => 
            array (
                'id' => 241,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":199}',
            ),
            241 => 
            array (
                'id' => 242,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":200}',
            ),
            242 => 
            array (
                'id' => 243,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030042","nama":"Raafi Ramadhan","import_id":1,"slug":"raafi-ramadhan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":42}',
            ),
            243 => 
            array (
                'id' => 244,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":201}',
            ),
            244 => 
            array (
                'id' => 245,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":202}',
            ),
            245 => 
            array (
                'id' => 246,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":203}',
            ),
            246 => 
            array (
                'id' => 247,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":204}',
            ),
            247 => 
            array (
                'id' => 248,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":205}',
            ),
            248 => 
            array (
                'id' => 249,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030043","nama":"Rachmat Hidayatullah","import_id":1,"slug":"rachmat-hidayatullah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":43}',
            ),
            249 => 
            array (
                'id' => 250,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":206}',
            ),
            250 => 
            array (
                'id' => 251,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":207}',
            ),
            251 => 
            array (
                'id' => 252,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":208}',
            ),
            252 => 
            array (
                'id' => 253,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":209}',
            ),
            253 => 
            array (
                'id' => 254,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":210}',
            ),
            254 => 
            array (
                'id' => 255,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030044","nama":"Raisa Hasmalita","import_id":1,"slug":"raisa-hasmalita","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":44}',
            ),
            255 => 
            array (
                'id' => 256,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":211}',
            ),
            256 => 
            array (
                'id' => 257,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":212}',
            ),
            257 => 
            array (
                'id' => 258,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":213}',
            ),
            258 => 
            array (
                'id' => 259,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":214}',
            ),
            259 => 
            array (
                'id' => 260,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":215}',
            ),
            260 => 
            array (
                'id' => 261,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030045","nama":"Raka Rahmat Gumelar","import_id":1,"slug":"raka-rahmat-gumelar","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":45}',
            ),
            261 => 
            array (
                'id' => 262,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":216}',
            ),
            262 => 
            array (
                'id' => 263,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":217}',
            ),
            263 => 
            array (
                'id' => 264,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":218}',
            ),
            264 => 
            array (
                'id' => 265,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":219}',
            ),
            265 => 
            array (
                'id' => 266,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":220}',
            ),
            266 => 
            array (
                'id' => 267,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030046","nama":"Restu Ramania","import_id":1,"slug":"restu-ramania","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":46}',
            ),
            267 => 
            array (
                'id' => 268,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":221}',
            ),
            268 => 
            array (
                'id' => 269,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":222}',
            ),
            269 => 
            array (
                'id' => 270,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":223}',
            ),
            270 => 
            array (
                'id' => 271,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":224}',
            ),
            271 => 
            array (
                'id' => 272,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":225}',
            ),
            272 => 
            array (
                'id' => 273,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030047","nama":"Rizky Doni Nurdiansyah","import_id":1,"slug":"rizky-doni-nurdiansyah","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":47}',
            ),
            273 => 
            array (
                'id' => 274,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":226}',
            ),
            274 => 
            array (
                'id' => 275,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":227}',
            ),
            275 => 
            array (
                'id' => 276,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":228}',
            ),
            276 => 
            array (
                'id' => 277,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":229}',
            ),
            277 => 
            array (
                'id' => 278,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":230}',
            ),
            278 => 
            array (
                'id' => 279,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030048","nama":"Sri Setiawati","import_id":1,"slug":"sri-setiawati","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":48}',
            ),
            279 => 
            array (
                'id' => 280,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":231}',
            ),
            280 => 
            array (
                'id' => 281,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":232}',
            ),
            281 => 
            array (
                'id' => 282,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":233}',
            ),
            282 => 
            array (
                'id' => 283,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":234}',
            ),
            283 => 
            array (
                'id' => 284,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":235}',
            ),
            284 => 
            array (
                'id' => 285,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030049","nama":"Tito Nugi Syaputra","import_id":1,"slug":"tito-nugi-syaputra","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":49}',
            ),
            285 => 
            array (
                'id' => 286,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":1,"nilai":"100","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":236}',
            ),
            286 => 
            array (
                'id' => 287,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":237}',
            ),
            287 => 
            array (
                'id' => 288,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":238}',
            ),
            288 => 
            array (
                'id' => 289,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":239}',
            ),
            289 => 
            array (
                'id' => 290,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":240}',
            ),
            290 => 
            array (
                'id' => 291,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030050","nama":"Vinka Priliani Rianaputri","import_id":1,"slug":"vinka-priliani-rianaputri","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":50}',
            ),
            291 => 
            array (
                'id' => 292,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":241}',
            ),
            292 => 
            array (
                'id' => 293,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":242}',
            ),
            293 => 
            array (
                'id' => 294,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":243}',
            ),
            294 => 
            array (
                'id' => 295,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":244}',
            ),
            295 => 
            array (
                'id' => 296,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":245}',
            ),
            296 => 
            array (
                'id' => 297,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030051","nama":"Zena Jasmine Ghaissany Nanlohy","import_id":1,"slug":"zena-jasmine-ghaissany-nanlohy","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":51}',
            ),
            297 => 
            array (
                'id' => 298,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":246}',
            ),
            298 => 
            array (
                'id' => 299,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":247}',
            ),
            299 => 
            array (
                'id' => 300,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":248}',
            ),
            300 => 
            array (
                'id' => 301,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":249}',
            ),
            301 => 
            array (
                'id' => 302,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":250}',
            ),
            302 => 
            array (
                'id' => 303,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'import_alternatif',
                'log_type' => 'edit',
                'data' => '{"nama":"Data akumulasi","slug":"data-akumulasi","updated_at":"2023-07-14 19:39:11","created_at":"2023-07-14 19:39:11","id":1}',
            ),
            303 => 
            array (
                'id' => 304,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:39:30',
                'table_name' => 'import_alternatif',
                'log_type' => 'delete',
                'data' => '{"id":1,"nama":"Data akumulasi","slug":"data-akumulasi","file":"20230714073911-data-akumulasi.xlsx","count":50,"created_at":"2023-07-14 19:39:11","updated_at":"2023-07-14 19:39:12"}',
            ),
            304 => 
            array (
                'id' => 305,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'import_alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Data Testing","slug":"data-testing","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":2}',
            ),
            305 => 
            array (
                'id' => 306,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030002","nama":"Adrian Chandika","import_id":2,"slug":"adrian-chandika","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":52}',
            ),
            306 => 
            array (
                'id' => 307,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":251}',
            ),
            307 => 
            array (
                'id' => 308,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":2,"nilai":"100","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":252}',
            ),
            308 => 
            array (
                'id' => 309,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":253}',
            ),
            309 => 
            array (
                'id' => 310,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":254}',
            ),
            310 => 
            array (
                'id' => 311,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":255}',
            ),
            311 => 
            array (
                'id' => 312,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030003","nama":"Andre Al Mahdi","import_id":2,"slug":"andre-al-mahdi","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":53}',
            ),
            312 => 
            array (
                'id' => 313,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":1,"nilai":"270","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":256}',
            ),
            313 => 
            array (
                'id' => 314,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":257}',
            ),
            314 => 
            array (
                'id' => 315,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":258}',
            ),
            315 => 
            array (
                'id' => 316,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":259}',
            ),
            316 => 
            array (
                'id' => 317,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":260}',
            ),
            317 => 
            array (
                'id' => 318,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030004","nama":"Angi Anggraeni","import_id":2,"slug":"angi-anggraeni","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":54}',
            ),
            318 => 
            array (
                'id' => 319,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":261}',
            ),
            319 => 
            array (
                'id' => 320,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":262}',
            ),
            320 => 
            array (
                'id' => 321,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":263}',
            ),
            321 => 
            array (
                'id' => 322,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":264}',
            ),
            322 => 
            array (
                'id' => 323,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":265}',
            ),
            323 => 
            array (
                'id' => 324,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030005","nama":"Arif Muwahhid Kholilulloh","import_id":2,"slug":"arif-muwahhid-kholilulloh","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":55}',
            ),
            324 => 
            array (
                'id' => 325,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":266}',
            ),
            325 => 
            array (
                'id' => 326,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":267}',
            ),
            326 => 
            array (
                'id' => 327,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":268}',
            ),
            327 => 
            array (
                'id' => 328,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":269}',
            ),
            328 => 
            array (
                'id' => 329,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":270}',
            ),
            329 => 
            array (
                'id' => 330,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030006","nama":"Ayuni Putri Utami","import_id":2,"slug":"ayuni-putri-utami","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":56}',
            ),
            330 => 
            array (
                'id' => 331,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":271}',
            ),
            331 => 
            array (
                'id' => 332,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":272}',
            ),
            332 => 
            array (
                'id' => 333,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":273}',
            ),
            333 => 
            array (
                'id' => 334,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":274}',
            ),
            334 => 
            array (
                'id' => 335,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":275}',
            ),
            335 => 
            array (
                'id' => 336,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030007","nama":"Barik Abdan Taqiyan","import_id":2,"slug":"barik-abdan-taqiyan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":57}',
            ),
            336 => 
            array (
                'id' => 337,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":276}',
            ),
            337 => 
            array (
                'id' => 338,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":277}',
            ),
            338 => 
            array (
                'id' => 339,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":278}',
            ),
            339 => 
            array (
                'id' => 340,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":279}',
            ),
            340 => 
            array (
                'id' => 341,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":280}',
            ),
            341 => 
            array (
                'id' => 342,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030008","nama":"Bily Irawan","import_id":2,"slug":"bily-irawan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":58}',
            ),
            342 => 
            array (
                'id' => 343,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":281}',
            ),
            343 => 
            array (
                'id' => 344,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":282}',
            ),
            344 => 
            array (
                'id' => 345,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":283}',
            ),
            345 => 
            array (
                'id' => 346,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":284}',
            ),
            346 => 
            array (
                'id' => 347,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":285}',
            ),
            347 => 
            array (
                'id' => 348,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030009","nama":"Cecep Sudrajat","import_id":2,"slug":"cecep-sudrajat","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":59}',
            ),
            348 => 
            array (
                'id' => 349,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":286}',
            ),
            349 => 
            array (
                'id' => 350,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":287}',
            ),
            350 => 
            array (
                'id' => 351,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":288}',
            ),
            351 => 
            array (
                'id' => 352,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":289}',
            ),
            352 => 
            array (
                'id' => 353,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":290}',
            ),
            353 => 
            array (
                'id' => 354,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030010","nama":"Chenley Fasawwa","import_id":2,"slug":"chenley-fasawwa","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":60}',
            ),
            354 => 
            array (
                'id' => 355,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":291}',
            ),
            355 => 
            array (
                'id' => 356,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":292}',
            ),
            356 => 
            array (
                'id' => 357,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":293}',
            ),
            357 => 
            array (
                'id' => 358,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":294}',
            ),
            358 => 
            array (
                'id' => 359,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":295}',
            ),
            359 => 
            array (
                'id' => 360,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030011","nama":"Deni Armansyah","import_id":2,"slug":"deni-armansyah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":61}',
            ),
            360 => 
            array (
                'id' => 361,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":296}',
            ),
            361 => 
            array (
                'id' => 362,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":297}',
            ),
            362 => 
            array (
                'id' => 363,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":298}',
            ),
            363 => 
            array (
                'id' => 364,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":299}',
            ),
            364 => 
            array (
                'id' => 365,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":300}',
            ),
            365 => 
            array (
                'id' => 366,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030012","nama":"Dhiya\' Fajri Tuhfahillah","import_id":2,"slug":"dhiya-fajri-tuhfahillah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":62}',
            ),
            366 => 
            array (
                'id' => 367,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":301}',
            ),
            367 => 
            array (
                'id' => 368,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":302}',
            ),
            368 => 
            array (
                'id' => 369,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":303}',
            ),
            369 => 
            array (
                'id' => 370,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":304}',
            ),
            370 => 
            array (
                'id' => 371,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":305}',
            ),
            371 => 
            array (
                'id' => 372,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030013","nama":"Dimas Maulana","import_id":2,"slug":"dimas-maulana","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":63}',
            ),
            372 => 
            array (
                'id' => 373,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":306}',
            ),
            373 => 
            array (
                'id' => 374,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":307}',
            ),
            374 => 
            array (
                'id' => 375,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":308}',
            ),
            375 => 
            array (
                'id' => 376,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":309}',
            ),
            376 => 
            array (
                'id' => 377,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":310}',
            ),
            377 => 
            array (
                'id' => 378,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030014","nama":"Dini Gustiani","import_id":2,"slug":"dini-gustiani","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":64}',
            ),
            378 => 
            array (
                'id' => 379,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":311}',
            ),
            379 => 
            array (
                'id' => 380,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":312}',
            ),
            380 => 
            array (
                'id' => 381,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":313}',
            ),
            381 => 
            array (
                'id' => 382,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":314}',
            ),
            382 => 
            array (
                'id' => 383,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":315}',
            ),
            383 => 
            array (
                'id' => 384,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030015","nama":"Fiki Hanggara","import_id":2,"slug":"fiki-hanggara","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":65}',
            ),
            384 => 
            array (
                'id' => 385,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":316}',
            ),
            385 => 
            array (
                'id' => 386,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":317}',
            ),
            386 => 
            array (
                'id' => 387,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":318}',
            ),
            387 => 
            array (
                'id' => 388,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":319}',
            ),
            388 => 
            array (
                'id' => 389,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":320}',
            ),
            389 => 
            array (
                'id' => 390,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030016","nama":"Fraya Fanisa Sugita","import_id":2,"slug":"fraya-fanisa-sugita","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":66}',
            ),
            390 => 
            array (
                'id' => 391,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":321}',
            ),
            391 => 
            array (
                'id' => 392,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":322}',
            ),
            392 => 
            array (
                'id' => 393,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":323}',
            ),
            393 => 
            array (
                'id' => 394,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":324}',
            ),
            394 => 
            array (
                'id' => 395,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":325}',
            ),
            395 => 
            array (
                'id' => 396,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030017","nama":"Fulgentius Sendy Nur Ridwan","import_id":2,"slug":"fulgentius-sendy-nur-ridwan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":67}',
            ),
            396 => 
            array (
                'id' => 397,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":326}',
            ),
            397 => 
            array (
                'id' => 398,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":327}',
            ),
            398 => 
            array (
                'id' => 399,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":328}',
            ),
            399 => 
            array (
                'id' => 400,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":329}',
            ),
            400 => 
            array (
                'id' => 401,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":330}',
            ),
            401 => 
            array (
                'id' => 402,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030018","nama":"Guntur Nur Afandi","import_id":2,"slug":"guntur-nur-afandi","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":68}',
            ),
            402 => 
            array (
                'id' => 403,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":331}',
            ),
            403 => 
            array (
                'id' => 404,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":332}',
            ),
            404 => 
            array (
                'id' => 405,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":333}',
            ),
            405 => 
            array (
                'id' => 406,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":334}',
            ),
            406 => 
            array (
                'id' => 407,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":335}',
            ),
            407 => 
            array (
                'id' => 408,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030019","nama":"Halimatus\'Sadiyah","import_id":2,"slug":"halimatus-sadiyah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":69}',
            ),
            408 => 
            array (
                'id' => 409,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":336}',
            ),
            409 => 
            array (
                'id' => 410,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":337}',
            ),
            410 => 
            array (
                'id' => 411,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":338}',
            ),
            411 => 
            array (
                'id' => 412,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":339}',
            ),
            412 => 
            array (
                'id' => 413,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":340}',
            ),
            413 => 
            array (
                'id' => 414,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030020","nama":"Harry Saravi Sehati Siregar","import_id":2,"slug":"harry-saravi-sehati-siregar","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":70}',
            ),
            414 => 
            array (
                'id' => 415,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":341}',
            ),
            415 => 
            array (
                'id' => 416,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":342}',
            ),
            416 => 
            array (
                'id' => 417,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":343}',
            ),
            417 => 
            array (
                'id' => 418,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":344}',
            ),
            418 => 
            array (
                'id' => 419,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":345}',
            ),
            419 => 
            array (
                'id' => 420,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030021","nama":"Intan Satia Hotimah","import_id":2,"slug":"intan-satia-hotimah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":71}',
            ),
            420 => 
            array (
                'id' => 421,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":346}',
            ),
            421 => 
            array (
                'id' => 422,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":347}',
            ),
            422 => 
            array (
                'id' => 423,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":348}',
            ),
            423 => 
            array (
                'id' => 424,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":349}',
            ),
            424 => 
            array (
                'id' => 425,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":350}',
            ),
            425 => 
            array (
                'id' => 426,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030022","nama":"Kiki Rahmatuloh","import_id":2,"slug":"kiki-rahmatuloh","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":72}',
            ),
            426 => 
            array (
                'id' => 427,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":351}',
            ),
            427 => 
            array (
                'id' => 428,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":352}',
            ),
            428 => 
            array (
                'id' => 429,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":353}',
            ),
            429 => 
            array (
                'id' => 430,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":354}',
            ),
            430 => 
            array (
                'id' => 431,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":355}',
            ),
            431 => 
            array (
                'id' => 432,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030023","nama":"Kristi Rahmawati","import_id":2,"slug":"kristi-rahmawati","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":73}',
            ),
            432 => 
            array (
                'id' => 433,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":356}',
            ),
            433 => 
            array (
                'id' => 434,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":357}',
            ),
            434 => 
            array (
                'id' => 435,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":358}',
            ),
            435 => 
            array (
                'id' => 436,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":359}',
            ),
            436 => 
            array (
                'id' => 437,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":360}',
            ),
            437 => 
            array (
                'id' => 438,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030024","nama":"Laudi Kayluna Maisha","import_id":2,"slug":"laudi-kayluna-maisha","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":74}',
            ),
            438 => 
            array (
                'id' => 439,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":361}',
            ),
            439 => 
            array (
                'id' => 440,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":362}',
            ),
            440 => 
            array (
                'id' => 441,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":363}',
            ),
            441 => 
            array (
                'id' => 442,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":364}',
            ),
            442 => 
            array (
                'id' => 443,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":365}',
            ),
            443 => 
            array (
                'id' => 444,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030025","nama":"M Iqbal Permana","import_id":2,"slug":"m-iqbal-permana","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":75}',
            ),
            444 => 
            array (
                'id' => 445,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":366}',
            ),
            445 => 
            array (
                'id' => 446,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":367}',
            ),
            446 => 
            array (
                'id' => 447,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":368}',
            ),
            447 => 
            array (
                'id' => 448,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":369}',
            ),
            448 => 
            array (
                'id' => 449,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":370}',
            ),
            449 => 
            array (
                'id' => 450,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030026","nama":"Mardhita Amilatu Rahmawati","import_id":2,"slug":"mardhita-amilatu-rahmawati","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":76}',
            ),
            450 => 
            array (
                'id' => 451,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":371}',
            ),
            451 => 
            array (
                'id' => 452,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":372}',
            ),
            452 => 
            array (
                'id' => 453,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":373}',
            ),
            453 => 
            array (
                'id' => 454,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":374}',
            ),
            454 => 
            array (
                'id' => 455,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":375}',
            ),
            455 => 
            array (
                'id' => 456,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030027","nama":"Michael","import_id":2,"slug":"michael","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":77}',
            ),
            456 => 
            array (
                'id' => 457,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":376}',
            ),
            457 => 
            array (
                'id' => 458,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":377}',
            ),
            458 => 
            array (
                'id' => 459,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":378}',
            ),
            459 => 
            array (
                'id' => 460,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":379}',
            ),
            460 => 
            array (
                'id' => 461,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":380}',
            ),
            461 => 
            array (
                'id' => 462,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030028","nama":"Miko Alistair Davian","import_id":2,"slug":"miko-alistair-davian","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":78}',
            ),
            462 => 
            array (
                'id' => 463,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":381}',
            ),
            463 => 
            array (
                'id' => 464,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":382}',
            ),
            464 => 
            array (
                'id' => 465,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":383}',
            ),
            465 => 
            array (
                'id' => 466,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":384}',
            ),
            466 => 
            array (
                'id' => 467,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":385}',
            ),
            467 => 
            array (
                'id' => 468,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030029","nama":"Moch Idris Daryadi","import_id":2,"slug":"moch-idris-daryadi","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":79}',
            ),
            468 => 
            array (
                'id' => 469,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":386}',
            ),
            469 => 
            array (
                'id' => 470,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":387}',
            ),
            470 => 
            array (
                'id' => 471,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":388}',
            ),
            471 => 
            array (
                'id' => 472,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":389}',
            ),
            472 => 
            array (
                'id' => 473,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":390}',
            ),
            473 => 
            array (
                'id' => 474,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030030","nama":"Muhamad Dhaffa Ardisa Pratama","import_id":2,"slug":"muhamad-dhaffa-ardisa-pratama","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":80}',
            ),
            474 => 
            array (
                'id' => 475,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":391}',
            ),
            475 => 
            array (
                'id' => 476,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":392}',
            ),
            476 => 
            array (
                'id' => 477,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":393}',
            ),
            477 => 
            array (
                'id' => 478,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":394}',
            ),
            478 => 
            array (
                'id' => 479,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":395}',
            ),
            479 => 
            array (
                'id' => 480,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030031","nama":"Muhamad Fadil Abdilah","import_id":2,"slug":"muhamad-fadil-abdilah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":81}',
            ),
            480 => 
            array (
                'id' => 481,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":396}',
            ),
            481 => 
            array (
                'id' => 482,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":397}',
            ),
            482 => 
            array (
                'id' => 483,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":398}',
            ),
            483 => 
            array (
                'id' => 484,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":399}',
            ),
            484 => 
            array (
                'id' => 485,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":400}',
            ),
            485 => 
            array (
                'id' => 486,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030032","nama":"Muhamad Syaeful Siddiq","import_id":2,"slug":"muhamad-syaeful-siddiq","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":82}',
            ),
            486 => 
            array (
                'id' => 487,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":401}',
            ),
            487 => 
            array (
                'id' => 488,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":402}',
            ),
            488 => 
            array (
                'id' => 489,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":403}',
            ),
            489 => 
            array (
                'id' => 490,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":404}',
            ),
            490 => 
            array (
                'id' => 491,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":405}',
            ),
            491 => 
            array (
                'id' => 492,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030033","nama":"Muhammad Azriel Iriandica Pratama","import_id":2,"slug":"muhammad-azriel-iriandica-pratama","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":83}',
            ),
            492 => 
            array (
                'id' => 493,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":406}',
            ),
            493 => 
            array (
                'id' => 494,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":407}',
            ),
            494 => 
            array (
                'id' => 495,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":408}',
            ),
            495 => 
            array (
                'id' => 496,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":409}',
            ),
            496 => 
            array (
                'id' => 497,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":410}',
            ),
            497 => 
            array (
                'id' => 498,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030034","nama":"Muhammad Dzakhwan Azizan","import_id":2,"slug":"muhammad-dzakhwan-azizan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":84}',
            ),
            498 => 
            array (
                'id' => 499,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":411}',
            ),
            499 => 
            array (
                'id' => 500,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":412}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 501,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":413}',
            ),
            1 => 
            array (
                'id' => 502,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":414}',
            ),
            2 => 
            array (
                'id' => 503,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":415}',
            ),
            3 => 
            array (
                'id' => 504,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030035","nama":"Muhammad Fahrurrozzi Abiyasa","import_id":2,"slug":"muhammad-fahrurrozzi-abiyasa","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":85}',
            ),
            4 => 
            array (
                'id' => 505,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":416}',
            ),
            5 => 
            array (
                'id' => 506,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":417}',
            ),
            6 => 
            array (
                'id' => 507,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":418}',
            ),
            7 => 
            array (
                'id' => 508,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":419}',
            ),
            8 => 
            array (
                'id' => 509,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":420}',
            ),
            9 => 
            array (
                'id' => 510,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030036","nama":"Muhammad Rhamdhan","import_id":2,"slug":"muhammad-rhamdhan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":86}',
            ),
            10 => 
            array (
                'id' => 511,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":421}',
            ),
            11 => 
            array (
                'id' => 512,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":422}',
            ),
            12 => 
            array (
                'id' => 513,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":423}',
            ),
            13 => 
            array (
                'id' => 514,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":424}',
            ),
            14 => 
            array (
                'id' => 515,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":425}',
            ),
            15 => 
            array (
                'id' => 516,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030037","nama":"Naba Syifaul Qolbi Safrudin","import_id":2,"slug":"naba-syifaul-qolbi-safrudin","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":87}',
            ),
            16 => 
            array (
                'id' => 517,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":426}',
            ),
            17 => 
            array (
                'id' => 518,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":427}',
            ),
            18 => 
            array (
                'id' => 519,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":428}',
            ),
            19 => 
            array (
                'id' => 520,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":429}',
            ),
            20 => 
            array (
                'id' => 521,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":430}',
            ),
            21 => 
            array (
                'id' => 522,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030038","nama":"Nawwaroh Ardiyah","import_id":2,"slug":"nawwaroh-ardiyah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":88}',
            ),
            22 => 
            array (
                'id' => 523,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":431}',
            ),
            23 => 
            array (
                'id' => 524,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":432}',
            ),
            24 => 
            array (
                'id' => 525,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":433}',
            ),
            25 => 
            array (
                'id' => 526,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":434}',
            ),
            26 => 
            array (
                'id' => 527,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":435}',
            ),
            27 => 
            array (
                'id' => 528,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030039","nama":"Nindi Trisni Noer Solihat","import_id":2,"slug":"nindi-trisni-noer-solihat","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":89}',
            ),
            28 => 
            array (
                'id' => 529,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":436}',
            ),
            29 => 
            array (
                'id' => 530,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":437}',
            ),
            30 => 
            array (
                'id' => 531,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":438}',
            ),
            31 => 
            array (
                'id' => 532,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":439}',
            ),
            32 => 
            array (
                'id' => 533,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":440}',
            ),
            33 => 
            array (
                'id' => 534,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030040","nama":"Oktavianus Aggi Nugroho","import_id":2,"slug":"oktavianus-aggi-nugroho","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":90}',
            ),
            34 => 
            array (
                'id' => 535,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":441}',
            ),
            35 => 
            array (
                'id' => 536,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":442}',
            ),
            36 => 
            array (
                'id' => 537,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":443}',
            ),
            37 => 
            array (
                'id' => 538,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":444}',
            ),
            38 => 
            array (
                'id' => 539,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":445}',
            ),
            39 => 
            array (
                'id' => 540,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030041","nama":"Pramada Hadha Mahardika","import_id":2,"slug":"pramada-hadha-mahardika","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":91}',
            ),
            40 => 
            array (
                'id' => 541,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":446}',
            ),
            41 => 
            array (
                'id' => 542,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":447}',
            ),
            42 => 
            array (
                'id' => 543,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":448}',
            ),
            43 => 
            array (
                'id' => 544,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":449}',
            ),
            44 => 
            array (
                'id' => 545,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":450}',
            ),
            45 => 
            array (
                'id' => 546,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030042","nama":"Raafi Ramadhan","import_id":2,"slug":"raafi-ramadhan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":92}',
            ),
            46 => 
            array (
                'id' => 547,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":451}',
            ),
            47 => 
            array (
                'id' => 548,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":452}',
            ),
            48 => 
            array (
                'id' => 549,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":453}',
            ),
            49 => 
            array (
                'id' => 550,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":454}',
            ),
            50 => 
            array (
                'id' => 551,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":455}',
            ),
            51 => 
            array (
                'id' => 552,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030043","nama":"Rachmat Hidayatullah","import_id":2,"slug":"rachmat-hidayatullah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":93}',
            ),
            52 => 
            array (
                'id' => 553,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":456}',
            ),
            53 => 
            array (
                'id' => 554,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":457}',
            ),
            54 => 
            array (
                'id' => 555,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":458}',
            ),
            55 => 
            array (
                'id' => 556,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":459}',
            ),
            56 => 
            array (
                'id' => 557,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":460}',
            ),
            57 => 
            array (
                'id' => 558,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030044","nama":"Raisa Hasmalita","import_id":2,"slug":"raisa-hasmalita","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":94}',
            ),
            58 => 
            array (
                'id' => 559,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":461}',
            ),
            59 => 
            array (
                'id' => 560,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":462}',
            ),
            60 => 
            array (
                'id' => 561,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":463}',
            ),
            61 => 
            array (
                'id' => 562,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":464}',
            ),
            62 => 
            array (
                'id' => 563,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":465}',
            ),
            63 => 
            array (
                'id' => 564,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030045","nama":"Raka Rahmat Gumelar","import_id":2,"slug":"raka-rahmat-gumelar","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":95}',
            ),
            64 => 
            array (
                'id' => 565,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":466}',
            ),
            65 => 
            array (
                'id' => 566,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":467}',
            ),
            66 => 
            array (
                'id' => 567,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":468}',
            ),
            67 => 
            array (
                'id' => 568,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":469}',
            ),
            68 => 
            array (
                'id' => 569,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":470}',
            ),
            69 => 
            array (
                'id' => 570,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030046","nama":"Restu Ramania","import_id":2,"slug":"restu-ramania","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":96}',
            ),
            70 => 
            array (
                'id' => 571,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":471}',
            ),
            71 => 
            array (
                'id' => 572,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":472}',
            ),
            72 => 
            array (
                'id' => 573,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":473}',
            ),
            73 => 
            array (
                'id' => 574,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":474}',
            ),
            74 => 
            array (
                'id' => 575,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":475}',
            ),
            75 => 
            array (
                'id' => 576,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030047","nama":"Rizky Doni Nurdiansyah","import_id":2,"slug":"rizky-doni-nurdiansyah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":97}',
            ),
            76 => 
            array (
                'id' => 577,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":476}',
            ),
            77 => 
            array (
                'id' => 578,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":477}',
            ),
            78 => 
            array (
                'id' => 579,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":478}',
            ),
            79 => 
            array (
                'id' => 580,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":479}',
            ),
            80 => 
            array (
                'id' => 581,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":480}',
            ),
            81 => 
            array (
                'id' => 582,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030048","nama":"Sri Setiawati","import_id":2,"slug":"sri-setiawati","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":98}',
            ),
            82 => 
            array (
                'id' => 583,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":481}',
            ),
            83 => 
            array (
                'id' => 584,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":482}',
            ),
            84 => 
            array (
                'id' => 585,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":483}',
            ),
            85 => 
            array (
                'id' => 586,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":484}',
            ),
            86 => 
            array (
                'id' => 587,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":485}',
            ),
            87 => 
            array (
                'id' => 588,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030049","nama":"Tito Nugi Syaputra","import_id":2,"slug":"tito-nugi-syaputra","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":99}',
            ),
            88 => 
            array (
                'id' => 589,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":1,"nilai":"100","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":486}',
            ),
            89 => 
            array (
                'id' => 590,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":487}',
            ),
            90 => 
            array (
                'id' => 591,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":488}',
            ),
            91 => 
            array (
                'id' => 592,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":489}',
            ),
            92 => 
            array (
                'id' => 593,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":490}',
            ),
            93 => 
            array (
                'id' => 594,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030050","nama":"Vinka Priliani Rianaputri","import_id":2,"slug":"vinka-priliani-rianaputri","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":100}',
            ),
            94 => 
            array (
                'id' => 595,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":491}',
            ),
            95 => 
            array (
                'id' => 596,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":492}',
            ),
            96 => 
            array (
                'id' => 597,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":493}',
            ),
            97 => 
            array (
                'id' => 598,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":494}',
            ),
            98 => 
            array (
                'id' => 599,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":495}',
            ),
            99 => 
            array (
                'id' => 600,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030051","nama":"Zena Jasmine Ghaissany Nanlohy","import_id":2,"slug":"zena-jasmine-ghaissany-nanlohy","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":101}',
            ),
            100 => 
            array (
                'id' => 601,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":496}',
            ),
            101 => 
            array (
                'id' => 602,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":497}',
            ),
            102 => 
            array (
                'id' => 603,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":498}',
            ),
            103 => 
            array (
                'id' => 604,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":499}',
            ),
            104 => 
            array (
                'id' => 605,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":500}',
            ),
            105 => 
            array (
                'id' => 606,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'import_alternatif',
                'log_type' => 'edit',
                'data' => '{"nama":"Data Testing","slug":"data-testing","updated_at":"2023-07-14 19:40:51","created_at":"2023-07-14 19:40:51","id":2}',
            ),
            106 => 
            array (
                'id' => 607,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":null,"updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":501}',
            ),
            107 => 
            array (
                'id' => 608,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":502}',
            ),
            108 => 
            array (
                'id' => 609,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":503}',
            ),
            109 => 
            array (
                'id' => 610,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":504}',
            ),
            110 => 
            array (
                'id' => 611,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":505}',
            ),
            111 => 
            array (
                'id' => 612,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:11.000000Z","created_at":"2023-07-14T12:41:11.000000Z","id":506}',
            ),
            112 => 
            array (
                'id' => 613,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T12:41:12.000000Z","created_at":"2023-07-14T12:41:12.000000Z","id":507}',
            ),
            113 => 
            array (
                'id' => 614,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:12.000000Z","created_at":"2023-07-14T12:41:12.000000Z","id":508}',
            ),
            114 => 
            array (
                'id' => 615,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:12.000000Z","created_at":"2023-07-14T12:41:12.000000Z","id":509}',
            ),
            115 => 
            array (
                'id' => 616,
                'user_id' => 1,
                'log_date' => '2023-07-14 19:41:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T12:41:12.000000Z","created_at":"2023-07-14T12:41:12.000000Z","id":510}',
            ),
            116 => 
            array (
                'id' => 617,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif',
                'log_type' => 'edit',
                'data' => '{"id":52,"nopeserta":"CFTG0030002","nama":"Adrian Chandika","slug":"adrian-chandika","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            117 => 
            array (
                'id' => 618,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":511}',
            ),
            118 => 
            array (
                'id' => 619,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":512}',
            ),
            119 => 
            array (
                'id' => 620,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":513}',
            ),
            120 => 
            array (
                'id' => 621,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":514}',
            ),
            121 => 
            array (
                'id' => 622,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":515}',
            ),
            122 => 
            array (
                'id' => 623,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif',
                'log_type' => 'edit',
                'data' => '{"id":52,"nopeserta":"CFTG0030002","nama":"Adrian Chandikaa","slug":"adrian-chandikaa","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 20:26:48"}',
            ),
            123 => 
            array (
                'id' => 624,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":516}',
            ),
            124 => 
            array (
                'id' => 625,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":517}',
            ),
            125 => 
            array (
                'id' => 626,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":518}',
            ),
            126 => 
            array (
                'id' => 627,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":519}',
            ),
            127 => 
            array (
                'id' => 628,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":520}',
            ),
            128 => 
            array (
                'id' => 629,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif',
                'log_type' => 'edit',
                'data' => '{"id":52,"nopeserta":"CFTG00300021","nama":"Adrian Chandika","slug":"adrian-chandika","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 20:26:54"}',
            ),
            129 => 
            array (
                'id' => 630,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":521}',
            ),
            130 => 
            array (
                'id' => 631,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":522}',
            ),
            131 => 
            array (
                'id' => 632,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":523}',
            ),
            132 => 
            array (
                'id' => 633,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":524}',
            ),
            133 => 
            array (
                'id' => 634,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":525}',
            ),
            134 => 
            array (
                'id' => 635,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"1","nopeserta":"1","slug":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":102}',
            ),
            135 => 
            array (
                'id' => 636,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":526}',
            ),
            136 => 
            array (
                'id' => 637,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":527}',
            ),
            137 => 
            array (
                'id' => 638,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":528}',
            ),
            138 => 
            array (
                'id' => 639,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":529}',
            ),
            139 => 
            array (
                'id' => 640,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":530}',
            ),
            140 => 
            array (
                'id' => 641,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:33:16',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":102,"nopeserta":"1","nama":"1","slug":"1","import_id":null,"created_at":"2023-07-14 20:31:28","updated_at":"2023-07-14 20:31:28"}',
            ),
            141 => 
            array (
                'id' => 642,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:33:39',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":52,"nopeserta":"CFTG0030002","nama":"Adrian Chandika","slug":"adrian-chandika","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 20:26:59"}',
            ),
            142 => 
            array (
                'id' => 643,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:34:23',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":53,"nopeserta":"CFTG0030003","nama":"Andre Al Mahdi","slug":"andre-al-mahdi","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            143 => 
            array (
                'id' => 644,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:34:44',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":54,"nopeserta":"CFTG0030004","nama":"Angi Anggraeni","slug":"angi-anggraeni","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            144 => 
            array (
                'id' => 645,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:34:47',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":55,"nopeserta":"CFTG0030005","nama":"Arif Muwahhid Kholilulloh","slug":"arif-muwahhid-kholilulloh","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            145 => 
            array (
                'id' => 646,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:34:51',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":56,"nopeserta":"CFTG0030006","nama":"Ayuni Putri Utami","slug":"ayuni-putri-utami","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            146 => 
            array (
                'id' => 647,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:01',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":449,"parent_id":null,"title":"Alternatif","icon":"fas fa-map-marked-alt","route":"admin.alternatif","sequence":3,"active":1,"type":1,"created_at":"2023-07-01 18:16:35","updated_at":"2023-07-01 18:17:01"}',
            ),
            147 => 
            array (
                'id' => 648,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:01',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":449,"updated_at":"2023-07-14T13:35:01.000000Z","created_at":"2023-07-14T13:35:01.000000Z","id":350}',
            ),
            148 => 
            array (
                'id' => 649,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:05',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":450,"parent_id":null,"title":"Alternatif Nilai","icon":"fas fa-edit","route":"admin.alternatif.nilai","sequence":4,"active":1,"type":1,"created_at":"2023-07-01 18:17:59","updated_at":"2023-07-01 18:18:22"}',
            ),
            149 => 
            array (
                'id' => 650,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:05',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":450,"updated_at":"2023-07-14T13:35:05.000000Z","created_at":"2023-07-14T13:35:05.000000Z","id":351}',
            ),
            150 => 
            array (
                'id' => 651,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:11',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":"admin.menu.admin","sequence":16,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-07-01 23:02:01"}',
            ),
            151 => 
            array (
                'id' => 652,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:11',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":361,"updated_at":"2023-07-14T13:35:11.000000Z","created_at":"2023-07-14T13:35:11.000000Z","id":352}',
            ),
            152 => 
            array (
                'id' => 653,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:20',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":9,"active":1,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-07-01 23:02:01"}',
            ),
            153 => 
            array (
                'id' => 654,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:20',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":397,"updated_at":"2023-07-14T13:35:20.000000Z","created_at":"2023-07-14T13:35:20.000000Z","id":353}',
            ),
            154 => 
            array (
                'id' => 655,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:26',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":6,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-07-01 23:02:01"}',
            ),
            155 => 
            array (
                'id' => 656,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:26',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":411,"updated_at":"2023-07-14T13:35:26.000000Z","created_at":"2023-07-14T13:35:26.000000Z","id":354}',
            ),
            156 => 
            array (
                'id' => 657,
                'user_id' => 1,
                'log_date' => '2023-07-14 20:35:38',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":2,"name":"Yogi Setiawan","email":"yogis@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$U8mC5GglQoGnaCsa79.5l.psRfQmiKn1ciwIC2xM6GqOAst383idi","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":"2023-07-01 23:09:58","updated_at":"2023-07-01 23:09:58"}',
            ),
            157 => 
            array (
                'id' => 658,
                'user_id' => 1,
                'log_date' => '2023-07-14 21:27:23',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.222","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.79"}',
            ),
            158 => 
            array (
                'id' => 659,
                'user_id' => 1,
                'log_date' => '2023-07-14 21:27:50',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Super Admin","email":"superadmin@gmail.com","foto":"2023071418550373.png","username":null,"email_verified_at":null,"password":"$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"eCZEvZ0D4HfRmLneUdM6PJ7ncssSYiBG9CZZZImJZyXKqP7q50NlXJJ2fXeY","created_at":null,"updated_at":"2023-07-14 18:55:03"}',
            ),
            159 => 
            array (
                'id' => 660,
                'user_id' => 1,
                'log_date' => '2023-07-14 21:28:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.222","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.79"}',
            ),
            160 => 
            array (
                'id' => 661,
                'user_id' => 1,
                'log_date' => '2023-07-14 22:56:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"180.244.128.134","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.79"}',
            ),
            161 => 
            array (
                'id' => 662,
                'user_id' => 1,
                'log_date' => '2023-07-14 23:05:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Super Admin","email":"superadmin@gmail.com","foto":"2023071418550373.png","username":null,"email_verified_at":null,"password":"$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"b7SfoUCowCFcA4CL1fG8KKme80NBhx7lyN8W5lEEhGAqIqjTnkJOATwWPDGN","created_at":null,"updated_at":"2023-07-14 18:55:03"}',
            ),
            162 => 
            array (
                'id' => 663,
                'user_id' => 1,
                'log_date' => '2023-07-15 00:47:42',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Super Admin","email":"superadmin@gmail.com","active":"1","updated_at":"2023-07-14T17:47:42.000000Z","created_at":"2023-07-14T17:47:42.000000Z","id":2,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=S+A&color=7F9CF5&background=EBF4FF"}',
            ),
            163 => 
            array (
                'id' => 664,
                'user_id' => 1,
                'log_date' => '2023-07-15 00:47:52',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Farhan Aziz","email":"azizfarhan72@gmail.com","foto":"2023071423045849.png","username":null,"email_verified_at":null,"password":"$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"b7SfoUCowCFcA4CL1fG8KKme80NBhx7lyN8W5lEEhGAqIqjTnkJOATwWPDGN","created_at":null,"updated_at":"2023-07-14 23:05:05"}',
            ),
            164 => 
            array (
                'id' => 665,
                'user_id' => 1,
                'log_date' => '2023-07-15 00:48:00',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Farhan Aziz","email":"azizfarhan72@gmail.com","foto":"2023071423045849.png","username":null,"email_verified_at":null,"password":"$2y$10$GjjsqWoOsKZJrTNlVmBnwOn3xbU2yT\\/RTNLGKwyCkZMvM2Ml18hTi","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"b7SfoUCowCFcA4CL1fG8KKme80NBhx7lyN8W5lEEhGAqIqjTnkJOATwWPDGN","created_at":null,"updated_at":"2023-07-15 00:47:52"}',
            ),
            165 => 
            array (
                'id' => 666,
                'user_id' => 1,
                'log_date' => '2023-07-15 00:48:08',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"180.244.128.134","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.79"}',
            ),
            166 => 
            array (
                'id' => 667,
                'user_id' => 1,
                'log_date' => '2023-07-15 00:48:32',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Farhan Aziz","email":"azizfarhan72@gmail.com","foto":"2023071423045849.png","username":null,"email_verified_at":null,"password":"$2y$10$GjjsqWoOsKZJrTNlVmBnwOn3xbU2yT\\/RTNLGKwyCkZMvM2Ml18hTi","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"DlYh2PlMu8t0YwgsDRHnqlsJi99KHweFdZ1qtp18J1TThAaLaHxWny4ELQiT","created_at":null,"updated_at":"2023-07-15 00:47:52"}',
            ),
            167 => 
            array (
                'id' => 668,
                'user_id' => 1,
                'log_date' => '2023-07-17 21:41:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"36.79.169.243","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.82"}',
            ),
            168 => 
            array (
                'id' => 669,
                'user_id' => 1,
                'log_date' => '2023-07-17 21:52:38',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Bagas","email":"bagas@gmail.com","active":"1","updated_at":"2023-07-17T14:52:38.000000Z","created_at":"2023-07-17T14:52:38.000000Z","id":3,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=B&color=7F9CF5&background=EBF4FF"}',
            ),
            169 => 
            array (
                'id' => 670,
                'user_id' => 3,
                'log_date' => '2023-07-17 21:54:13',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.85.219","user_agent":"Mozilla\\/5.0 (Linux; Android 9; CPH2015) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.5735.196 Mobile Safari\\/537.36 OPR\\/76.2.4027.73374"}',
            ),
            170 => 
            array (
                'id' => 671,
                'user_id' => 1,
                'log_date' => '2023-07-18 02:46:56',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"36.79.169.243","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.82"}',
            ),
            171 => 
            array (
                'id' => 672,
                'user_id' => 1,
                'log_date' => '2023-07-18 02:47:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Farhan Aziz","email":"azizfarhan72@gmail.com","foto":"2023071423045849.png","username":null,"email_verified_at":null,"password":"$2y$10$GjjsqWoOsKZJrTNlVmBnwOn3xbU2yT\\/RTNLGKwyCkZMvM2Ml18hTi","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"31rWJcyVLkCCEjSibDagvNIvLq3mpDj3d8CeIuC3xYwuA7UZAHTKpSNQcHKe","created_at":null,"updated_at":"2023-07-15 00:47:52"}',
            ),
            172 => 
            array (
                'id' => 673,
                'user_id' => 1,
                'log_date' => '2023-07-18 02:47:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"36.79.169.243","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.82"}',
            ),
            173 => 
            array (
                'id' => 674,
                'user_id' => 1,
                'log_date' => '2023-07-18 02:54:02',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":"1","bobot":"35","nama":"Absensi","slug":"absensi","kode":"C1","created_at":"2023-07-14 18:52:53","updated_at":"2023-07-14 18:52:53"}',
            ),
            174 => 
            array (
                'id' => 675,
                'user_id' => 1,
                'log_date' => '2023-07-18 02:54:08',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"bobot":"35","nama":"Absensi","kode":"C1","slug":"absensi","updated_at":"2023-07-17T19:54:08.000000Z","created_at":"2023-07-17T19:54:08.000000Z","id":6}',
            ),
            175 => 
            array (
                'id' => 676,
                'user_id' => 2,
                'log_date' => '2023-07-18 02:58:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.205","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.82"}',
            ),
            176 => 
            array (
                'id' => 677,
                'user_id' => 2,
                'log_date' => '2023-08-15 11:25:08',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36 Edg\\/115.0.1901.203"}',
            ),
            177 => 
            array (
                'id' => 678,
                'user_id' => 2,
                'log_date' => '2024-07-30 21:21:09',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.admin.app.title","value":"Cempor Dispora","updated_at":"2024-07-30T14:21:09.000000Z","created_at":"2024-07-30T14:21:09.000000Z","id":1}',
            ),
            178 => 
            array (
                'id' => 679,
                'user_id' => 2,
                'log_date' => '2024-07-30 21:21:09',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.admin.app.copyright","value":"\\u00a9 2023 Handip Yusuf Kurniawan - 2113201027","updated_at":"2024-07-30T14:21:09.000000Z","created_at":"2024-07-30T14:21:09.000000Z","id":2}',
            ),
            179 => 
            array (
                'id' => 680,
                'user_id' => 2,
                'log_date' => '2024-07-30 21:21:09',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.admin.app.preloader","value":1,"updated_at":"2024-07-30T14:21:09.000000Z","created_at":"2024-07-30T14:21:09.000000Z","id":3}',
            ),
            180 => 
            array (
                'id' => 681,
                'user_id' => 2,
                'log_date' => '2024-07-30 21:21:11',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.admin.meta.author","value":"Handip Yusuf kurniawan","updated_at":"2024-07-30T14:21:11.000000Z","created_at":"2024-07-30T14:21:11.000000Z","id":4}',
            ),
            181 => 
            array (
                'id' => 682,
                'user_id' => 2,
                'log_date' => '2024-07-30 21:21:11',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.admin.meta.keyword","value":"Camp, Dispora, PIK, Pelatihan","updated_at":"2024-07-30T14:21:11.000000Z","created_at":"2024-07-30T14:21:11.000000Z","id":5}',
            ),
            182 => 
            array (
                'id' => 683,
                'user_id' => 2,
                'log_date' => '2024-07-30 21:21:11',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
            'data' => '{"key":"setting.admin.meta.description","value":"Cempor adalah Camp Enterpreneur Dispora, program unggulan Dispora Kota Bandung dibawah bidang PIK (Pengembangan Infrastruktur Kepemudaan) Dispora Kota Bandung.","updated_at":"2024-07-30T14:21:11.000000Z","created_at":"2024-07-30T14:21:11.000000Z","id":6}',
            ),
            183 => 
            array (
                'id' => 684,
                'user_id' => 2,
                'log_date' => '2024-07-30 21:22:27',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36 Edg\\/127.0.0.0"}',
            ),
            184 => 
            array (
                'id' => 685,
                'user_id' => 2,
                'log_date' => '2024-08-03 19:37:30',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36 Edg\\/127.0.0.0"}',
            ),
            185 => 
            array (
                'id' => 686,
                'user_id' => 2,
                'log_date' => '2024-08-03 19:42:48',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":430,"parent_id":null,"title":"Import","icon":"fas fa-upload","route":null,"sequence":7,"active":1,"type":1,"created_at":"2023-05-16 18:10:19","updated_at":"2023-07-01 23:02:01"}',
            ),
            186 => 
            array (
                'id' => 687,
                'user_id' => 2,
                'log_date' => '2024-08-03 19:42:48',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":430,"updated_at":"2024-08-03T12:42:48.000000Z","created_at":"2024-08-03T12:42:48.000000Z","id":355}',
            ),
            187 => 
            array (
                'id' => 688,
                'user_id' => 2,
                'log_date' => '2024-08-03 19:43:02',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Pengguna","icon":"fas fa-list","route":"admin.user","sequence":15,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-07-01 23:02:01"}',
            ),
            188 => 
            array (
                'id' => 689,
                'user_id' => 2,
                'log_date' => '2024-08-03 19:43:02',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":346,"updated_at":"2024-08-03T12:43:02.000000Z","created_at":"2024-08-03T12:43:02.000000Z","id":356}',
            ),
            189 => 
            array (
                'id' => 690,
                'user_id' => 2,
                'log_date' => '2024-08-03 19:43:11',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":17,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-07-01 23:02:01"}',
            ),
            190 => 
            array (
                'id' => 691,
                'user_id' => 2,
                'log_date' => '2024-08-03 19:43:11',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":373,"updated_at":"2024-08-03T12:43:11.000000Z","created_at":"2024-08-03T12:43:11.000000Z","id":357}',
            ),
            191 => 
            array (
                'id' => 692,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:27:27',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":430,"parent_id":null,"title":"Import","icon":"fas fa-upload","route":null,"sequence":7,"active":0,"type":1,"created_at":"2023-05-16 18:10:19","updated_at":"2024-08-03 19:42:48"}',
            ),
            192 => 
            array (
                'id' => 693,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:27:27',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":430,"updated_at":"2024-08-03T13:27:27.000000Z","created_at":"2024-08-03T13:27:27.000000Z","id":358}',
            ),
            193 => 
            array (
                'id' => 694,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:23',
                'table_name' => 'import_alternatif',
                'log_type' => 'delete',
                'data' => '{"id":2,"nama":"Data Testing","slug":"data-testing","file":"20230714074051-data-testing.xlsx","count":50,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:52"}',
            ),
            194 => 
            array (
                'id' => 695,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'import_alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Data Sidang","slug":"data-sidang","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":3}',
            ),
            195 => 
            array (
                'id' => 696,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030001","nama":"Adrian Chandika","import_id":3,"slug":"adrian-chandika","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":102}',
            ),
            196 => 
            array (
                'id' => 697,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":102,"kriteria_id":6,"nilai":"58","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":501}',
            ),
            197 => 
            array (
                'id' => 698,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":102,"kriteria_id":2,"nilai":"80","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":502}',
            ),
            198 => 
            array (
                'id' => 699,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":102,"kriteria_id":3,"nilai":"53","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":503}',
            ),
            199 => 
            array (
                'id' => 700,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":102,"kriteria_id":4,"nilai":"100","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":504}',
            ),
            200 => 
            array (
                'id' => 701,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":102,"kriteria_id":5,"nilai":"59","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":505}',
            ),
            201 => 
            array (
                'id' => 702,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030002","nama":"Andre Al Mahdi","import_id":3,"slug":"andre-al-mahdi","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":103}',
            ),
            202 => 
            array (
                'id' => 703,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":103,"kriteria_id":6,"nilai":"63","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":506}',
            ),
            203 => 
            array (
                'id' => 704,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":103,"kriteria_id":2,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":507}',
            ),
            204 => 
            array (
                'id' => 705,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":103,"kriteria_id":3,"nilai":"57","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":508}',
            ),
            205 => 
            array (
                'id' => 706,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":103,"kriteria_id":4,"nilai":"86","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":509}',
            ),
            206 => 
            array (
                'id' => 707,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":103,"kriteria_id":5,"nilai":"71","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":510}',
            ),
            207 => 
            array (
                'id' => 708,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030003","nama":"Angi Anggraeni","import_id":3,"slug":"angi-anggraeni","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":104}',
            ),
            208 => 
            array (
                'id' => 709,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":104,"kriteria_id":6,"nilai":"79","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":511}',
            ),
            209 => 
            array (
                'id' => 710,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":104,"kriteria_id":2,"nilai":"78","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":512}',
            ),
            210 => 
            array (
                'id' => 711,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":104,"kriteria_id":3,"nilai":"99","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":513}',
            ),
            211 => 
            array (
                'id' => 712,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":104,"kriteria_id":4,"nilai":"88","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":514}',
            ),
            212 => 
            array (
                'id' => 713,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":104,"kriteria_id":5,"nilai":"88","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":515}',
            ),
            213 => 
            array (
                'id' => 714,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030004","nama":"Arif Muwahhid Kholilulloh","import_id":3,"slug":"arif-muwahhid-kholilulloh","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":105}',
            ),
            214 => 
            array (
                'id' => 715,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":105,"kriteria_id":6,"nilai":"54","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":516}',
            ),
            215 => 
            array (
                'id' => 716,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":105,"kriteria_id":2,"nilai":"63","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":517}',
            ),
            216 => 
            array (
                'id' => 717,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":105,"kriteria_id":3,"nilai":"91","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":518}',
            ),
            217 => 
            array (
                'id' => 718,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":105,"kriteria_id":4,"nilai":"90","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":519}',
            ),
            218 => 
            array (
                'id' => 719,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":105,"kriteria_id":5,"nilai":"77","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":520}',
            ),
            219 => 
            array (
                'id' => 720,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030005","nama":"Ayuni Putri Utami","import_id":3,"slug":"ayuni-putri-utami","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":106}',
            ),
            220 => 
            array (
                'id' => 721,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":106,"kriteria_id":6,"nilai":"68","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":521}',
            ),
            221 => 
            array (
                'id' => 722,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":106,"kriteria_id":2,"nilai":"55","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":522}',
            ),
            222 => 
            array (
                'id' => 723,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":106,"kriteria_id":3,"nilai":"85","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":523}',
            ),
            223 => 
            array (
                'id' => 724,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":106,"kriteria_id":4,"nilai":"74","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":524}',
            ),
            224 => 
            array (
                'id' => 725,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":106,"kriteria_id":5,"nilai":"99","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":525}',
            ),
            225 => 
            array (
                'id' => 726,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030006","nama":"Barik Abdan Taqiyan","import_id":3,"slug":"barik-abdan-taqiyan","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":107}',
            ),
            226 => 
            array (
                'id' => 727,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":107,"kriteria_id":6,"nilai":"77","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":526}',
            ),
            227 => 
            array (
                'id' => 728,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":107,"kriteria_id":2,"nilai":"59","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":527}',
            ),
            228 => 
            array (
                'id' => 729,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":107,"kriteria_id":3,"nilai":"96","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":528}',
            ),
            229 => 
            array (
                'id' => 730,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":107,"kriteria_id":4,"nilai":"56","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":529}',
            ),
            230 => 
            array (
                'id' => 731,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":107,"kriteria_id":5,"nilai":"96","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":530}',
            ),
            231 => 
            array (
                'id' => 732,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030007","nama":"Bily Irawan","import_id":3,"slug":"bily-irawan","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":108}',
            ),
            232 => 
            array (
                'id' => 733,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":108,"kriteria_id":6,"nilai":"98","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":531}',
            ),
            233 => 
            array (
                'id' => 734,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":108,"kriteria_id":2,"nilai":"61","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":532}',
            ),
            234 => 
            array (
                'id' => 735,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":108,"kriteria_id":3,"nilai":"72","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":533}',
            ),
            235 => 
            array (
                'id' => 736,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":108,"kriteria_id":4,"nilai":"83","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":534}',
            ),
            236 => 
            array (
                'id' => 737,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":108,"kriteria_id":5,"nilai":"95","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":535}',
            ),
            237 => 
            array (
                'id' => 738,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030009","nama":"Chenley Fasawwa","import_id":3,"slug":"chenley-fasawwa","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":109}',
            ),
            238 => 
            array (
                'id' => 739,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":109,"kriteria_id":6,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":536}',
            ),
            239 => 
            array (
                'id' => 740,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":109,"kriteria_id":2,"nilai":"54","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":537}',
            ),
            240 => 
            array (
                'id' => 741,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":109,"kriteria_id":3,"nilai":"87","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":538}',
            ),
            241 => 
            array (
                'id' => 742,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":109,"kriteria_id":4,"nilai":"74","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":539}',
            ),
            242 => 
            array (
                'id' => 743,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":109,"kriteria_id":5,"nilai":"61","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":540}',
            ),
            243 => 
            array (
                'id' => 744,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030010","nama":"Deni Armansyah","import_id":3,"slug":"deni-armansyah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":110}',
            ),
            244 => 
            array (
                'id' => 745,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":110,"kriteria_id":6,"nilai":"64","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":541}',
            ),
            245 => 
            array (
                'id' => 746,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":110,"kriteria_id":2,"nilai":"87","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":542}',
            ),
            246 => 
            array (
                'id' => 747,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":110,"kriteria_id":3,"nilai":"99","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":543}',
            ),
            247 => 
            array (
                'id' => 748,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":110,"kriteria_id":4,"nilai":"81","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":544}',
            ),
            248 => 
            array (
                'id' => 749,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":110,"kriteria_id":5,"nilai":"50","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":545}',
            ),
            249 => 
            array (
                'id' => 750,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030011","nama":"Dhiya&#039; Fajri Tuhfahillah","import_id":3,"slug":"dhiya-039-fajri-tuhfahillah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":111}',
            ),
            250 => 
            array (
                'id' => 751,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":111,"kriteria_id":6,"nilai":"71","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":546}',
            ),
            251 => 
            array (
                'id' => 752,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":111,"kriteria_id":2,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":547}',
            ),
            252 => 
            array (
                'id' => 753,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":111,"kriteria_id":3,"nilai":"94","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":548}',
            ),
            253 => 
            array (
                'id' => 754,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":111,"kriteria_id":4,"nilai":"100","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":549}',
            ),
            254 => 
            array (
                'id' => 755,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":111,"kriteria_id":5,"nilai":"65","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":550}',
            ),
            255 => 
            array (
                'id' => 756,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030012","nama":"Dimas Maulana","import_id":3,"slug":"dimas-maulana","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":112}',
            ),
            256 => 
            array (
                'id' => 757,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":112,"kriteria_id":6,"nilai":"91","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":551}',
            ),
            257 => 
            array (
                'id' => 758,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":112,"kriteria_id":2,"nilai":"53","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":552}',
            ),
            258 => 
            array (
                'id' => 759,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":112,"kriteria_id":3,"nilai":"82","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":553}',
            ),
            259 => 
            array (
                'id' => 760,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":112,"kriteria_id":4,"nilai":"54","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":554}',
            ),
            260 => 
            array (
                'id' => 761,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":112,"kriteria_id":5,"nilai":"78","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":555}',
            ),
            261 => 
            array (
                'id' => 762,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030014","nama":"Fiki Hanggara","import_id":3,"slug":"fiki-hanggara","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":113}',
            ),
            262 => 
            array (
                'id' => 763,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":113,"kriteria_id":6,"nilai":"56","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":556}',
            ),
            263 => 
            array (
                'id' => 764,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":113,"kriteria_id":2,"nilai":"51","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":557}',
            ),
            264 => 
            array (
                'id' => 765,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":113,"kriteria_id":3,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":558}',
            ),
            265 => 
            array (
                'id' => 766,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":113,"kriteria_id":4,"nilai":"53","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":559}',
            ),
            266 => 
            array (
                'id' => 767,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":113,"kriteria_id":5,"nilai":"97","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":560}',
            ),
            267 => 
            array (
                'id' => 768,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030015","nama":"Fraya Fanisa Sugita","import_id":3,"slug":"fraya-fanisa-sugita","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":114}',
            ),
            268 => 
            array (
                'id' => 769,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":114,"kriteria_id":6,"nilai":"86","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":561}',
            ),
            269 => 
            array (
                'id' => 770,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":114,"kriteria_id":2,"nilai":"75","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":562}',
            ),
            270 => 
            array (
                'id' => 771,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":114,"kriteria_id":3,"nilai":"92","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":563}',
            ),
            271 => 
            array (
                'id' => 772,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":114,"kriteria_id":4,"nilai":"94","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":564}',
            ),
            272 => 
            array (
                'id' => 773,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":114,"kriteria_id":5,"nilai":"66","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":565}',
            ),
            273 => 
            array (
                'id' => 774,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030016","nama":"Fulgentius Sendy Nur Ridwan","import_id":3,"slug":"fulgentius-sendy-nur-ridwan","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":115}',
            ),
            274 => 
            array (
                'id' => 775,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":115,"kriteria_id":6,"nilai":"73","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":566}',
            ),
            275 => 
            array (
                'id' => 776,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":115,"kriteria_id":2,"nilai":"59","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":567}',
            ),
            276 => 
            array (
                'id' => 777,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":115,"kriteria_id":3,"nilai":"69","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":568}',
            ),
            277 => 
            array (
                'id' => 778,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":115,"kriteria_id":4,"nilai":"50","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":569}',
            ),
            278 => 
            array (
                'id' => 779,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":115,"kriteria_id":5,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":570}',
            ),
            279 => 
            array (
                'id' => 780,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030017","nama":"Guntur Nur Afandi","import_id":3,"slug":"guntur-nur-afandi","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":116}',
            ),
            280 => 
            array (
                'id' => 781,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":116,"kriteria_id":6,"nilai":"97","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":571}',
            ),
            281 => 
            array (
                'id' => 782,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":116,"kriteria_id":2,"nilai":"81","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":572}',
            ),
            282 => 
            array (
                'id' => 783,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":116,"kriteria_id":3,"nilai":"60","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":573}',
            ),
            283 => 
            array (
                'id' => 784,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":116,"kriteria_id":4,"nilai":"51","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":574}',
            ),
            284 => 
            array (
                'id' => 785,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":116,"kriteria_id":5,"nilai":"74","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":575}',
            ),
            285 => 
            array (
                'id' => 786,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFMP0040088","nama":"Halimatus&#039;sadiyah","import_id":3,"slug":"halimatus-039-sadiyah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":117}',
            ),
            286 => 
            array (
                'id' => 787,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":117,"kriteria_id":6,"nilai":"63","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":576}',
            ),
            287 => 
            array (
                'id' => 788,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":117,"kriteria_id":2,"nilai":"89","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":577}',
            ),
            288 => 
            array (
                'id' => 789,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":117,"kriteria_id":3,"nilai":"53","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":578}',
            ),
            289 => 
            array (
                'id' => 790,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":117,"kriteria_id":4,"nilai":"60","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":579}',
            ),
            290 => 
            array (
                'id' => 791,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":117,"kriteria_id":5,"nilai":"80","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":580}',
            ),
            291 => 
            array (
                'id' => 792,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030019","nama":"Harry Saravi Sehati Siregar","import_id":3,"slug":"harry-saravi-sehati-siregar","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":118}',
            ),
            292 => 
            array (
                'id' => 793,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":118,"kriteria_id":6,"nilai":"91","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":581}',
            ),
            293 => 
            array (
                'id' => 794,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":118,"kriteria_id":2,"nilai":"83","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":582}',
            ),
            294 => 
            array (
                'id' => 795,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":118,"kriteria_id":3,"nilai":"68","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":583}',
            ),
            295 => 
            array (
                'id' => 796,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":118,"kriteria_id":4,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":584}',
            ),
            296 => 
            array (
                'id' => 797,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":118,"kriteria_id":5,"nilai":"69","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":585}',
            ),
            297 => 
            array (
                'id' => 798,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030020","nama":"Intan Satia Hotimah","import_id":3,"slug":"intan-satia-hotimah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":119}',
            ),
            298 => 
            array (
                'id' => 799,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":119,"kriteria_id":6,"nilai":"100","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":586}',
            ),
            299 => 
            array (
                'id' => 800,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":119,"kriteria_id":2,"nilai":"89","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":587}',
            ),
            300 => 
            array (
                'id' => 801,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":119,"kriteria_id":3,"nilai":"91","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":588}',
            ),
            301 => 
            array (
                'id' => 802,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":119,"kriteria_id":4,"nilai":"96","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":589}',
            ),
            302 => 
            array (
                'id' => 803,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":119,"kriteria_id":5,"nilai":"58","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":590}',
            ),
            303 => 
            array (
                'id' => 804,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030021","nama":"Kiki Rahmatuloh","import_id":3,"slug":"kiki-rahmatuloh","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":120}',
            ),
            304 => 
            array (
                'id' => 805,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":120,"kriteria_id":6,"nilai":"83","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":591}',
            ),
            305 => 
            array (
                'id' => 806,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":120,"kriteria_id":2,"nilai":"99","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":592}',
            ),
            306 => 
            array (
                'id' => 807,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":120,"kriteria_id":3,"nilai":"57","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":593}',
            ),
            307 => 
            array (
                'id' => 808,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":120,"kriteria_id":4,"nilai":"71","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":594}',
            ),
            308 => 
            array (
                'id' => 809,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":120,"kriteria_id":5,"nilai":"86","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":595}',
            ),
            309 => 
            array (
                'id' => 810,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CPBR0040166","nama":"Kristi Rahmawati","import_id":3,"slug":"kristi-rahmawati","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":121}',
            ),
            310 => 
            array (
                'id' => 811,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":121,"kriteria_id":6,"nilai":"98","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":596}',
            ),
            311 => 
            array (
                'id' => 812,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":121,"kriteria_id":2,"nilai":"70","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":597}',
            ),
            312 => 
            array (
                'id' => 813,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":121,"kriteria_id":3,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":598}',
            ),
            313 => 
            array (
                'id' => 814,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":121,"kriteria_id":4,"nilai":"72","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":599}',
            ),
            314 => 
            array (
                'id' => 815,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":121,"kriteria_id":5,"nilai":"65","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":600}',
            ),
            315 => 
            array (
                'id' => 816,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030023","nama":"Laudi Kayluna Maisha","import_id":3,"slug":"laudi-kayluna-maisha","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":122}',
            ),
            316 => 
            array (
                'id' => 817,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":122,"kriteria_id":6,"nilai":"83","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":601}',
            ),
            317 => 
            array (
                'id' => 818,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":122,"kriteria_id":2,"nilai":"70","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":602}',
            ),
            318 => 
            array (
                'id' => 819,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":122,"kriteria_id":3,"nilai":"89","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":603}',
            ),
            319 => 
            array (
                'id' => 820,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":122,"kriteria_id":4,"nilai":"90","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":604}',
            ),
            320 => 
            array (
                'id' => 821,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":122,"kriteria_id":5,"nilai":"59","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":605}',
            ),
            321 => 
            array (
                'id' => 822,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030024","nama":"M Iqbal Permana","import_id":3,"slug":"m-iqbal-permana","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":123}',
            ),
            322 => 
            array (
                'id' => 823,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":123,"kriteria_id":6,"nilai":"80","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":606}',
            ),
            323 => 
            array (
                'id' => 824,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":123,"kriteria_id":2,"nilai":"100","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":607}',
            ),
            324 => 
            array (
                'id' => 825,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":123,"kriteria_id":3,"nilai":"76","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":608}',
            ),
            325 => 
            array (
                'id' => 826,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":123,"kriteria_id":4,"nilai":"55","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":609}',
            ),
            326 => 
            array (
                'id' => 827,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":123,"kriteria_id":5,"nilai":"51","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":610}',
            ),
            327 => 
            array (
                'id' => 828,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030025","nama":"Mardhita Amilatu Rahmawati","import_id":3,"slug":"mardhita-amilatu-rahmawati","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":124}',
            ),
            328 => 
            array (
                'id' => 829,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":124,"kriteria_id":6,"nilai":"84","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":611}',
            ),
            329 => 
            array (
                'id' => 830,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":124,"kriteria_id":2,"nilai":"98","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":612}',
            ),
            330 => 
            array (
                'id' => 831,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":124,"kriteria_id":3,"nilai":"63","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":613}',
            ),
            331 => 
            array (
                'id' => 832,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":124,"kriteria_id":4,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":614}',
            ),
            332 => 
            array (
                'id' => 833,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":124,"kriteria_id":5,"nilai":"79","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":615}',
            ),
            333 => 
            array (
                'id' => 834,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030027","nama":"Miko Alistair Davian","import_id":3,"slug":"miko-alistair-davian","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":125}',
            ),
            334 => 
            array (
                'id' => 835,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":125,"kriteria_id":6,"nilai":"83","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":616}',
            ),
            335 => 
            array (
                'id' => 836,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":125,"kriteria_id":2,"nilai":"68","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":617}',
            ),
            336 => 
            array (
                'id' => 837,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":125,"kriteria_id":3,"nilai":"96","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":618}',
            ),
            337 => 
            array (
                'id' => 838,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":125,"kriteria_id":4,"nilai":"71","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":619}',
            ),
            338 => 
            array (
                'id' => 839,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":125,"kriteria_id":5,"nilai":"99","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":620}',
            ),
            339 => 
            array (
                'id' => 840,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030029","nama":"Muhamad Dhaffa Ardisa Pratama","import_id":3,"slug":"muhamad-dhaffa-ardisa-pratama","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":126}',
            ),
            340 => 
            array (
                'id' => 841,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":126,"kriteria_id":6,"nilai":"83","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":621}',
            ),
            341 => 
            array (
                'id' => 842,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":126,"kriteria_id":2,"nilai":"51","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":622}',
            ),
            342 => 
            array (
                'id' => 843,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":126,"kriteria_id":3,"nilai":"70","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":623}',
            ),
            343 => 
            array (
                'id' => 844,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":126,"kriteria_id":4,"nilai":"61","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":624}',
            ),
            344 => 
            array (
                'id' => 845,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":126,"kriteria_id":5,"nilai":"95","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":625}',
            ),
            345 => 
            array (
                'id' => 846,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030030","nama":"Muhamad Fadil Abdilah","import_id":3,"slug":"muhamad-fadil-abdilah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":127}',
            ),
            346 => 
            array (
                'id' => 847,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":127,"kriteria_id":6,"nilai":"94","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":626}',
            ),
            347 => 
            array (
                'id' => 848,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":127,"kriteria_id":2,"nilai":"76","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":627}',
            ),
            348 => 
            array (
                'id' => 849,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":127,"kriteria_id":3,"nilai":"51","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":628}',
            ),
            349 => 
            array (
                'id' => 850,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":127,"kriteria_id":4,"nilai":"73","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":629}',
            ),
            350 => 
            array (
                'id' => 851,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":127,"kriteria_id":5,"nilai":"84","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":630}',
            ),
            351 => 
            array (
                'id' => 852,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CKKR0030133","nama":"Muhamad Syaeful Siddiq","import_id":3,"slug":"muhamad-syaeful-siddiq","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":128}',
            ),
            352 => 
            array (
                'id' => 853,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":128,"kriteria_id":6,"nilai":"76","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":631}',
            ),
            353 => 
            array (
                'id' => 854,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":128,"kriteria_id":2,"nilai":"80","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":632}',
            ),
            354 => 
            array (
                'id' => 855,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":128,"kriteria_id":3,"nilai":"61","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":633}',
            ),
            355 => 
            array (
                'id' => 856,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":128,"kriteria_id":4,"nilai":"54","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":634}',
            ),
            356 => 
            array (
                'id' => 857,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":128,"kriteria_id":5,"nilai":"99","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":635}',
            ),
            357 => 
            array (
                'id' => 858,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030032","nama":"Muhammad Azriel Iriandica Pratama","import_id":3,"slug":"muhammad-azriel-iriandica-pratama","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":129}',
            ),
            358 => 
            array (
                'id' => 859,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":129,"kriteria_id":6,"nilai":"75","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":636}',
            ),
            359 => 
            array (
                'id' => 860,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":129,"kriteria_id":2,"nilai":"67","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":637}',
            ),
            360 => 
            array (
                'id' => 861,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":129,"kriteria_id":3,"nilai":"74","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":638}',
            ),
            361 => 
            array (
                'id' => 862,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":129,"kriteria_id":4,"nilai":"85","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":639}',
            ),
            362 => 
            array (
                'id' => 863,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":129,"kriteria_id":5,"nilai":"59","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":640}',
            ),
            363 => 
            array (
                'id' => 864,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030033","nama":"Muhammad Dzakhwan Azizan","import_id":3,"slug":"muhammad-dzakhwan-azizan","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":130}',
            ),
            364 => 
            array (
                'id' => 865,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":130,"kriteria_id":6,"nilai":"86","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":641}',
            ),
            365 => 
            array (
                'id' => 866,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":130,"kriteria_id":2,"nilai":"50","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":642}',
            ),
            366 => 
            array (
                'id' => 867,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":130,"kriteria_id":3,"nilai":"97","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":643}',
            ),
            367 => 
            array (
                'id' => 868,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":130,"kriteria_id":4,"nilai":"78","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":644}',
            ),
            368 => 
            array (
                'id' => 869,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":130,"kriteria_id":5,"nilai":"60","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":645}',
            ),
            369 => 
            array (
                'id' => 870,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030034","nama":"Muhammad Fahrurrozzi Abiyasa","import_id":3,"slug":"muhammad-fahrurrozzi-abiyasa","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":131}',
            ),
            370 => 
            array (
                'id' => 871,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":131,"kriteria_id":6,"nilai":"75","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":646}',
            ),
            371 => 
            array (
                'id' => 872,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":131,"kriteria_id":2,"nilai":"50","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":647}',
            ),
            372 => 
            array (
                'id' => 873,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":131,"kriteria_id":3,"nilai":"94","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":648}',
            ),
            373 => 
            array (
                'id' => 874,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":131,"kriteria_id":4,"nilai":"98","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":649}',
            ),
            374 => 
            array (
                'id' => 875,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":131,"kriteria_id":5,"nilai":"100","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":650}',
            ),
            375 => 
            array (
                'id' => 876,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CKKR0030257","nama":"Muhammad Rhamdhan","import_id":3,"slug":"muhammad-rhamdhan","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":132}',
            ),
            376 => 
            array (
                'id' => 877,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":132,"kriteria_id":6,"nilai":"92","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":651}',
            ),
            377 => 
            array (
                'id' => 878,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":132,"kriteria_id":2,"nilai":"88","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":652}',
            ),
            378 => 
            array (
                'id' => 879,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":132,"kriteria_id":3,"nilai":"80","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":653}',
            ),
            379 => 
            array (
                'id' => 880,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":132,"kriteria_id":4,"nilai":"55","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":654}',
            ),
            380 => 
            array (
                'id' => 881,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":132,"kriteria_id":5,"nilai":"83","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":655}',
            ),
            381 => 
            array (
                'id' => 882,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030036","nama":"Naba Syifaul Qolbi Safrudin","import_id":3,"slug":"naba-syifaul-qolbi-safrudin","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":133}',
            ),
            382 => 
            array (
                'id' => 883,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":133,"kriteria_id":6,"nilai":"79","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":656}',
            ),
            383 => 
            array (
                'id' => 884,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":133,"kriteria_id":2,"nilai":"63","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":657}',
            ),
            384 => 
            array (
                'id' => 885,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":133,"kriteria_id":3,"nilai":"65","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":658}',
            ),
            385 => 
            array (
                'id' => 886,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":133,"kriteria_id":4,"nilai":"96","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":659}',
            ),
            386 => 
            array (
                'id' => 887,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":133,"kriteria_id":5,"nilai":"71","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":660}',
            ),
            387 => 
            array (
                'id' => 888,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030037","nama":"Nawwaroh Ardiyah","import_id":3,"slug":"nawwaroh-ardiyah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":134}',
            ),
            388 => 
            array (
                'id' => 889,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":134,"kriteria_id":6,"nilai":"84","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":661}',
            ),
            389 => 
            array (
                'id' => 890,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":134,"kriteria_id":2,"nilai":"97","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":662}',
            ),
            390 => 
            array (
                'id' => 891,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":134,"kriteria_id":3,"nilai":"70","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":663}',
            ),
            391 => 
            array (
                'id' => 892,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":134,"kriteria_id":4,"nilai":"86","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":664}',
            ),
            392 => 
            array (
                'id' => 893,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":134,"kriteria_id":5,"nilai":"77","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":665}',
            ),
            393 => 
            array (
                'id' => 894,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030038","nama":"Nindi Trisni Noer Solihat","import_id":3,"slug":"nindi-trisni-noer-solihat","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":135}',
            ),
            394 => 
            array (
                'id' => 895,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":135,"kriteria_id":6,"nilai":"64","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":666}',
            ),
            395 => 
            array (
                'id' => 896,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":135,"kriteria_id":2,"nilai":"65","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":667}',
            ),
            396 => 
            array (
                'id' => 897,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":135,"kriteria_id":3,"nilai":"65","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":668}',
            ),
            397 => 
            array (
                'id' => 898,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":135,"kriteria_id":4,"nilai":"67","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":669}',
            ),
            398 => 
            array (
                'id' => 899,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":135,"kriteria_id":5,"nilai":"81","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":670}',
            ),
            399 => 
            array (
                'id' => 900,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030039","nama":"Oktavianus Aggi Nugroho","import_id":3,"slug":"oktavianus-aggi-nugroho","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":136}',
            ),
            400 => 
            array (
                'id' => 901,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":136,"kriteria_id":6,"nilai":"82","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":671}',
            ),
            401 => 
            array (
                'id' => 902,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":136,"kriteria_id":2,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":672}',
            ),
            402 => 
            array (
                'id' => 903,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":136,"kriteria_id":3,"nilai":"95","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":673}',
            ),
            403 => 
            array (
                'id' => 904,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":136,"kriteria_id":4,"nilai":"50","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":674}',
            ),
            404 => 
            array (
                'id' => 905,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":136,"kriteria_id":5,"nilai":"65","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":675}',
            ),
            405 => 
            array (
                'id' => 906,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030040","nama":"Pramada Hadha Mahardika","import_id":3,"slug":"pramada-hadha-mahardika","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":137}',
            ),
            406 => 
            array (
                'id' => 907,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":137,"kriteria_id":6,"nilai":"54","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":676}',
            ),
            407 => 
            array (
                'id' => 908,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":137,"kriteria_id":2,"nilai":"94","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":677}',
            ),
            408 => 
            array (
                'id' => 909,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":137,"kriteria_id":3,"nilai":"51","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":678}',
            ),
            409 => 
            array (
                'id' => 910,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":137,"kriteria_id":4,"nilai":"58","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":679}',
            ),
            410 => 
            array (
                'id' => 911,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":137,"kriteria_id":5,"nilai":"93","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":680}',
            ),
            411 => 
            array (
                'id' => 912,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CPBR0030064","nama":"Raafi Ramadhan","import_id":3,"slug":"raafi-ramadhan","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":138}',
            ),
            412 => 
            array (
                'id' => 913,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":138,"kriteria_id":6,"nilai":"84","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":681}',
            ),
            413 => 
            array (
                'id' => 914,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":138,"kriteria_id":2,"nilai":"74","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":682}',
            ),
            414 => 
            array (
                'id' => 915,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":138,"kriteria_id":3,"nilai":"73","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":683}',
            ),
            415 => 
            array (
                'id' => 916,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":138,"kriteria_id":4,"nilai":"80","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":684}',
            ),
            416 => 
            array (
                'id' => 917,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":138,"kriteria_id":5,"nilai":"78","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":685}',
            ),
            417 => 
            array (
                'id' => 918,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030042","nama":"Rachmat Hidayatullah","import_id":3,"slug":"rachmat-hidayatullah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":139}',
            ),
            418 => 
            array (
                'id' => 919,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":139,"kriteria_id":6,"nilai":"100","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":686}',
            ),
            419 => 
            array (
                'id' => 920,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":139,"kriteria_id":2,"nilai":"59","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":687}',
            ),
            420 => 
            array (
                'id' => 921,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":139,"kriteria_id":3,"nilai":"78","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":688}',
            ),
            421 => 
            array (
                'id' => 922,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":139,"kriteria_id":4,"nilai":"86","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":689}',
            ),
            422 => 
            array (
                'id' => 923,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":139,"kriteria_id":5,"nilai":"96","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":690}',
            ),
            423 => 
            array (
                'id' => 924,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030043","nama":"Raisa Hasmalita","import_id":3,"slug":"raisa-hasmalita","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":140}',
            ),
            424 => 
            array (
                'id' => 925,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":140,"kriteria_id":6,"nilai":"52","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":691}',
            ),
            425 => 
            array (
                'id' => 926,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":140,"kriteria_id":2,"nilai":"50","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":692}',
            ),
            426 => 
            array (
                'id' => 927,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":140,"kriteria_id":3,"nilai":"75","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":693}',
            ),
            427 => 
            array (
                'id' => 928,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":140,"kriteria_id":4,"nilai":"76","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":694}',
            ),
            428 => 
            array (
                'id' => 929,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":140,"kriteria_id":5,"nilai":"84","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":695}',
            ),
            429 => 
            array (
                'id' => 930,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CKKR0030082","nama":"Raka Rahmat Gumelar","import_id":3,"slug":"raka-rahmat-gumelar","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":141}',
            ),
            430 => 
            array (
                'id' => 931,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":141,"kriteria_id":6,"nilai":"51","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":696}',
            ),
            431 => 
            array (
                'id' => 932,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":141,"kriteria_id":2,"nilai":"66","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":697}',
            ),
            432 => 
            array (
                'id' => 933,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":141,"kriteria_id":3,"nilai":"85","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":698}',
            ),
            433 => 
            array (
                'id' => 934,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":141,"kriteria_id":4,"nilai":"77","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":699}',
            ),
            434 => 
            array (
                'id' => 935,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":141,"kriteria_id":5,"nilai":"54","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":700}',
            ),
            435 => 
            array (
                'id' => 936,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030045","nama":"Restu Ramania","import_id":3,"slug":"restu-ramania","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":142}',
            ),
            436 => 
            array (
                'id' => 937,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":142,"kriteria_id":6,"nilai":"85","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":701}',
            ),
            437 => 
            array (
                'id' => 938,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":142,"kriteria_id":2,"nilai":"80","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":702}',
            ),
            438 => 
            array (
                'id' => 939,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":142,"kriteria_id":3,"nilai":"84","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":703}',
            ),
            439 => 
            array (
                'id' => 940,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":142,"kriteria_id":4,"nilai":"94","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":704}',
            ),
            440 => 
            array (
                'id' => 941,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":142,"kriteria_id":5,"nilai":"71","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":705}',
            ),
            441 => 
            array (
                'id' => 942,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030046","nama":"Rizky Doni Nurdiansyah","import_id":3,"slug":"rizky-doni-nurdiansyah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":143}',
            ),
            442 => 
            array (
                'id' => 943,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":143,"kriteria_id":6,"nilai":"56","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":706}',
            ),
            443 => 
            array (
                'id' => 944,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":143,"kriteria_id":2,"nilai":"59","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":707}',
            ),
            444 => 
            array (
                'id' => 945,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":143,"kriteria_id":3,"nilai":"52","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":708}',
            ),
            445 => 
            array (
                'id' => 946,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":143,"kriteria_id":4,"nilai":"95","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":709}',
            ),
            446 => 
            array (
                'id' => 947,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":143,"kriteria_id":5,"nilai":"74","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":710}',
            ),
            447 => 
            array (
                'id' => 948,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030047","nama":"Tito Nugi Syaputra","import_id":3,"slug":"tito-nugi-syaputra","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":144}',
            ),
            448 => 
            array (
                'id' => 949,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":144,"kriteria_id":6,"nilai":"69","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":711}',
            ),
            449 => 
            array (
                'id' => 950,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":144,"kriteria_id":2,"nilai":"50","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":712}',
            ),
            450 => 
            array (
                'id' => 951,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":144,"kriteria_id":3,"nilai":"69","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":713}',
            ),
            451 => 
            array (
                'id' => 952,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":144,"kriteria_id":4,"nilai":"86","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":714}',
            ),
            452 => 
            array (
                'id' => 953,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":144,"kriteria_id":5,"nilai":"99","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":715}',
            ),
            453 => 
            array (
                'id' => 954,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030048","nama":"Vinka Priliani Rianaputri","import_id":3,"slug":"vinka-priliani-rianaputri","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":145}',
            ),
            454 => 
            array (
                'id' => 955,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":145,"kriteria_id":6,"nilai":"67","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":716}',
            ),
            455 => 
            array (
                'id' => 956,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":145,"kriteria_id":2,"nilai":"96","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":717}',
            ),
            456 => 
            array (
                'id' => 957,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":145,"kriteria_id":3,"nilai":"97","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":718}',
            ),
            457 => 
            array (
                'id' => 958,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":145,"kriteria_id":4,"nilai":"90","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":719}',
            ),
            458 => 
            array (
                'id' => 959,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":145,"kriteria_id":5,"nilai":"88","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":720}',
            ),
            459 => 
            array (
                'id' => 960,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CBRT0040315","nama":"Zena Jasmine Ghaissany Nanlohy","import_id":3,"slug":"zena-jasmine-ghaissany-nanlohy","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":146}',
            ),
            460 => 
            array (
                'id' => 961,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":146,"kriteria_id":6,"nilai":"93","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":721}',
            ),
            461 => 
            array (
                'id' => 962,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":146,"kriteria_id":2,"nilai":"60","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":722}',
            ),
            462 => 
            array (
                'id' => 963,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":146,"kriteria_id":3,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":723}',
            ),
            463 => 
            array (
                'id' => 964,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":146,"kriteria_id":4,"nilai":"84","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":724}',
            ),
            464 => 
            array (
                'id' => 965,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":146,"kriteria_id":5,"nilai":"50","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":725}',
            ),
            465 => 
            array (
                'id' => 966,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030124","nama":"Handip Yusuf Kurniawan","import_id":3,"slug":"handip-yusuf-kurniawan","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":147}',
            ),
            466 => 
            array (
                'id' => 967,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":147,"kriteria_id":6,"nilai":"79","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":726}',
            ),
            467 => 
            array (
                'id' => 968,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":147,"kriteria_id":2,"nilai":"69","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":727}',
            ),
            468 => 
            array (
                'id' => 969,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":147,"kriteria_id":3,"nilai":"98","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":728}',
            ),
            469 => 
            array (
                'id' => 970,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":147,"kriteria_id":4,"nilai":"100","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":729}',
            ),
            470 => 
            array (
                'id' => 971,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":147,"kriteria_id":5,"nilai":"66","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":730}',
            ),
            471 => 
            array (
                'id' => 972,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030260","nama":"Sri Setiawati","import_id":3,"slug":"sri-setiawati","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":148}',
            ),
            472 => 
            array (
                'id' => 973,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":148,"kriteria_id":6,"nilai":"74","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":731}',
            ),
            473 => 
            array (
                'id' => 974,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":148,"kriteria_id":2,"nilai":"66","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":732}',
            ),
            474 => 
            array (
                'id' => 975,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":148,"kriteria_id":3,"nilai":"85","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":733}',
            ),
            475 => 
            array (
                'id' => 976,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":148,"kriteria_id":4,"nilai":"54","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":734}',
            ),
            476 => 
            array (
                'id' => 977,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":148,"kriteria_id":5,"nilai":"87","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":735}',
            ),
            477 => 
            array (
                'id' => 978,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030216","nama":"Muhammad Khadafi Jiro F","import_id":3,"slug":"muhammad-khadafi-jiro-f","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":149}',
            ),
            478 => 
            array (
                'id' => 979,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":149,"kriteria_id":6,"nilai":"85","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":736}',
            ),
            479 => 
            array (
                'id' => 980,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":149,"kriteria_id":2,"nilai":"55","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":737}',
            ),
            480 => 
            array (
                'id' => 981,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":149,"kriteria_id":3,"nilai":"63","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":738}',
            ),
            481 => 
            array (
                'id' => 982,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":149,"kriteria_id":4,"nilai":"60","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":739}',
            ),
            482 => 
            array (
                'id' => 983,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":149,"kriteria_id":5,"nilai":"95","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":740}',
            ),
            483 => 
            array (
                'id' => 984,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030211","nama":"Naufal Faza Dzulkenzi","import_id":3,"slug":"naufal-faza-dzulkenzi","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":150}',
            ),
            484 => 
            array (
                'id' => 985,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":150,"kriteria_id":6,"nilai":"94","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":741}',
            ),
            485 => 
            array (
                'id' => 986,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":150,"kriteria_id":2,"nilai":"70","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":742}',
            ),
            486 => 
            array (
                'id' => 987,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":150,"kriteria_id":3,"nilai":"61","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":743}',
            ),
            487 => 
            array (
                'id' => 988,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":150,"kriteria_id":4,"nilai":"52","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":744}',
            ),
            488 => 
            array (
                'id' => 989,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":150,"kriteria_id":5,"nilai":"82","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":745}',
            ),
            489 => 
            array (
                'id' => 990,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030176","nama":"Zabihullah Achmad Afghiansyah","import_id":3,"slug":"zabihullah-achmad-afghiansyah","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":151}',
            ),
            490 => 
            array (
                'id' => 991,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":151,"kriteria_id":6,"nilai":"82","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":746}',
            ),
            491 => 
            array (
                'id' => 992,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":151,"kriteria_id":2,"nilai":"69","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":747}',
            ),
            492 => 
            array (
                'id' => 993,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":151,"kriteria_id":3,"nilai":"100","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":748}',
            ),
            493 => 
            array (
                'id' => 994,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":151,"kriteria_id":4,"nilai":"62","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":749}',
            ),
            494 => 
            array (
                'id' => 995,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":151,"kriteria_id":5,"nilai":"51","updated_at":"2024-08-03T13:33:44.000000Z","created_at":"2024-08-03T13:33:44.000000Z","id":750}',
            ),
            495 => 
            array (
                'id' => 996,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:33:44',
                'table_name' => 'import_alternatif',
                'log_type' => 'edit',
                'data' => '{"nama":"Data Sidang","slug":"data-sidang","updated_at":"2024-08-03 20:33:44","created_at":"2024-08-03 20:33:44","id":3}',
            ),
            496 => 
            array (
                'id' => 997,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:34:03',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":430,"parent_id":null,"title":"Import","icon":"fas fa-upload","route":null,"sequence":7,"active":1,"type":1,"created_at":"2023-05-16 18:10:19","updated_at":"2024-08-03 20:27:27"}',
            ),
            497 => 
            array (
                'id' => 998,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:34:03',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":430,"updated_at":"2024-08-03T13:34:03.000000Z","created_at":"2024-08-03T13:34:03.000000Z","id":359}',
            ),
            498 => 
            array (
                'id' => 999,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:51:33',
                'table_name' => 'import_alternatif',
                'log_type' => 'delete',
                'data' => '{"id":3,"nama":"Data Sidang","slug":"data-sidang","file":"20240803083344-data-sidang.xlsx","count":50,"created_at":"2024-08-03 20:33:44","updated_at":"2024-08-03 20:33:44"}',
            ),
            499 => 
            array (
                'id' => 1012,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'import_alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"data sidang","slug":"data-sidang","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":6}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1013,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040020","nama":"Rega Ramadhani","import_id":6,"slug":"rega-ramadhani","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":154}',
            ),
            1 => 
            array (
                'id' => 1014,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":154,"kriteria_id":6,"nilai":"72","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":759}',
            ),
            2 => 
            array (
                'id' => 1015,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":154,"kriteria_id":2,"nilai":"92","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":760}',
            ),
            3 => 
            array (
                'id' => 1016,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":154,"kriteria_id":3,"nilai":"83","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":761}',
            ),
            4 => 
            array (
                'id' => 1017,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":154,"kriteria_id":4,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":762}',
            ),
            5 => 
            array (
                'id' => 1018,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":154,"kriteria_id":5,"nilai":"50","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":763}',
            ),
            6 => 
            array (
                'id' => 1019,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040021","nama":"Rossa Asy Syifa Nabila","import_id":6,"slug":"rossa-asy-syifa-nabila","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":155}',
            ),
            7 => 
            array (
                'id' => 1020,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":155,"kriteria_id":6,"nilai":"58","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":764}',
            ),
            8 => 
            array (
                'id' => 1021,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":155,"kriteria_id":2,"nilai":"63","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":765}',
            ),
            9 => 
            array (
                'id' => 1022,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":155,"kriteria_id":3,"nilai":"71","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":766}',
            ),
            10 => 
            array (
                'id' => 1023,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":155,"kriteria_id":4,"nilai":"68","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":767}',
            ),
            11 => 
            array (
                'id' => 1024,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":155,"kriteria_id":5,"nilai":"77","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":768}',
            ),
            12 => 
            array (
                'id' => 1025,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040029","nama":"Petry Andi Wibowo","import_id":6,"slug":"petry-andi-wibowo","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":156}',
            ),
            13 => 
            array (
                'id' => 1026,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":156,"kriteria_id":6,"nilai":"98","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":769}',
            ),
            14 => 
            array (
                'id' => 1027,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":156,"kriteria_id":2,"nilai":"75","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":770}',
            ),
            15 => 
            array (
                'id' => 1028,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":156,"kriteria_id":3,"nilai":"82","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":771}',
            ),
            16 => 
            array (
                'id' => 1029,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":156,"kriteria_id":4,"nilai":"65","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":772}',
            ),
            17 => 
            array (
                'id' => 1030,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":156,"kriteria_id":5,"nilai":"82","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":773}',
            ),
            18 => 
            array (
                'id' => 1031,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040037","nama":"Muhammad Akhdan Putra","import_id":6,"slug":"muhammad-akhdan-putra","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":157}',
            ),
            19 => 
            array (
                'id' => 1032,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":157,"kriteria_id":6,"nilai":"67","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":774}',
            ),
            20 => 
            array (
                'id' => 1033,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":157,"kriteria_id":2,"nilai":"85","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":775}',
            ),
            21 => 
            array (
                'id' => 1034,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":157,"kriteria_id":3,"nilai":"92","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":776}',
            ),
            22 => 
            array (
                'id' => 1035,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":157,"kriteria_id":4,"nilai":"57","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":777}',
            ),
            23 => 
            array (
                'id' => 1036,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":157,"kriteria_id":5,"nilai":"64","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":778}',
            ),
            24 => 
            array (
                'id' => 1037,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0040101","nama":"Muhammad Lutfi Hadiansyah","import_id":6,"slug":"muhammad-lutfi-hadiansyah","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":158}',
            ),
            25 => 
            array (
                'id' => 1038,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":158,"kriteria_id":6,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":779}',
            ),
            26 => 
            array (
                'id' => 1039,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":158,"kriteria_id":2,"nilai":"93","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":780}',
            ),
            27 => 
            array (
                'id' => 1040,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":158,"kriteria_id":3,"nilai":"79","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":781}',
            ),
            28 => 
            array (
                'id' => 1041,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":158,"kriteria_id":4,"nilai":"68","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":782}',
            ),
            29 => 
            array (
                'id' => 1042,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":158,"kriteria_id":5,"nilai":"65","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":783}',
            ),
            30 => 
            array (
                'id' => 1043,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040044","nama":"Agi Fahmi Firdaus","import_id":6,"slug":"agi-fahmi-firdaus","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":159}',
            ),
            31 => 
            array (
                'id' => 1044,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":159,"kriteria_id":6,"nilai":"65","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":784}',
            ),
            32 => 
            array (
                'id' => 1045,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":159,"kriteria_id":2,"nilai":"61","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":785}',
            ),
            33 => 
            array (
                'id' => 1046,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":159,"kriteria_id":3,"nilai":"83","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":786}',
            ),
            34 => 
            array (
                'id' => 1047,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":159,"kriteria_id":4,"nilai":"100","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":787}',
            ),
            35 => 
            array (
                'id' => 1048,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":159,"kriteria_id":5,"nilai":"64","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":788}',
            ),
            36 => 
            array (
                'id' => 1049,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040051","nama":"Muhammad Rafi Fauzi","import_id":6,"slug":"muhammad-rafi-fauzi","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":160}',
            ),
            37 => 
            array (
                'id' => 1050,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":160,"kriteria_id":6,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":789}',
            ),
            38 => 
            array (
                'id' => 1051,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":160,"kriteria_id":2,"nilai":"85","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":790}',
            ),
            39 => 
            array (
                'id' => 1052,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":160,"kriteria_id":3,"nilai":"69","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":791}',
            ),
            40 => 
            array (
                'id' => 1053,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":160,"kriteria_id":4,"nilai":"86","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":792}',
            ),
            41 => 
            array (
                'id' => 1054,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":160,"kriteria_id":5,"nilai":"61","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":793}',
            ),
            42 => 
            array (
                'id' => 1055,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040063","nama":"Iyel Salvia Afsah","import_id":6,"slug":"iyel-salvia-afsah","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":161}',
            ),
            43 => 
            array (
                'id' => 1056,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":161,"kriteria_id":6,"nilai":"96","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":794}',
            ),
            44 => 
            array (
                'id' => 1057,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":161,"kriteria_id":2,"nilai":"99","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":795}',
            ),
            45 => 
            array (
                'id' => 1058,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":161,"kriteria_id":3,"nilai":"89","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":796}',
            ),
            46 => 
            array (
                'id' => 1059,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":161,"kriteria_id":4,"nilai":"61","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":797}',
            ),
            47 => 
            array (
                'id' => 1060,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":161,"kriteria_id":5,"nilai":"96","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":798}',
            ),
            48 => 
            array (
                'id' => 1061,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040064","nama":"Fatmawati","import_id":6,"slug":"fatmawati","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":162}',
            ),
            49 => 
            array (
                'id' => 1062,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":162,"kriteria_id":6,"nilai":"90","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":799}',
            ),
            50 => 
            array (
                'id' => 1063,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":162,"kriteria_id":2,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":800}',
            ),
            51 => 
            array (
                'id' => 1064,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":162,"kriteria_id":3,"nilai":"73","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":801}',
            ),
            52 => 
            array (
                'id' => 1065,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":162,"kriteria_id":4,"nilai":"57","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":802}',
            ),
            53 => 
            array (
                'id' => 1066,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":162,"kriteria_id":5,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":803}',
            ),
            54 => 
            array (
                'id' => 1067,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040075","nama":"Syifa Siti Rahayu","import_id":6,"slug":"syifa-siti-rahayu","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":163}',
            ),
            55 => 
            array (
                'id' => 1068,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":163,"kriteria_id":6,"nilai":"77","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":804}',
            ),
            56 => 
            array (
                'id' => 1069,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":163,"kriteria_id":2,"nilai":"90","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":805}',
            ),
            57 => 
            array (
                'id' => 1070,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":163,"kriteria_id":3,"nilai":"64","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":806}',
            ),
            58 => 
            array (
                'id' => 1071,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":163,"kriteria_id":4,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":807}',
            ),
            59 => 
            array (
                'id' => 1072,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":163,"kriteria_id":5,"nilai":"72","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":808}',
            ),
            60 => 
            array (
                'id' => 1073,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040082","nama":"Mutia Julianti","import_id":6,"slug":"mutia-julianti","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":164}',
            ),
            61 => 
            array (
                'id' => 1074,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":164,"kriteria_id":6,"nilai":"63","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":809}',
            ),
            62 => 
            array (
                'id' => 1075,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":164,"kriteria_id":2,"nilai":"83","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":810}',
            ),
            63 => 
            array (
                'id' => 1076,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":164,"kriteria_id":3,"nilai":"63","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":811}',
            ),
            64 => 
            array (
                'id' => 1077,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":164,"kriteria_id":4,"nilai":"56","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":812}',
            ),
            65 => 
            array (
                'id' => 1078,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":164,"kriteria_id":5,"nilai":"68","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":813}',
            ),
            66 => 
            array (
                'id' => 1079,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040085","nama":"Mochamad Kautsar Dwiyana","import_id":6,"slug":"mochamad-kautsar-dwiyana","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":165}',
            ),
            67 => 
            array (
                'id' => 1080,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":165,"kriteria_id":6,"nilai":"86","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":814}',
            ),
            68 => 
            array (
                'id' => 1081,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":165,"kriteria_id":2,"nilai":"56","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":815}',
            ),
            69 => 
            array (
                'id' => 1082,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":165,"kriteria_id":3,"nilai":"68","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":816}',
            ),
            70 => 
            array (
                'id' => 1083,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":165,"kriteria_id":4,"nilai":"71","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":817}',
            ),
            71 => 
            array (
                'id' => 1084,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":165,"kriteria_id":5,"nilai":"82","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":818}',
            ),
            72 => 
            array (
                'id' => 1085,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040091","nama":"Jonathan Suryanto Christian Situmorang","import_id":6,"slug":"jonathan-suryanto-christian-situmorang","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":166}',
            ),
            73 => 
            array (
                'id' => 1086,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":166,"kriteria_id":6,"nilai":"92","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":819}',
            ),
            74 => 
            array (
                'id' => 1087,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":166,"kriteria_id":2,"nilai":"67","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":820}',
            ),
            75 => 
            array (
                'id' => 1088,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":166,"kriteria_id":3,"nilai":"75","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":821}',
            ),
            76 => 
            array (
                'id' => 1089,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":166,"kriteria_id":4,"nilai":"58","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":822}',
            ),
            77 => 
            array (
                'id' => 1090,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":166,"kriteria_id":5,"nilai":"56","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":823}',
            ),
            78 => 
            array (
                'id' => 1091,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040102","nama":"Raihan Kamal Fahreza","import_id":6,"slug":"raihan-kamal-fahreza","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":167}',
            ),
            79 => 
            array (
                'id' => 1092,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":167,"kriteria_id":6,"nilai":"83","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":824}',
            ),
            80 => 
            array (
                'id' => 1093,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":167,"kriteria_id":2,"nilai":"99","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":825}',
            ),
            81 => 
            array (
                'id' => 1094,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":167,"kriteria_id":3,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":826}',
            ),
            82 => 
            array (
                'id' => 1095,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":167,"kriteria_id":4,"nilai":"89","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":827}',
            ),
            83 => 
            array (
                'id' => 1096,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":167,"kriteria_id":5,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":828}',
            ),
            84 => 
            array (
                'id' => 1097,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040113","nama":"Adelina Nur Afifah","import_id":6,"slug":"adelina-nur-afifah","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":168}',
            ),
            85 => 
            array (
                'id' => 1098,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":168,"kriteria_id":6,"nilai":"97","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":829}',
            ),
            86 => 
            array (
                'id' => 1099,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":168,"kriteria_id":2,"nilai":"58","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":830}',
            ),
            87 => 
            array (
                'id' => 1100,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":168,"kriteria_id":3,"nilai":"80","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":831}',
            ),
            88 => 
            array (
                'id' => 1101,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":168,"kriteria_id":4,"nilai":"68","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":832}',
            ),
            89 => 
            array (
                'id' => 1102,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":168,"kriteria_id":5,"nilai":"72","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":833}',
            ),
            90 => 
            array (
                'id' => 1103,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040131","nama":"Arifin Noor Sya&#039;ban Iqbal","import_id":6,"slug":"arifin-noor-sya-039-ban-iqbal","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":169}',
            ),
            91 => 
            array (
                'id' => 1104,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":169,"kriteria_id":6,"nilai":"77","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":834}',
            ),
            92 => 
            array (
                'id' => 1105,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":169,"kriteria_id":2,"nilai":"60","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":835}',
            ),
            93 => 
            array (
                'id' => 1106,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":169,"kriteria_id":3,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":836}',
            ),
            94 => 
            array (
                'id' => 1107,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":169,"kriteria_id":4,"nilai":"73","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":837}',
            ),
            95 => 
            array (
                'id' => 1108,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":169,"kriteria_id":5,"nilai":"59","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":838}',
            ),
            96 => 
            array (
                'id' => 1109,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040152","nama":"Raja Fakhrurozi Safira","import_id":6,"slug":"raja-fakhrurozi-safira","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":170}',
            ),
            97 => 
            array (
                'id' => 1110,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":170,"kriteria_id":6,"nilai":"78","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":839}',
            ),
            98 => 
            array (
                'id' => 1111,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":170,"kriteria_id":2,"nilai":"79","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":840}',
            ),
            99 => 
            array (
                'id' => 1112,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":170,"kriteria_id":3,"nilai":"83","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":841}',
            ),
            100 => 
            array (
                'id' => 1113,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":170,"kriteria_id":4,"nilai":"57","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":842}',
            ),
            101 => 
            array (
                'id' => 1114,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":170,"kriteria_id":5,"nilai":"55","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":843}',
            ),
            102 => 
            array (
                'id' => 1115,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040154","nama":"Aghniya Yasminasari","import_id":6,"slug":"aghniya-yasminasari","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":171}',
            ),
            103 => 
            array (
                'id' => 1116,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":171,"kriteria_id":6,"nilai":"56","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":844}',
            ),
            104 => 
            array (
                'id' => 1117,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":171,"kriteria_id":2,"nilai":"94","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":845}',
            ),
            105 => 
            array (
                'id' => 1118,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":171,"kriteria_id":3,"nilai":"100","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":846}',
            ),
            106 => 
            array (
                'id' => 1119,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":171,"kriteria_id":4,"nilai":"71","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":847}',
            ),
            107 => 
            array (
                'id' => 1120,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":171,"kriteria_id":5,"nilai":"58","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":848}',
            ),
            108 => 
            array (
                'id' => 1121,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040162","nama":"Hanik Kudsiyah","import_id":6,"slug":"hanik-kudsiyah","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":172}',
            ),
            109 => 
            array (
                'id' => 1122,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":172,"kriteria_id":6,"nilai":"59","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":849}',
            ),
            110 => 
            array (
                'id' => 1123,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":172,"kriteria_id":2,"nilai":"80","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":850}',
            ),
            111 => 
            array (
                'id' => 1124,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":172,"kriteria_id":3,"nilai":"55","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":851}',
            ),
            112 => 
            array (
                'id' => 1125,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":172,"kriteria_id":4,"nilai":"62","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":852}',
            ),
            113 => 
            array (
                'id' => 1126,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":172,"kriteria_id":5,"nilai":"94","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":853}',
            ),
            114 => 
            array (
                'id' => 1127,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040166","nama":"Nurul Latifah","import_id":6,"slug":"nurul-latifah","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":173}',
            ),
            115 => 
            array (
                'id' => 1128,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":173,"kriteria_id":6,"nilai":"71","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":854}',
            ),
            116 => 
            array (
                'id' => 1129,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":173,"kriteria_id":2,"nilai":"54","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":855}',
            ),
            117 => 
            array (
                'id' => 1130,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":173,"kriteria_id":3,"nilai":"87","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":856}',
            ),
            118 => 
            array (
                'id' => 1131,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":173,"kriteria_id":4,"nilai":"74","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":857}',
            ),
            119 => 
            array (
                'id' => 1132,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":173,"kriteria_id":5,"nilai":"57","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":858}',
            ),
            120 => 
            array (
                'id' => 1133,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040038","nama":"Arwin Rizky Rivaldy","import_id":6,"slug":"arwin-rizky-rivaldy","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":174}',
            ),
            121 => 
            array (
                'id' => 1134,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":174,"kriteria_id":6,"nilai":"56","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":859}',
            ),
            122 => 
            array (
                'id' => 1135,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":174,"kriteria_id":2,"nilai":"57","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":860}',
            ),
            123 => 
            array (
                'id' => 1136,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":174,"kriteria_id":3,"nilai":"72","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":861}',
            ),
            124 => 
            array (
                'id' => 1137,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":174,"kriteria_id":4,"nilai":"72","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":862}',
            ),
            125 => 
            array (
                'id' => 1138,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":174,"kriteria_id":5,"nilai":"86","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":863}',
            ),
            126 => 
            array (
                'id' => 1139,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040087","nama":"Christian Haryanto","import_id":6,"slug":"christian-haryanto","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":175}',
            ),
            127 => 
            array (
                'id' => 1140,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":175,"kriteria_id":6,"nilai":"86","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":864}',
            ),
            128 => 
            array (
                'id' => 1141,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":175,"kriteria_id":2,"nilai":"99","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":865}',
            ),
            129 => 
            array (
                'id' => 1142,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":175,"kriteria_id":3,"nilai":"78","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":866}',
            ),
            130 => 
            array (
                'id' => 1143,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":175,"kriteria_id":4,"nilai":"65","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":867}',
            ),
            131 => 
            array (
                'id' => 1144,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":175,"kriteria_id":5,"nilai":"86","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":868}',
            ),
            132 => 
            array (
                'id' => 1145,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040116","nama":"Muhammad Ilyas Arradya","import_id":6,"slug":"muhammad-ilyas-arradya","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":176}',
            ),
            133 => 
            array (
                'id' => 1146,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":176,"kriteria_id":6,"nilai":"67","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":869}',
            ),
            134 => 
            array (
                'id' => 1147,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":176,"kriteria_id":2,"nilai":"80","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":870}',
            ),
            135 => 
            array (
                'id' => 1148,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":176,"kriteria_id":3,"nilai":"88","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":871}',
            ),
            136 => 
            array (
                'id' => 1149,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":176,"kriteria_id":4,"nilai":"59","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":872}',
            ),
            137 => 
            array (
                'id' => 1150,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":176,"kriteria_id":5,"nilai":"66","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":873}',
            ),
            138 => 
            array (
                'id' => 1151,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040120","nama":"Hafidz Fadhillah Ramadhan","import_id":6,"slug":"hafidz-fadhillah-ramadhan","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":177}',
            ),
            139 => 
            array (
                'id' => 1152,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":177,"kriteria_id":6,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":874}',
            ),
            140 => 
            array (
                'id' => 1153,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":177,"kriteria_id":2,"nilai":"71","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":875}',
            ),
            141 => 
            array (
                'id' => 1154,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":177,"kriteria_id":3,"nilai":"87","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":876}',
            ),
            142 => 
            array (
                'id' => 1155,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":177,"kriteria_id":4,"nilai":"89","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":877}',
            ),
            143 => 
            array (
                'id' => 1156,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":177,"kriteria_id":5,"nilai":"63","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":878}',
            ),
            144 => 
            array (
                'id' => 1157,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040159","nama":"Giri Primakov","import_id":6,"slug":"giri-primakov","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":178}',
            ),
            145 => 
            array (
                'id' => 1158,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":178,"kriteria_id":6,"nilai":"60","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":879}',
            ),
            146 => 
            array (
                'id' => 1159,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":178,"kriteria_id":2,"nilai":"75","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":880}',
            ),
            147 => 
            array (
                'id' => 1160,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":178,"kriteria_id":3,"nilai":"89","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":881}',
            ),
            148 => 
            array (
                'id' => 1161,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":178,"kriteria_id":4,"nilai":"59","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":882}',
            ),
            149 => 
            array (
                'id' => 1162,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":178,"kriteria_id":5,"nilai":"89","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":883}',
            ),
            150 => 
            array (
                'id' => 1163,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040045","nama":"Selsa Naufal Aprilia","import_id":6,"slug":"selsa-naufal-aprilia","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":179}',
            ),
            151 => 
            array (
                'id' => 1164,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":179,"kriteria_id":6,"nilai":"56","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":884}',
            ),
            152 => 
            array (
                'id' => 1165,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":179,"kriteria_id":2,"nilai":"90","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":885}',
            ),
            153 => 
            array (
                'id' => 1166,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":179,"kriteria_id":3,"nilai":"66","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":886}',
            ),
            154 => 
            array (
                'id' => 1167,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":179,"kriteria_id":4,"nilai":"86","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":887}',
            ),
            155 => 
            array (
                'id' => 1168,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":179,"kriteria_id":5,"nilai":"74","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":888}',
            ),
            156 => 
            array (
                'id' => 1169,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040081","nama":"Riki Ramadhan","import_id":6,"slug":"riki-ramadhan","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":180}',
            ),
            157 => 
            array (
                'id' => 1170,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":180,"kriteria_id":6,"nilai":"79","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":889}',
            ),
            158 => 
            array (
                'id' => 1171,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":180,"kriteria_id":2,"nilai":"95","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":890}',
            ),
            159 => 
            array (
                'id' => 1172,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":180,"kriteria_id":3,"nilai":"83","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":891}',
            ),
            160 => 
            array (
                'id' => 1173,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":180,"kriteria_id":4,"nilai":"54","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":892}',
            ),
            161 => 
            array (
                'id' => 1174,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":180,"kriteria_id":5,"nilai":"83","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":893}',
            ),
            162 => 
            array (
                'id' => 1175,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040088","nama":"Dean Retno Astoeti","import_id":6,"slug":"dean-retno-astoeti","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":181}',
            ),
            163 => 
            array (
                'id' => 1176,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":181,"kriteria_id":6,"nilai":"79","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":894}',
            ),
            164 => 
            array (
                'id' => 1177,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":181,"kriteria_id":2,"nilai":"91","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":895}',
            ),
            165 => 
            array (
                'id' => 1178,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":181,"kriteria_id":3,"nilai":"95","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":896}',
            ),
            166 => 
            array (
                'id' => 1179,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":181,"kriteria_id":4,"nilai":"60","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":897}',
            ),
            167 => 
            array (
                'id' => 1180,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":181,"kriteria_id":5,"nilai":"87","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":898}',
            ),
            168 => 
            array (
                'id' => 1181,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040168","nama":"Reza Aditya Asad","import_id":6,"slug":"reza-aditya-asad","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":182}',
            ),
            169 => 
            array (
                'id' => 1182,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":182,"kriteria_id":6,"nilai":"64","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":899}',
            ),
            170 => 
            array (
                'id' => 1183,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":182,"kriteria_id":2,"nilai":"54","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":900}',
            ),
            171 => 
            array (
                'id' => 1184,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":182,"kriteria_id":3,"nilai":"61","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":901}',
            ),
            172 => 
            array (
                'id' => 1185,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":182,"kriteria_id":4,"nilai":"92","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":902}',
            ),
            173 => 
            array (
                'id' => 1186,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":182,"kriteria_id":5,"nilai":"69","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":903}',
            ),
            174 => 
            array (
                'id' => 1187,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040090","nama":"Arya Nurvian Majid","import_id":6,"slug":"arya-nurvian-majid","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":183}',
            ),
            175 => 
            array (
                'id' => 1188,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":183,"kriteria_id":6,"nilai":"62","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":904}',
            ),
            176 => 
            array (
                'id' => 1189,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":183,"kriteria_id":2,"nilai":"93","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":905}',
            ),
            177 => 
            array (
                'id' => 1190,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":183,"kriteria_id":3,"nilai":"93","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":906}',
            ),
            178 => 
            array (
                'id' => 1191,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":183,"kriteria_id":4,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":907}',
            ),
            179 => 
            array (
                'id' => 1192,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":183,"kriteria_id":5,"nilai":"67","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":908}',
            ),
            180 => 
            array (
                'id' => 1193,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040022","nama":"Riezka Dianty","import_id":6,"slug":"riezka-dianty","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":184}',
            ),
            181 => 
            array (
                'id' => 1194,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":184,"kriteria_id":6,"nilai":"97","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":909}',
            ),
            182 => 
            array (
                'id' => 1195,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":184,"kriteria_id":2,"nilai":"80","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":910}',
            ),
            183 => 
            array (
                'id' => 1196,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":184,"kriteria_id":3,"nilai":"91","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":911}',
            ),
            184 => 
            array (
                'id' => 1197,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":184,"kriteria_id":4,"nilai":"58","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":912}',
            ),
            185 => 
            array (
                'id' => 1198,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":184,"kriteria_id":5,"nilai":"89","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":913}',
            ),
            186 => 
            array (
                'id' => 1199,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0040045","nama":"Shafa Nafisah Jauharah","import_id":6,"slug":"shafa-nafisah-jauharah","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":185}',
            ),
            187 => 
            array (
                'id' => 1200,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":185,"kriteria_id":6,"nilai":"64","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":914}',
            ),
            188 => 
            array (
                'id' => 1201,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":185,"kriteria_id":2,"nilai":"57","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":915}',
            ),
            189 => 
            array (
                'id' => 1202,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":185,"kriteria_id":3,"nilai":"97","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":916}',
            ),
            190 => 
            array (
                'id' => 1203,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":185,"kriteria_id":4,"nilai":"73","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":917}',
            ),
            191 => 
            array (
                'id' => 1204,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":185,"kriteria_id":5,"nilai":"54","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":918}',
            ),
            192 => 
            array (
                'id' => 1205,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040169","nama":"Bobi Nur Mulyana","import_id":6,"slug":"bobi-nur-mulyana","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":186}',
            ),
            193 => 
            array (
                'id' => 1206,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":186,"kriteria_id":6,"nilai":"95","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":919}',
            ),
            194 => 
            array (
                'id' => 1207,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":186,"kriteria_id":2,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":920}',
            ),
            195 => 
            array (
                'id' => 1208,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":186,"kriteria_id":3,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":921}',
            ),
            196 => 
            array (
                'id' => 1209,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":186,"kriteria_id":4,"nilai":"78","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":922}',
            ),
            197 => 
            array (
                'id' => 1210,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":186,"kriteria_id":5,"nilai":"80","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":923}',
            ),
            198 => 
            array (
                'id' => 1211,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040027","nama":"Bimbi Tritama","import_id":6,"slug":"bimbi-tritama","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":187}',
            ),
            199 => 
            array (
                'id' => 1212,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":187,"kriteria_id":6,"nilai":"68","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":924}',
            ),
            200 => 
            array (
                'id' => 1213,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":187,"kriteria_id":2,"nilai":"99","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":925}',
            ),
            201 => 
            array (
                'id' => 1214,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":187,"kriteria_id":3,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":926}',
            ),
            202 => 
            array (
                'id' => 1215,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":187,"kriteria_id":4,"nilai":"84","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":927}',
            ),
            203 => 
            array (
                'id' => 1216,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":187,"kriteria_id":5,"nilai":"69","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":928}',
            ),
            204 => 
            array (
                'id' => 1217,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040036","nama":"Aprilia Wulan Sari","import_id":6,"slug":"aprilia-wulan-sari","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":188}',
            ),
            205 => 
            array (
                'id' => 1218,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":188,"kriteria_id":6,"nilai":"74","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":929}',
            ),
            206 => 
            array (
                'id' => 1219,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":188,"kriteria_id":2,"nilai":"63","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":930}',
            ),
            207 => 
            array (
                'id' => 1220,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":188,"kriteria_id":3,"nilai":"87","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":931}',
            ),
            208 => 
            array (
                'id' => 1221,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":188,"kriteria_id":4,"nilai":"95","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":932}',
            ),
            209 => 
            array (
                'id' => 1222,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":188,"kriteria_id":5,"nilai":"63","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":933}',
            ),
            210 => 
            array (
                'id' => 1223,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040073","nama":"Iqbal Hadiansyah","import_id":6,"slug":"iqbal-hadiansyah","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":189}',
            ),
            211 => 
            array (
                'id' => 1224,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":189,"kriteria_id":6,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":934}',
            ),
            212 => 
            array (
                'id' => 1225,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":189,"kriteria_id":2,"nilai":"91","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":935}',
            ),
            213 => 
            array (
                'id' => 1226,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":189,"kriteria_id":3,"nilai":"79","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":936}',
            ),
            214 => 
            array (
                'id' => 1227,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":189,"kriteria_id":4,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":937}',
            ),
            215 => 
            array (
                'id' => 1228,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":189,"kriteria_id":5,"nilai":"95","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":938}',
            ),
            216 => 
            array (
                'id' => 1229,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040100","nama":"Aldi Nurfa Pratama","import_id":6,"slug":"aldi-nurfa-pratama","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":190}',
            ),
            217 => 
            array (
                'id' => 1230,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":190,"kriteria_id":6,"nilai":"85","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":939}',
            ),
            218 => 
            array (
                'id' => 1231,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":190,"kriteria_id":2,"nilai":"59","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":940}',
            ),
            219 => 
            array (
                'id' => 1232,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":190,"kriteria_id":3,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":941}',
            ),
            220 => 
            array (
                'id' => 1233,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":190,"kriteria_id":4,"nilai":"61","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":942}',
            ),
            221 => 
            array (
                'id' => 1234,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":190,"kriteria_id":5,"nilai":"72","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":943}',
            ),
            222 => 
            array (
                'id' => 1235,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040167","nama":"Santi Febrianti","import_id":6,"slug":"santi-febrianti","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":191}',
            ),
            223 => 
            array (
                'id' => 1236,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":191,"kriteria_id":6,"nilai":"98","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":944}',
            ),
            224 => 
            array (
                'id' => 1237,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":191,"kriteria_id":2,"nilai":"57","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":945}',
            ),
            225 => 
            array (
                'id' => 1238,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":191,"kriteria_id":3,"nilai":"65","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":946}',
            ),
            226 => 
            array (
                'id' => 1239,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":191,"kriteria_id":4,"nilai":"58","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":947}',
            ),
            227 => 
            array (
                'id' => 1240,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":191,"kriteria_id":5,"nilai":"88","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":948}',
            ),
            228 => 
            array (
                'id' => 1241,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040174","nama":"Dara Atria Ferliandini","import_id":6,"slug":"dara-atria-ferliandini","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":192}',
            ),
            229 => 
            array (
                'id' => 1242,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":192,"kriteria_id":6,"nilai":"63","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":949}',
            ),
            230 => 
            array (
                'id' => 1243,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":192,"kriteria_id":2,"nilai":"73","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":950}',
            ),
            231 => 
            array (
                'id' => 1244,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":192,"kriteria_id":3,"nilai":"72","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":951}',
            ),
            232 => 
            array (
                'id' => 1245,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":192,"kriteria_id":4,"nilai":"76","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":952}',
            ),
            233 => 
            array (
                'id' => 1246,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":192,"kriteria_id":5,"nilai":"98","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":953}',
            ),
            234 => 
            array (
                'id' => 1247,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040160","nama":"Luki Rahmat","import_id":6,"slug":"luki-rahmat","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":193}',
            ),
            235 => 
            array (
                'id' => 1248,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":193,"kriteria_id":6,"nilai":"65","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":954}',
            ),
            236 => 
            array (
                'id' => 1249,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":193,"kriteria_id":2,"nilai":"100","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":955}',
            ),
            237 => 
            array (
                'id' => 1250,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":193,"kriteria_id":3,"nilai":"90","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":956}',
            ),
            238 => 
            array (
                'id' => 1251,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":193,"kriteria_id":4,"nilai":"91","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":957}',
            ),
            239 => 
            array (
                'id' => 1252,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":193,"kriteria_id":5,"nilai":"69","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":958}',
            ),
            240 => 
            array (
                'id' => 1253,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040103","nama":"Alvina Damayanti","import_id":6,"slug":"alvina-damayanti","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":194}',
            ),
            241 => 
            array (
                'id' => 1254,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":194,"kriteria_id":6,"nilai":"93","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":959}',
            ),
            242 => 
            array (
                'id' => 1255,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":194,"kriteria_id":2,"nilai":"74","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":960}',
            ),
            243 => 
            array (
                'id' => 1256,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":194,"kriteria_id":3,"nilai":"96","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":961}',
            ),
            244 => 
            array (
                'id' => 1257,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":194,"kriteria_id":4,"nilai":"93","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":962}',
            ),
            245 => 
            array (
                'id' => 1258,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":194,"kriteria_id":5,"nilai":"88","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":963}',
            ),
            246 => 
            array (
                'id' => 1259,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040127","nama":"Dapa Raihan Fratama","import_id":6,"slug":"dapa-raihan-fratama","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":195}',
            ),
            247 => 
            array (
                'id' => 1260,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":195,"kriteria_id":6,"nilai":"80","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":964}',
            ),
            248 => 
            array (
                'id' => 1261,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":195,"kriteria_id":2,"nilai":"85","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":965}',
            ),
            249 => 
            array (
                'id' => 1262,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":195,"kriteria_id":3,"nilai":"98","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":966}',
            ),
            250 => 
            array (
                'id' => 1263,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":195,"kriteria_id":4,"nilai":"70","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":967}',
            ),
            251 => 
            array (
                'id' => 1264,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":195,"kriteria_id":5,"nilai":"54","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":968}',
            ),
            252 => 
            array (
                'id' => 1265,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040030","nama":"Muhammad Haqi Ishlahi","import_id":6,"slug":"muhammad-haqi-ishlahi","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":196}',
            ),
            253 => 
            array (
                'id' => 1266,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":196,"kriteria_id":6,"nilai":"81","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":969}',
            ),
            254 => 
            array (
                'id' => 1267,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":196,"kriteria_id":2,"nilai":"74","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":970}',
            ),
            255 => 
            array (
                'id' => 1268,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":196,"kriteria_id":3,"nilai":"68","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":971}',
            ),
            256 => 
            array (
                'id' => 1269,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:39',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":196,"kriteria_id":4,"nilai":"69","updated_at":"2024-08-03T13:54:39.000000Z","created_at":"2024-08-03T13:54:39.000000Z","id":972}',
            ),
            257 => 
            array (
                'id' => 1270,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":196,"kriteria_id":5,"nilai":"90","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":973}',
            ),
            258 => 
            array (
                'id' => 1271,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040148","nama":"Muthia Maghfira","import_id":6,"slug":"muthia-maghfira","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":197}',
            ),
            259 => 
            array (
                'id' => 1272,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":197,"kriteria_id":6,"nilai":"90","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":974}',
            ),
            260 => 
            array (
                'id' => 1273,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":197,"kriteria_id":2,"nilai":"59","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":975}',
            ),
            261 => 
            array (
                'id' => 1274,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":197,"kriteria_id":3,"nilai":"95","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":976}',
            ),
            262 => 
            array (
                'id' => 1275,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":197,"kriteria_id":4,"nilai":"59","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":977}',
            ),
            263 => 
            array (
                'id' => 1276,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":197,"kriteria_id":5,"nilai":"62","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":978}',
            ),
            264 => 
            array (
                'id' => 1277,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040094","nama":"Rifky Maulana Darmawan","import_id":6,"slug":"rifky-maulana-darmawan","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":198}',
            ),
            265 => 
            array (
                'id' => 1278,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":198,"kriteria_id":6,"nilai":"95","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":979}',
            ),
            266 => 
            array (
                'id' => 1279,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":198,"kriteria_id":2,"nilai":"98","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":980}',
            ),
            267 => 
            array (
                'id' => 1280,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":198,"kriteria_id":3,"nilai":"80","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":981}',
            ),
            268 => 
            array (
                'id' => 1281,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":198,"kriteria_id":4,"nilai":"59","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":982}',
            ),
            269 => 
            array (
                'id' => 1282,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":198,"kriteria_id":5,"nilai":"77","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":983}',
            ),
            270 => 
            array (
                'id' => 1283,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040115","nama":"Salma Destriyani Asria Putri","import_id":6,"slug":"salma-destriyani-asria-putri","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":199}',
            ),
            271 => 
            array (
                'id' => 1284,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":199,"kriteria_id":6,"nilai":"76","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":984}',
            ),
            272 => 
            array (
                'id' => 1285,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":199,"kriteria_id":2,"nilai":"61","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":985}',
            ),
            273 => 
            array (
                'id' => 1286,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":199,"kriteria_id":3,"nilai":"63","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":986}',
            ),
            274 => 
            array (
                'id' => 1287,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":199,"kriteria_id":4,"nilai":"57","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":987}',
            ),
            275 => 
            array (
                'id' => 1288,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":199,"kriteria_id":5,"nilai":"91","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":988}',
            ),
            276 => 
            array (
                'id' => 1289,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040104","nama":"Sang Kala Aji","import_id":6,"slug":"sang-kala-aji","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":200}',
            ),
            277 => 
            array (
                'id' => 1290,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":200,"kriteria_id":6,"nilai":"63","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":989}',
            ),
            278 => 
            array (
                'id' => 1291,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":200,"kriteria_id":2,"nilai":"87","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":990}',
            ),
            279 => 
            array (
                'id' => 1292,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":200,"kriteria_id":3,"nilai":"89","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":991}',
            ),
            280 => 
            array (
                'id' => 1293,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":200,"kriteria_id":4,"nilai":"57","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":992}',
            ),
            281 => 
            array (
                'id' => 1294,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":200,"kriteria_id":5,"nilai":"81","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":993}',
            ),
            282 => 
            array (
                'id' => 1295,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040165","nama":"Sofa Marwah Almunawaroh","import_id":6,"slug":"sofa-marwah-almunawaroh","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":201}',
            ),
            283 => 
            array (
                'id' => 1296,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":201,"kriteria_id":6,"nilai":"85","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":994}',
            ),
            284 => 
            array (
                'id' => 1297,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":201,"kriteria_id":2,"nilai":"73","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":995}',
            ),
            285 => 
            array (
                'id' => 1298,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":201,"kriteria_id":3,"nilai":"54","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":996}',
            ),
            286 => 
            array (
                'id' => 1299,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":201,"kriteria_id":4,"nilai":"57","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":997}',
            ),
            287 => 
            array (
                'id' => 1300,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":201,"kriteria_id":5,"nilai":"56","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":998}',
            ),
            288 => 
            array (
                'id' => 1301,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040157","nama":"Ai Nurul Wardatul Suroya","import_id":6,"slug":"ai-nurul-wardatul-suroya","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":202}',
            ),
            289 => 
            array (
                'id' => 1302,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":202,"kriteria_id":6,"nilai":"68","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":999}',
            ),
            290 => 
            array (
                'id' => 1303,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":202,"kriteria_id":2,"nilai":"60","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1000}',
            ),
            291 => 
            array (
                'id' => 1304,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":202,"kriteria_id":3,"nilai":"83","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1001}',
            ),
            292 => 
            array (
                'id' => 1305,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":202,"kriteria_id":4,"nilai":"63","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1002}',
            ),
            293 => 
            array (
                'id' => 1306,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":202,"kriteria_id":5,"nilai":"82","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1003}',
            ),
            294 => 
            array (
                'id' => 1307,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CDGM0040070","nama":"Afina Nur Lathifah","import_id":6,"slug":"afina-nur-lathifah","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":203}',
            ),
            295 => 
            array (
                'id' => 1308,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":203,"kriteria_id":6,"nilai":"73","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1004}',
            ),
            296 => 
            array (
                'id' => 1309,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":203,"kriteria_id":2,"nilai":"67","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1005}',
            ),
            297 => 
            array (
                'id' => 1310,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":203,"kriteria_id":3,"nilai":"75","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1006}',
            ),
            298 => 
            array (
                'id' => 1311,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":203,"kriteria_id":4,"nilai":"90","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1007}',
            ),
            299 => 
            array (
                'id' => 1312,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":203,"kriteria_id":5,"nilai":"98","updated_at":"2024-08-03T13:54:40.000000Z","created_at":"2024-08-03T13:54:40.000000Z","id":1008}',
            ),
            300 => 
            array (
                'id' => 1313,
                'user_id' => 2,
                'log_date' => '2024-08-03 20:54:40',
                'table_name' => 'import_alternatif',
                'log_type' => 'edit',
                'data' => '{"nama":"data sidang","slug":"data-sidang","updated_at":"2024-08-03 20:54:39","created_at":"2024-08-03 20:54:39","id":6}',
            ),
        ));
        
        
    }
}