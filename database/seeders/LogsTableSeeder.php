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
                'id' => '1',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:38:36',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":1,"nopeserta":"CFTG0030140","nama":"ACHMAD IMRON ROSYADI","slug":"achmad-imron-rosyadi","import_id":null,"created_at":"2023-07-14 18:55:41","updated_at":"2023-07-14 18:55:41"}',
            ),
            1 => 
            array (
                'id' => '2',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'import_alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Data akumulasi","slug":"data-akumulasi","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":1}',
            ),
            2 => 
            array (
                'id' => '3',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030002","nama":"Adrian Chandika","import_id":1,"slug":"adrian-chandika","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":2}',
            ),
            3 => 
            array (
                'id' => '4',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":1}',
            ),
            4 => 
            array (
                'id' => '5',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":2,"nilai":"100","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":2}',
            ),
            5 => 
            array (
                'id' => '6',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":3}',
            ),
            6 => 
            array (
                'id' => '7',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":4}',
            ),
            7 => 
            array (
                'id' => '8',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":2,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":5}',
            ),
            8 => 
            array (
                'id' => '9',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030003","nama":"Andre Al Mahdi","import_id":1,"slug":"andre-al-mahdi","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":3}',
            ),
            9 => 
            array (
                'id' => '10',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":1,"nilai":"270","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":6}',
            ),
            10 => 
            array (
                'id' => '11',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":7}',
            ),
            11 => 
            array (
                'id' => '12',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":8}',
            ),
            12 => 
            array (
                'id' => '13',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":9}',
            ),
            13 => 
            array (
                'id' => '14',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":3,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":10}',
            ),
            14 => 
            array (
                'id' => '15',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030004","nama":"Angi Anggraeni","import_id":1,"slug":"angi-anggraeni","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":4}',
            ),
            15 => 
            array (
                'id' => '16',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":11}',
            ),
            16 => 
            array (
                'id' => '17',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":12}',
            ),
            17 => 
            array (
                'id' => '18',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":13}',
            ),
            18 => 
            array (
                'id' => '19',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":14}',
            ),
            19 => 
            array (
                'id' => '20',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":4,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":15}',
            ),
            20 => 
            array (
                'id' => '21',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030005","nama":"Arif Muwahhid Kholilulloh","import_id":1,"slug":"arif-muwahhid-kholilulloh","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":5}',
            ),
            21 => 
            array (
                'id' => '22',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":16}',
            ),
            22 => 
            array (
                'id' => '23',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":17}',
            ),
            23 => 
            array (
                'id' => '24',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":18}',
            ),
            24 => 
            array (
                'id' => '25',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":19}',
            ),
            25 => 
            array (
                'id' => '26',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":5,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":20}',
            ),
            26 => 
            array (
                'id' => '27',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030006","nama":"Ayuni Putri Utami","import_id":1,"slug":"ayuni-putri-utami","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":6}',
            ),
            27 => 
            array (
                'id' => '28',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":21}',
            ),
            28 => 
            array (
                'id' => '29',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":22}',
            ),
            29 => 
            array (
                'id' => '30',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":23}',
            ),
            30 => 
            array (
                'id' => '31',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":24}',
            ),
            31 => 
            array (
                'id' => '32',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":6,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":25}',
            ),
            32 => 
            array (
                'id' => '33',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030007","nama":"Barik Abdan Taqiyan","import_id":1,"slug":"barik-abdan-taqiyan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":7}',
            ),
            33 => 
            array (
                'id' => '34',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":26}',
            ),
            34 => 
            array (
                'id' => '35',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":27}',
            ),
            35 => 
            array (
                'id' => '36',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":28}',
            ),
            36 => 
            array (
                'id' => '37',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":29}',
            ),
            37 => 
            array (
                'id' => '38',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":7,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":30}',
            ),
            38 => 
            array (
                'id' => '39',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030008","nama":"Bily Irawan","import_id":1,"slug":"bily-irawan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":8}',
            ),
            39 => 
            array (
                'id' => '40',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":31}',
            ),
            40 => 
            array (
                'id' => '41',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":32}',
            ),
            41 => 
            array (
                'id' => '42',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":33}',
            ),
            42 => 
            array (
                'id' => '43',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":34}',
            ),
            43 => 
            array (
                'id' => '44',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":8,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":35}',
            ),
            44 => 
            array (
                'id' => '45',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030009","nama":"Cecep Sudrajat","import_id":1,"slug":"cecep-sudrajat","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":9}',
            ),
            45 => 
            array (
                'id' => '46',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":36}',
            ),
            46 => 
            array (
                'id' => '47',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":37}',
            ),
            47 => 
            array (
                'id' => '48',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":38}',
            ),
            48 => 
            array (
                'id' => '49',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":39}',
            ),
            49 => 
            array (
                'id' => '50',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":9,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":40}',
            ),
            50 => 
            array (
                'id' => '51',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030010","nama":"Chenley Fasawwa","import_id":1,"slug":"chenley-fasawwa","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":10}',
            ),
            51 => 
            array (
                'id' => '52',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":41}',
            ),
            52 => 
            array (
                'id' => '53',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":42}',
            ),
            53 => 
            array (
                'id' => '54',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":43}',
            ),
            54 => 
            array (
                'id' => '55',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":44}',
            ),
            55 => 
            array (
                'id' => '56',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":10,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":45}',
            ),
            56 => 
            array (
                'id' => '57',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030011","nama":"Deni Armansyah","import_id":1,"slug":"deni-armansyah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":11}',
            ),
            57 => 
            array (
                'id' => '58',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":46}',
            ),
            58 => 
            array (
                'id' => '59',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":47}',
            ),
            59 => 
            array (
                'id' => '60',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":48}',
            ),
            60 => 
            array (
                'id' => '61',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":49}',
            ),
            61 => 
            array (
                'id' => '62',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":11,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":50}',
            ),
            62 => 
            array (
                'id' => '63',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030012","nama":"Dhiya\' Fajri Tuhfahillah","import_id":1,"slug":"dhiya-fajri-tuhfahillah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":12}',
            ),
            63 => 
            array (
                'id' => '64',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":51}',
            ),
            64 => 
            array (
                'id' => '65',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":52}',
            ),
            65 => 
            array (
                'id' => '66',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":53}',
            ),
            66 => 
            array (
                'id' => '67',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":54}',
            ),
            67 => 
            array (
                'id' => '68',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":12,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":55}',
            ),
            68 => 
            array (
                'id' => '69',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030013","nama":"Dimas Maulana","import_id":1,"slug":"dimas-maulana","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":13}',
            ),
            69 => 
            array (
                'id' => '70',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":56}',
            ),
            70 => 
            array (
                'id' => '71',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":57}',
            ),
            71 => 
            array (
                'id' => '72',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":58}',
            ),
            72 => 
            array (
                'id' => '73',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":59}',
            ),
            73 => 
            array (
                'id' => '74',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":13,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":60}',
            ),
            74 => 
            array (
                'id' => '75',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030014","nama":"Dini Gustiani","import_id":1,"slug":"dini-gustiani","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":14}',
            ),
            75 => 
            array (
                'id' => '76',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":61}',
            ),
            76 => 
            array (
                'id' => '77',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":62}',
            ),
            77 => 
            array (
                'id' => '78',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":63}',
            ),
            78 => 
            array (
                'id' => '79',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":64}',
            ),
            79 => 
            array (
                'id' => '80',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":14,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":65}',
            ),
            80 => 
            array (
                'id' => '81',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030015","nama":"Fiki Hanggara","import_id":1,"slug":"fiki-hanggara","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":15}',
            ),
            81 => 
            array (
                'id' => '82',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":66}',
            ),
            82 => 
            array (
                'id' => '83',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":67}',
            ),
            83 => 
            array (
                'id' => '84',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":68}',
            ),
            84 => 
            array (
                'id' => '85',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":69}',
            ),
            85 => 
            array (
                'id' => '86',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":15,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":70}',
            ),
            86 => 
            array (
                'id' => '87',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030016","nama":"Fraya Fanisa Sugita","import_id":1,"slug":"fraya-fanisa-sugita","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":16}',
            ),
            87 => 
            array (
                'id' => '88',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":71}',
            ),
            88 => 
            array (
                'id' => '89',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":72}',
            ),
            89 => 
            array (
                'id' => '90',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":73}',
            ),
            90 => 
            array (
                'id' => '91',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":74}',
            ),
            91 => 
            array (
                'id' => '92',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":16,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":75}',
            ),
            92 => 
            array (
                'id' => '93',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030017","nama":"Fulgentius Sendy Nur Ridwan","import_id":1,"slug":"fulgentius-sendy-nur-ridwan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":17}',
            ),
            93 => 
            array (
                'id' => '94',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":76}',
            ),
            94 => 
            array (
                'id' => '95',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":77}',
            ),
            95 => 
            array (
                'id' => '96',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":78}',
            ),
            96 => 
            array (
                'id' => '97',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":79}',
            ),
            97 => 
            array (
                'id' => '98',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":17,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":80}',
            ),
            98 => 
            array (
                'id' => '99',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030018","nama":"Guntur Nur Afandi","import_id":1,"slug":"guntur-nur-afandi","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":18}',
            ),
            99 => 
            array (
                'id' => '100',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":81}',
            ),
            100 => 
            array (
                'id' => '101',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":82}',
            ),
            101 => 
            array (
                'id' => '102',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":83}',
            ),
            102 => 
            array (
                'id' => '103',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":84}',
            ),
            103 => 
            array (
                'id' => '104',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":18,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":85}',
            ),
            104 => 
            array (
                'id' => '105',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030019","nama":"Halimatus\'Sadiyah","import_id":1,"slug":"halimatus-sadiyah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":19}',
            ),
            105 => 
            array (
                'id' => '106',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":86}',
            ),
            106 => 
            array (
                'id' => '107',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":87}',
            ),
            107 => 
            array (
                'id' => '108',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":88}',
            ),
            108 => 
            array (
                'id' => '109',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":89}',
            ),
            109 => 
            array (
                'id' => '110',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":19,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":90}',
            ),
            110 => 
            array (
                'id' => '111',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030020","nama":"Harry Saravi Sehati Siregar","import_id":1,"slug":"harry-saravi-sehati-siregar","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":20}',
            ),
            111 => 
            array (
                'id' => '112',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":91}',
            ),
            112 => 
            array (
                'id' => '113',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":92}',
            ),
            113 => 
            array (
                'id' => '114',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":93}',
            ),
            114 => 
            array (
                'id' => '115',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":94}',
            ),
            115 => 
            array (
                'id' => '116',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":20,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":95}',
            ),
            116 => 
            array (
                'id' => '117',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030021","nama":"Intan Satia Hotimah","import_id":1,"slug":"intan-satia-hotimah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":21}',
            ),
            117 => 
            array (
                'id' => '118',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":96}',
            ),
            118 => 
            array (
                'id' => '119',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":97}',
            ),
            119 => 
            array (
                'id' => '120',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":98}',
            ),
            120 => 
            array (
                'id' => '121',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":99}',
            ),
            121 => 
            array (
                'id' => '122',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":21,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":100}',
            ),
            122 => 
            array (
                'id' => '123',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030022","nama":"Kiki Rahmatuloh","import_id":1,"slug":"kiki-rahmatuloh","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":22}',
            ),
            123 => 
            array (
                'id' => '124',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":101}',
            ),
            124 => 
            array (
                'id' => '125',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":102}',
            ),
            125 => 
            array (
                'id' => '126',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":103}',
            ),
            126 => 
            array (
                'id' => '127',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":104}',
            ),
            127 => 
            array (
                'id' => '128',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":22,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":105}',
            ),
            128 => 
            array (
                'id' => '129',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030023","nama":"Kristi Rahmawati","import_id":1,"slug":"kristi-rahmawati","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":23}',
            ),
            129 => 
            array (
                'id' => '130',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":106}',
            ),
            130 => 
            array (
                'id' => '131',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":107}',
            ),
            131 => 
            array (
                'id' => '132',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":108}',
            ),
            132 => 
            array (
                'id' => '133',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":109}',
            ),
            133 => 
            array (
                'id' => '134',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":23,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":110}',
            ),
            134 => 
            array (
                'id' => '135',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030024","nama":"Laudi Kayluna Maisha","import_id":1,"slug":"laudi-kayluna-maisha","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":24}',
            ),
            135 => 
            array (
                'id' => '136',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":111}',
            ),
            136 => 
            array (
                'id' => '137',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":112}',
            ),
            137 => 
            array (
                'id' => '138',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":113}',
            ),
            138 => 
            array (
                'id' => '139',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":114}',
            ),
            139 => 
            array (
                'id' => '140',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":24,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":115}',
            ),
            140 => 
            array (
                'id' => '141',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030025","nama":"M Iqbal Permana","import_id":1,"slug":"m-iqbal-permana","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":25}',
            ),
            141 => 
            array (
                'id' => '142',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":116}',
            ),
            142 => 
            array (
                'id' => '143',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":117}',
            ),
            143 => 
            array (
                'id' => '144',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":118}',
            ),
            144 => 
            array (
                'id' => '145',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":119}',
            ),
            145 => 
            array (
                'id' => '146',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":25,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":120}',
            ),
            146 => 
            array (
                'id' => '147',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030026","nama":"Mardhita Amilatu Rahmawati","import_id":1,"slug":"mardhita-amilatu-rahmawati","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":26}',
            ),
            147 => 
            array (
                'id' => '148',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":121}',
            ),
            148 => 
            array (
                'id' => '149',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":122}',
            ),
            149 => 
            array (
                'id' => '150',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":123}',
            ),
            150 => 
            array (
                'id' => '151',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":124}',
            ),
            151 => 
            array (
                'id' => '152',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":26,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":125}',
            ),
            152 => 
            array (
                'id' => '153',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030027","nama":"Michael","import_id":1,"slug":"michael","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":27}',
            ),
            153 => 
            array (
                'id' => '154',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":126}',
            ),
            154 => 
            array (
                'id' => '155',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":127}',
            ),
            155 => 
            array (
                'id' => '156',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":128}',
            ),
            156 => 
            array (
                'id' => '157',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":129}',
            ),
            157 => 
            array (
                'id' => '158',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":27,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":130}',
            ),
            158 => 
            array (
                'id' => '159',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030028","nama":"Miko Alistair Davian","import_id":1,"slug":"miko-alistair-davian","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":28}',
            ),
            159 => 
            array (
                'id' => '160',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":131}',
            ),
            160 => 
            array (
                'id' => '161',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":132}',
            ),
            161 => 
            array (
                'id' => '162',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":133}',
            ),
            162 => 
            array (
                'id' => '163',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":134}',
            ),
            163 => 
            array (
                'id' => '164',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":28,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":135}',
            ),
            164 => 
            array (
                'id' => '165',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030029","nama":"Moch Idris Daryadi","import_id":1,"slug":"moch-idris-daryadi","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":29}',
            ),
            165 => 
            array (
                'id' => '166',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":136}',
            ),
            166 => 
            array (
                'id' => '167',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":137}',
            ),
            167 => 
            array (
                'id' => '168',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":138}',
            ),
            168 => 
            array (
                'id' => '169',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":139}',
            ),
            169 => 
            array (
                'id' => '170',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":29,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":140}',
            ),
            170 => 
            array (
                'id' => '171',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030030","nama":"Muhamad Dhaffa Ardisa Pratama","import_id":1,"slug":"muhamad-dhaffa-ardisa-pratama","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":30}',
            ),
            171 => 
            array (
                'id' => '172',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":141}',
            ),
            172 => 
            array (
                'id' => '173',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":142}',
            ),
            173 => 
            array (
                'id' => '174',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":143}',
            ),
            174 => 
            array (
                'id' => '175',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":144}',
            ),
            175 => 
            array (
                'id' => '176',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":30,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":145}',
            ),
            176 => 
            array (
                'id' => '177',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030031","nama":"Muhamad Fadil Abdilah","import_id":1,"slug":"muhamad-fadil-abdilah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":31}',
            ),
            177 => 
            array (
                'id' => '178',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":146}',
            ),
            178 => 
            array (
                'id' => '179',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":147}',
            ),
            179 => 
            array (
                'id' => '180',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":148}',
            ),
            180 => 
            array (
                'id' => '181',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":149}',
            ),
            181 => 
            array (
                'id' => '182',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":31,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":150}',
            ),
            182 => 
            array (
                'id' => '183',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030032","nama":"Muhamad Syaeful Siddiq","import_id":1,"slug":"muhamad-syaeful-siddiq","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":32}',
            ),
            183 => 
            array (
                'id' => '184',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":151}',
            ),
            184 => 
            array (
                'id' => '185',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":152}',
            ),
            185 => 
            array (
                'id' => '186',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":153}',
            ),
            186 => 
            array (
                'id' => '187',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":154}',
            ),
            187 => 
            array (
                'id' => '188',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":32,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":155}',
            ),
            188 => 
            array (
                'id' => '189',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030033","nama":"Muhammad Azriel Iriandica Pratama","import_id":1,"slug":"muhammad-azriel-iriandica-pratama","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":33}',
            ),
            189 => 
            array (
                'id' => '190',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":156}',
            ),
            190 => 
            array (
                'id' => '191',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":157}',
            ),
            191 => 
            array (
                'id' => '192',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":158}',
            ),
            192 => 
            array (
                'id' => '193',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":159}',
            ),
            193 => 
            array (
                'id' => '194',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":33,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":160}',
            ),
            194 => 
            array (
                'id' => '195',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030034","nama":"Muhammad Dzakhwan Azizan","import_id":1,"slug":"muhammad-dzakhwan-azizan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":34}',
            ),
            195 => 
            array (
                'id' => '196',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":161}',
            ),
            196 => 
            array (
                'id' => '197',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":162}',
            ),
            197 => 
            array (
                'id' => '198',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":163}',
            ),
            198 => 
            array (
                'id' => '199',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":164}',
            ),
            199 => 
            array (
                'id' => '200',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":34,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":165}',
            ),
            200 => 
            array (
                'id' => '201',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030035","nama":"Muhammad Fahrurrozzi Abiyasa","import_id":1,"slug":"muhammad-fahrurrozzi-abiyasa","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":35}',
            ),
            201 => 
            array (
                'id' => '202',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":166}',
            ),
            202 => 
            array (
                'id' => '203',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":167}',
            ),
            203 => 
            array (
                'id' => '204',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":168}',
            ),
            204 => 
            array (
                'id' => '205',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":169}',
            ),
            205 => 
            array (
                'id' => '206',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":35,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":170}',
            ),
            206 => 
            array (
                'id' => '207',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030036","nama":"Muhammad Rhamdhan","import_id":1,"slug":"muhammad-rhamdhan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":36}',
            ),
            207 => 
            array (
                'id' => '208',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":171}',
            ),
            208 => 
            array (
                'id' => '209',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":172}',
            ),
            209 => 
            array (
                'id' => '210',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":173}',
            ),
            210 => 
            array (
                'id' => '211',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":174}',
            ),
            211 => 
            array (
                'id' => '212',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":36,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":175}',
            ),
            212 => 
            array (
                'id' => '213',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030037","nama":"Naba Syifaul Qolbi Safrudin","import_id":1,"slug":"naba-syifaul-qolbi-safrudin","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":37}',
            ),
            213 => 
            array (
                'id' => '214',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":176}',
            ),
            214 => 
            array (
                'id' => '215',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":177}',
            ),
            215 => 
            array (
                'id' => '216',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":178}',
            ),
            216 => 
            array (
                'id' => '217',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":179}',
            ),
            217 => 
            array (
                'id' => '218',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":37,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":180}',
            ),
            218 => 
            array (
                'id' => '219',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030038","nama":"Nawwaroh Ardiyah","import_id":1,"slug":"nawwaroh-ardiyah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":38}',
            ),
            219 => 
            array (
                'id' => '220',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":181}',
            ),
            220 => 
            array (
                'id' => '221',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":182}',
            ),
            221 => 
            array (
                'id' => '222',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":183}',
            ),
            222 => 
            array (
                'id' => '223',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":184}',
            ),
            223 => 
            array (
                'id' => '224',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":38,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":185}',
            ),
            224 => 
            array (
                'id' => '225',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030039","nama":"Nindi Trisni Noer Solihat","import_id":1,"slug":"nindi-trisni-noer-solihat","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":39}',
            ),
            225 => 
            array (
                'id' => '226',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":186}',
            ),
            226 => 
            array (
                'id' => '227',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":187}',
            ),
            227 => 
            array (
                'id' => '228',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":188}',
            ),
            228 => 
            array (
                'id' => '229',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":189}',
            ),
            229 => 
            array (
                'id' => '230',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":39,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":190}',
            ),
            230 => 
            array (
                'id' => '231',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030040","nama":"Oktavianus Aggi Nugroho","import_id":1,"slug":"oktavianus-aggi-nugroho","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":40}',
            ),
            231 => 
            array (
                'id' => '232',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":191}',
            ),
            232 => 
            array (
                'id' => '233',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":192}',
            ),
            233 => 
            array (
                'id' => '234',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":193}',
            ),
            234 => 
            array (
                'id' => '235',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":194}',
            ),
            235 => 
            array (
                'id' => '236',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":40,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":195}',
            ),
            236 => 
            array (
                'id' => '237',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030041","nama":"Pramada Hadha Mahardika","import_id":1,"slug":"pramada-hadha-mahardika","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":41}',
            ),
            237 => 
            array (
                'id' => '238',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":196}',
            ),
            238 => 
            array (
                'id' => '239',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":197}',
            ),
            239 => 
            array (
                'id' => '240',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":198}',
            ),
            240 => 
            array (
                'id' => '241',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":199}',
            ),
            241 => 
            array (
                'id' => '242',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":41,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":200}',
            ),
            242 => 
            array (
                'id' => '243',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030042","nama":"Raafi Ramadhan","import_id":1,"slug":"raafi-ramadhan","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":42}',
            ),
            243 => 
            array (
                'id' => '244',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":201}',
            ),
            244 => 
            array (
                'id' => '245',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":202}',
            ),
            245 => 
            array (
                'id' => '246',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":203}',
            ),
            246 => 
            array (
                'id' => '247',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":204}',
            ),
            247 => 
            array (
                'id' => '248',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":205}',
            ),
            248 => 
            array (
                'id' => '249',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030043","nama":"Rachmat Hidayatullah","import_id":1,"slug":"rachmat-hidayatullah","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":43}',
            ),
            249 => 
            array (
                'id' => '250',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":206}',
            ),
            250 => 
            array (
                'id' => '251',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":207}',
            ),
            251 => 
            array (
                'id' => '252',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":208}',
            ),
            252 => 
            array (
                'id' => '253',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":209}',
            ),
            253 => 
            array (
                'id' => '254',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":210}',
            ),
            254 => 
            array (
                'id' => '255',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030044","nama":"Raisa Hasmalita","import_id":1,"slug":"raisa-hasmalita","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":44}',
            ),
            255 => 
            array (
                'id' => '256',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":211}',
            ),
            256 => 
            array (
                'id' => '257',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":212}',
            ),
            257 => 
            array (
                'id' => '258',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:11.000000Z","created_at":"2023-07-14T12:39:11.000000Z","id":213}',
            ),
            258 => 
            array (
                'id' => '259',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":214}',
            ),
            259 => 
            array (
                'id' => '260',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":215}',
            ),
            260 => 
            array (
                'id' => '261',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030045","nama":"Raka Rahmat Gumelar","import_id":1,"slug":"raka-rahmat-gumelar","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":45}',
            ),
            261 => 
            array (
                'id' => '262',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":216}',
            ),
            262 => 
            array (
                'id' => '263',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":217}',
            ),
            263 => 
            array (
                'id' => '264',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":218}',
            ),
            264 => 
            array (
                'id' => '265',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":219}',
            ),
            265 => 
            array (
                'id' => '266',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":220}',
            ),
            266 => 
            array (
                'id' => '267',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030046","nama":"Restu Ramania","import_id":1,"slug":"restu-ramania","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":46}',
            ),
            267 => 
            array (
                'id' => '268',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":221}',
            ),
            268 => 
            array (
                'id' => '269',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":222}',
            ),
            269 => 
            array (
                'id' => '270',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":223}',
            ),
            270 => 
            array (
                'id' => '271',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":224}',
            ),
            271 => 
            array (
                'id' => '272',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":225}',
            ),
            272 => 
            array (
                'id' => '273',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030047","nama":"Rizky Doni Nurdiansyah","import_id":1,"slug":"rizky-doni-nurdiansyah","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":47}',
            ),
            273 => 
            array (
                'id' => '274',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":226}',
            ),
            274 => 
            array (
                'id' => '275',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":227}',
            ),
            275 => 
            array (
                'id' => '276',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":228}',
            ),
            276 => 
            array (
                'id' => '277',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":229}',
            ),
            277 => 
            array (
                'id' => '278',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":230}',
            ),
            278 => 
            array (
                'id' => '279',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030048","nama":"Sri Setiawati","import_id":1,"slug":"sri-setiawati","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":48}',
            ),
            279 => 
            array (
                'id' => '280',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":231}',
            ),
            280 => 
            array (
                'id' => '281',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":232}',
            ),
            281 => 
            array (
                'id' => '282',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":233}',
            ),
            282 => 
            array (
                'id' => '283',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":234}',
            ),
            283 => 
            array (
                'id' => '284',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":235}',
            ),
            284 => 
            array (
                'id' => '285',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030049","nama":"Tito Nugi Syaputra","import_id":1,"slug":"tito-nugi-syaputra","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":49}',
            ),
            285 => 
            array (
                'id' => '286',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":1,"nilai":"100","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":236}',
            ),
            286 => 
            array (
                'id' => '287',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":237}',
            ),
            287 => 
            array (
                'id' => '288',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":238}',
            ),
            288 => 
            array (
                'id' => '289',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":239}',
            ),
            289 => 
            array (
                'id' => '290',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":240}',
            ),
            290 => 
            array (
                'id' => '291',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030050","nama":"Vinka Priliani Rianaputri","import_id":1,"slug":"vinka-priliani-rianaputri","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":50}',
            ),
            291 => 
            array (
                'id' => '292',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":241}',
            ),
            292 => 
            array (
                'id' => '293',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":242}',
            ),
            293 => 
            array (
                'id' => '294',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":243}',
            ),
            294 => 
            array (
                'id' => '295',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":244}',
            ),
            295 => 
            array (
                'id' => '296',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":245}',
            ),
            296 => 
            array (
                'id' => '297',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030051","nama":"Zena Jasmine Ghaissany Nanlohy","import_id":1,"slug":"zena-jasmine-ghaissany-nanlohy","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":51}',
            ),
            297 => 
            array (
                'id' => '298',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":246}',
            ),
            298 => 
            array (
                'id' => '299',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":247}',
            ),
            299 => 
            array (
                'id' => '300',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":248}',
            ),
            300 => 
            array (
                'id' => '301',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":249}',
            ),
            301 => 
            array (
                'id' => '302',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:39:12.000000Z","created_at":"2023-07-14T12:39:12.000000Z","id":250}',
            ),
            302 => 
            array (
                'id' => '303',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:12',
                'table_name' => 'import_alternatif',
                'log_type' => 'edit',
                'data' => '{"nama":"Data akumulasi","slug":"data-akumulasi","updated_at":"2023-07-14 19:39:11","created_at":"2023-07-14 19:39:11","id":1}',
            ),
            303 => 
            array (
                'id' => '304',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:39:30',
                'table_name' => 'import_alternatif',
                'log_type' => 'delete',
                'data' => '{"id":1,"nama":"Data akumulasi","slug":"data-akumulasi","file":"20230714073911-data-akumulasi.xlsx","count":50,"created_at":"2023-07-14 19:39:11","updated_at":"2023-07-14 19:39:12"}',
            ),
            304 => 
            array (
                'id' => '305',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'import_alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Data Testing","slug":"data-testing","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":2}',
            ),
            305 => 
            array (
                'id' => '306',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030002","nama":"Adrian Chandika","import_id":2,"slug":"adrian-chandika","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":52}',
            ),
            306 => 
            array (
                'id' => '307',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":251}',
            ),
            307 => 
            array (
                'id' => '308',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":2,"nilai":"100","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":252}',
            ),
            308 => 
            array (
                'id' => '309',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":253}',
            ),
            309 => 
            array (
                'id' => '310',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":254}',
            ),
            310 => 
            array (
                'id' => '311',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":255}',
            ),
            311 => 
            array (
                'id' => '312',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030003","nama":"Andre Al Mahdi","import_id":2,"slug":"andre-al-mahdi","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":53}',
            ),
            312 => 
            array (
                'id' => '313',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":1,"nilai":"270","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":256}',
            ),
            313 => 
            array (
                'id' => '314',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":257}',
            ),
            314 => 
            array (
                'id' => '315',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":258}',
            ),
            315 => 
            array (
                'id' => '316',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":259}',
            ),
            316 => 
            array (
                'id' => '317',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":260}',
            ),
            317 => 
            array (
                'id' => '318',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030004","nama":"Angi Anggraeni","import_id":2,"slug":"angi-anggraeni","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":54}',
            ),
            318 => 
            array (
                'id' => '319',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":261}',
            ),
            319 => 
            array (
                'id' => '320',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":262}',
            ),
            320 => 
            array (
                'id' => '321',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":263}',
            ),
            321 => 
            array (
                'id' => '322',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":264}',
            ),
            322 => 
            array (
                'id' => '323',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":265}',
            ),
            323 => 
            array (
                'id' => '324',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030005","nama":"Arif Muwahhid Kholilulloh","import_id":2,"slug":"arif-muwahhid-kholilulloh","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":55}',
            ),
            324 => 
            array (
                'id' => '325',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":266}',
            ),
            325 => 
            array (
                'id' => '326',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":267}',
            ),
            326 => 
            array (
                'id' => '327',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":268}',
            ),
            327 => 
            array (
                'id' => '328',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":269}',
            ),
            328 => 
            array (
                'id' => '329',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":270}',
            ),
            329 => 
            array (
                'id' => '330',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030006","nama":"Ayuni Putri Utami","import_id":2,"slug":"ayuni-putri-utami","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":56}',
            ),
            330 => 
            array (
                'id' => '331',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":271}',
            ),
            331 => 
            array (
                'id' => '332',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":272}',
            ),
            332 => 
            array (
                'id' => '333',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":273}',
            ),
            333 => 
            array (
                'id' => '334',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":274}',
            ),
            334 => 
            array (
                'id' => '335',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":275}',
            ),
            335 => 
            array (
                'id' => '336',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030007","nama":"Barik Abdan Taqiyan","import_id":2,"slug":"barik-abdan-taqiyan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":57}',
            ),
            336 => 
            array (
                'id' => '337',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":276}',
            ),
            337 => 
            array (
                'id' => '338',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":277}',
            ),
            338 => 
            array (
                'id' => '339',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":278}',
            ),
            339 => 
            array (
                'id' => '340',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":279}',
            ),
            340 => 
            array (
                'id' => '341',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":280}',
            ),
            341 => 
            array (
                'id' => '342',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030008","nama":"Bily Irawan","import_id":2,"slug":"bily-irawan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":58}',
            ),
            342 => 
            array (
                'id' => '343',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":281}',
            ),
            343 => 
            array (
                'id' => '344',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":282}',
            ),
            344 => 
            array (
                'id' => '345',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":283}',
            ),
            345 => 
            array (
                'id' => '346',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":284}',
            ),
            346 => 
            array (
                'id' => '347',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":285}',
            ),
            347 => 
            array (
                'id' => '348',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030009","nama":"Cecep Sudrajat","import_id":2,"slug":"cecep-sudrajat","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":59}',
            ),
            348 => 
            array (
                'id' => '349',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":286}',
            ),
            349 => 
            array (
                'id' => '350',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":287}',
            ),
            350 => 
            array (
                'id' => '351',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":288}',
            ),
            351 => 
            array (
                'id' => '352',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":289}',
            ),
            352 => 
            array (
                'id' => '353',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":290}',
            ),
            353 => 
            array (
                'id' => '354',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030010","nama":"Chenley Fasawwa","import_id":2,"slug":"chenley-fasawwa","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":60}',
            ),
            354 => 
            array (
                'id' => '355',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":291}',
            ),
            355 => 
            array (
                'id' => '356',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":292}',
            ),
            356 => 
            array (
                'id' => '357',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":293}',
            ),
            357 => 
            array (
                'id' => '358',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":294}',
            ),
            358 => 
            array (
                'id' => '359',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":295}',
            ),
            359 => 
            array (
                'id' => '360',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030011","nama":"Deni Armansyah","import_id":2,"slug":"deni-armansyah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":61}',
            ),
            360 => 
            array (
                'id' => '361',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":296}',
            ),
            361 => 
            array (
                'id' => '362',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":297}',
            ),
            362 => 
            array (
                'id' => '363',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":298}',
            ),
            363 => 
            array (
                'id' => '364',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":299}',
            ),
            364 => 
            array (
                'id' => '365',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":300}',
            ),
            365 => 
            array (
                'id' => '366',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030012","nama":"Dhiya\' Fajri Tuhfahillah","import_id":2,"slug":"dhiya-fajri-tuhfahillah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":62}',
            ),
            366 => 
            array (
                'id' => '367',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":301}',
            ),
            367 => 
            array (
                'id' => '368',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":302}',
            ),
            368 => 
            array (
                'id' => '369',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":303}',
            ),
            369 => 
            array (
                'id' => '370',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":304}',
            ),
            370 => 
            array (
                'id' => '371',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":305}',
            ),
            371 => 
            array (
                'id' => '372',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030013","nama":"Dimas Maulana","import_id":2,"slug":"dimas-maulana","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":63}',
            ),
            372 => 
            array (
                'id' => '373',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":306}',
            ),
            373 => 
            array (
                'id' => '374',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":307}',
            ),
            374 => 
            array (
                'id' => '375',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":308}',
            ),
            375 => 
            array (
                'id' => '376',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":309}',
            ),
            376 => 
            array (
                'id' => '377',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":310}',
            ),
            377 => 
            array (
                'id' => '378',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030014","nama":"Dini Gustiani","import_id":2,"slug":"dini-gustiani","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":64}',
            ),
            378 => 
            array (
                'id' => '379',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":311}',
            ),
            379 => 
            array (
                'id' => '380',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":312}',
            ),
            380 => 
            array (
                'id' => '381',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":313}',
            ),
            381 => 
            array (
                'id' => '382',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":314}',
            ),
            382 => 
            array (
                'id' => '383',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":315}',
            ),
            383 => 
            array (
                'id' => '384',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030015","nama":"Fiki Hanggara","import_id":2,"slug":"fiki-hanggara","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":65}',
            ),
            384 => 
            array (
                'id' => '385',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":316}',
            ),
            385 => 
            array (
                'id' => '386',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":317}',
            ),
            386 => 
            array (
                'id' => '387',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":318}',
            ),
            387 => 
            array (
                'id' => '388',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":319}',
            ),
            388 => 
            array (
                'id' => '389',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":320}',
            ),
            389 => 
            array (
                'id' => '390',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030016","nama":"Fraya Fanisa Sugita","import_id":2,"slug":"fraya-fanisa-sugita","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":66}',
            ),
            390 => 
            array (
                'id' => '391',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":321}',
            ),
            391 => 
            array (
                'id' => '392',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":322}',
            ),
            392 => 
            array (
                'id' => '393',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":323}',
            ),
            393 => 
            array (
                'id' => '394',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":324}',
            ),
            394 => 
            array (
                'id' => '395',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":325}',
            ),
            395 => 
            array (
                'id' => '396',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030017","nama":"Fulgentius Sendy Nur Ridwan","import_id":2,"slug":"fulgentius-sendy-nur-ridwan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":67}',
            ),
            396 => 
            array (
                'id' => '397',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":326}',
            ),
            397 => 
            array (
                'id' => '398',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":327}',
            ),
            398 => 
            array (
                'id' => '399',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":328}',
            ),
            399 => 
            array (
                'id' => '400',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":329}',
            ),
            400 => 
            array (
                'id' => '401',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":330}',
            ),
            401 => 
            array (
                'id' => '402',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030018","nama":"Guntur Nur Afandi","import_id":2,"slug":"guntur-nur-afandi","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":68}',
            ),
            402 => 
            array (
                'id' => '403',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":331}',
            ),
            403 => 
            array (
                'id' => '404',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":332}',
            ),
            404 => 
            array (
                'id' => '405',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":333}',
            ),
            405 => 
            array (
                'id' => '406',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":334}',
            ),
            406 => 
            array (
                'id' => '407',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":335}',
            ),
            407 => 
            array (
                'id' => '408',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030019","nama":"Halimatus\'Sadiyah","import_id":2,"slug":"halimatus-sadiyah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":69}',
            ),
            408 => 
            array (
                'id' => '409',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":336}',
            ),
            409 => 
            array (
                'id' => '410',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":337}',
            ),
            410 => 
            array (
                'id' => '411',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":338}',
            ),
            411 => 
            array (
                'id' => '412',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":339}',
            ),
            412 => 
            array (
                'id' => '413',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":340}',
            ),
            413 => 
            array (
                'id' => '414',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030020","nama":"Harry Saravi Sehati Siregar","import_id":2,"slug":"harry-saravi-sehati-siregar","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":70}',
            ),
            414 => 
            array (
                'id' => '415',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":341}',
            ),
            415 => 
            array (
                'id' => '416',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":342}',
            ),
            416 => 
            array (
                'id' => '417',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":343}',
            ),
            417 => 
            array (
                'id' => '418',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":344}',
            ),
            418 => 
            array (
                'id' => '419',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":345}',
            ),
            419 => 
            array (
                'id' => '420',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030021","nama":"Intan Satia Hotimah","import_id":2,"slug":"intan-satia-hotimah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":71}',
            ),
            420 => 
            array (
                'id' => '421',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":346}',
            ),
            421 => 
            array (
                'id' => '422',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":347}',
            ),
            422 => 
            array (
                'id' => '423',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":348}',
            ),
            423 => 
            array (
                'id' => '424',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":349}',
            ),
            424 => 
            array (
                'id' => '425',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":350}',
            ),
            425 => 
            array (
                'id' => '426',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030022","nama":"Kiki Rahmatuloh","import_id":2,"slug":"kiki-rahmatuloh","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":72}',
            ),
            426 => 
            array (
                'id' => '427',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":351}',
            ),
            427 => 
            array (
                'id' => '428',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":352}',
            ),
            428 => 
            array (
                'id' => '429',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":353}',
            ),
            429 => 
            array (
                'id' => '430',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":354}',
            ),
            430 => 
            array (
                'id' => '431',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":355}',
            ),
            431 => 
            array (
                'id' => '432',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030023","nama":"Kristi Rahmawati","import_id":2,"slug":"kristi-rahmawati","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":73}',
            ),
            432 => 
            array (
                'id' => '433',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":356}',
            ),
            433 => 
            array (
                'id' => '434',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":357}',
            ),
            434 => 
            array (
                'id' => '435',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":358}',
            ),
            435 => 
            array (
                'id' => '436',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":359}',
            ),
            436 => 
            array (
                'id' => '437',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":360}',
            ),
            437 => 
            array (
                'id' => '438',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030024","nama":"Laudi Kayluna Maisha","import_id":2,"slug":"laudi-kayluna-maisha","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":74}',
            ),
            438 => 
            array (
                'id' => '439',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":361}',
            ),
            439 => 
            array (
                'id' => '440',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":362}',
            ),
            440 => 
            array (
                'id' => '441',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":363}',
            ),
            441 => 
            array (
                'id' => '442',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":364}',
            ),
            442 => 
            array (
                'id' => '443',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":365}',
            ),
            443 => 
            array (
                'id' => '444',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030025","nama":"M Iqbal Permana","import_id":2,"slug":"m-iqbal-permana","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":75}',
            ),
            444 => 
            array (
                'id' => '445',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":366}',
            ),
            445 => 
            array (
                'id' => '446',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":367}',
            ),
            446 => 
            array (
                'id' => '447',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":368}',
            ),
            447 => 
            array (
                'id' => '448',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":369}',
            ),
            448 => 
            array (
                'id' => '449',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":370}',
            ),
            449 => 
            array (
                'id' => '450',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030026","nama":"Mardhita Amilatu Rahmawati","import_id":2,"slug":"mardhita-amilatu-rahmawati","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":76}',
            ),
            450 => 
            array (
                'id' => '451',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":371}',
            ),
            451 => 
            array (
                'id' => '452',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":372}',
            ),
            452 => 
            array (
                'id' => '453',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":373}',
            ),
            453 => 
            array (
                'id' => '454',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":374}',
            ),
            454 => 
            array (
                'id' => '455',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":375}',
            ),
            455 => 
            array (
                'id' => '456',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030027","nama":"Michael","import_id":2,"slug":"michael","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":77}',
            ),
            456 => 
            array (
                'id' => '457',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":376}',
            ),
            457 => 
            array (
                'id' => '458',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":377}',
            ),
            458 => 
            array (
                'id' => '459',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":378}',
            ),
            459 => 
            array (
                'id' => '460',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":379}',
            ),
            460 => 
            array (
                'id' => '461',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":380}',
            ),
            461 => 
            array (
                'id' => '462',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030028","nama":"Miko Alistair Davian","import_id":2,"slug":"miko-alistair-davian","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":78}',
            ),
            462 => 
            array (
                'id' => '463',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":381}',
            ),
            463 => 
            array (
                'id' => '464',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":382}',
            ),
            464 => 
            array (
                'id' => '465',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":383}',
            ),
            465 => 
            array (
                'id' => '466',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":384}',
            ),
            466 => 
            array (
                'id' => '467',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":385}',
            ),
            467 => 
            array (
                'id' => '468',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030029","nama":"Moch Idris Daryadi","import_id":2,"slug":"moch-idris-daryadi","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":79}',
            ),
            468 => 
            array (
                'id' => '469',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":386}',
            ),
            469 => 
            array (
                'id' => '470',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":387}',
            ),
            470 => 
            array (
                'id' => '471',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":388}',
            ),
            471 => 
            array (
                'id' => '472',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":389}',
            ),
            472 => 
            array (
                'id' => '473',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":390}',
            ),
            473 => 
            array (
                'id' => '474',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030030","nama":"Muhamad Dhaffa Ardisa Pratama","import_id":2,"slug":"muhamad-dhaffa-ardisa-pratama","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":80}',
            ),
            474 => 
            array (
                'id' => '475',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":391}',
            ),
            475 => 
            array (
                'id' => '476',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":392}',
            ),
            476 => 
            array (
                'id' => '477',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":393}',
            ),
            477 => 
            array (
                'id' => '478',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":394}',
            ),
            478 => 
            array (
                'id' => '479',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":395}',
            ),
            479 => 
            array (
                'id' => '480',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030031","nama":"Muhamad Fadil Abdilah","import_id":2,"slug":"muhamad-fadil-abdilah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":81}',
            ),
            480 => 
            array (
                'id' => '481',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":396}',
            ),
            481 => 
            array (
                'id' => '482',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":397}',
            ),
            482 => 
            array (
                'id' => '483',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":398}',
            ),
            483 => 
            array (
                'id' => '484',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":399}',
            ),
            484 => 
            array (
                'id' => '485',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":400}',
            ),
            485 => 
            array (
                'id' => '486',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030032","nama":"Muhamad Syaeful Siddiq","import_id":2,"slug":"muhamad-syaeful-siddiq","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":82}',
            ),
            486 => 
            array (
                'id' => '487',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":401}',
            ),
            487 => 
            array (
                'id' => '488',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":402}',
            ),
            488 => 
            array (
                'id' => '489',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":403}',
            ),
            489 => 
            array (
                'id' => '490',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":404}',
            ),
            490 => 
            array (
                'id' => '491',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":405}',
            ),
            491 => 
            array (
                'id' => '492',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030033","nama":"Muhammad Azriel Iriandica Pratama","import_id":2,"slug":"muhammad-azriel-iriandica-pratama","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":83}',
            ),
            492 => 
            array (
                'id' => '493',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":406}',
            ),
            493 => 
            array (
                'id' => '494',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":407}',
            ),
            494 => 
            array (
                'id' => '495',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":408}',
            ),
            495 => 
            array (
                'id' => '496',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":409}',
            ),
            496 => 
            array (
                'id' => '497',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":410}',
            ),
            497 => 
            array (
                'id' => '498',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030034","nama":"Muhammad Dzakhwan Azizan","import_id":2,"slug":"muhammad-dzakhwan-azizan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":84}',
            ),
            498 => 
            array (
                'id' => '499',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":411}',
            ),
            499 => 
            array (
                'id' => '500',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":412}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => '501',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":413}',
            ),
            1 => 
            array (
                'id' => '502',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":414}',
            ),
            2 => 
            array (
                'id' => '503',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":415}',
            ),
            3 => 
            array (
                'id' => '504',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030035","nama":"Muhammad Fahrurrozzi Abiyasa","import_id":2,"slug":"muhammad-fahrurrozzi-abiyasa","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":85}',
            ),
            4 => 
            array (
                'id' => '505',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":416}',
            ),
            5 => 
            array (
                'id' => '506',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":417}',
            ),
            6 => 
            array (
                'id' => '507',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":418}',
            ),
            7 => 
            array (
                'id' => '508',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":419}',
            ),
            8 => 
            array (
                'id' => '509',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":420}',
            ),
            9 => 
            array (
                'id' => '510',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030036","nama":"Muhammad Rhamdhan","import_id":2,"slug":"muhammad-rhamdhan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":86}',
            ),
            10 => 
            array (
                'id' => '511',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":421}',
            ),
            11 => 
            array (
                'id' => '512',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":422}',
            ),
            12 => 
            array (
                'id' => '513',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":423}',
            ),
            13 => 
            array (
                'id' => '514',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":424}',
            ),
            14 => 
            array (
                'id' => '515',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":425}',
            ),
            15 => 
            array (
                'id' => '516',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030037","nama":"Naba Syifaul Qolbi Safrudin","import_id":2,"slug":"naba-syifaul-qolbi-safrudin","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":87}',
            ),
            16 => 
            array (
                'id' => '517',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":426}',
            ),
            17 => 
            array (
                'id' => '518',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":427}',
            ),
            18 => 
            array (
                'id' => '519',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":428}',
            ),
            19 => 
            array (
                'id' => '520',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":429}',
            ),
            20 => 
            array (
                'id' => '521',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":430}',
            ),
            21 => 
            array (
                'id' => '522',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030038","nama":"Nawwaroh Ardiyah","import_id":2,"slug":"nawwaroh-ardiyah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":88}',
            ),
            22 => 
            array (
                'id' => '523',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":431}',
            ),
            23 => 
            array (
                'id' => '524',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":432}',
            ),
            24 => 
            array (
                'id' => '525',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":433}',
            ),
            25 => 
            array (
                'id' => '526',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":434}',
            ),
            26 => 
            array (
                'id' => '527',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":435}',
            ),
            27 => 
            array (
                'id' => '528',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030039","nama":"Nindi Trisni Noer Solihat","import_id":2,"slug":"nindi-trisni-noer-solihat","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":89}',
            ),
            28 => 
            array (
                'id' => '529',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":436}',
            ),
            29 => 
            array (
                'id' => '530',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":437}',
            ),
            30 => 
            array (
                'id' => '531',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":438}',
            ),
            31 => 
            array (
                'id' => '532',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":439}',
            ),
            32 => 
            array (
                'id' => '533',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":440}',
            ),
            33 => 
            array (
                'id' => '534',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030040","nama":"Oktavianus Aggi Nugroho","import_id":2,"slug":"oktavianus-aggi-nugroho","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":90}',
            ),
            34 => 
            array (
                'id' => '535',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":441}',
            ),
            35 => 
            array (
                'id' => '536',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":442}',
            ),
            36 => 
            array (
                'id' => '537',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":443}',
            ),
            37 => 
            array (
                'id' => '538',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":444}',
            ),
            38 => 
            array (
                'id' => '539',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":445}',
            ),
            39 => 
            array (
                'id' => '540',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030041","nama":"Pramada Hadha Mahardika","import_id":2,"slug":"pramada-hadha-mahardika","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":91}',
            ),
            40 => 
            array (
                'id' => '541',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":446}',
            ),
            41 => 
            array (
                'id' => '542',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":447}',
            ),
            42 => 
            array (
                'id' => '543',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":448}',
            ),
            43 => 
            array (
                'id' => '544',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":449}',
            ),
            44 => 
            array (
                'id' => '545',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":450}',
            ),
            45 => 
            array (
                'id' => '546',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030042","nama":"Raafi Ramadhan","import_id":2,"slug":"raafi-ramadhan","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":92}',
            ),
            46 => 
            array (
                'id' => '547',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":451}',
            ),
            47 => 
            array (
                'id' => '548',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":452}',
            ),
            48 => 
            array (
                'id' => '549',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":453}',
            ),
            49 => 
            array (
                'id' => '550',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":454}',
            ),
            50 => 
            array (
                'id' => '551',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":92,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":455}',
            ),
            51 => 
            array (
                'id' => '552',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030043","nama":"Rachmat Hidayatullah","import_id":2,"slug":"rachmat-hidayatullah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":93}',
            ),
            52 => 
            array (
                'id' => '553',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":456}',
            ),
            53 => 
            array (
                'id' => '554',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":457}',
            ),
            54 => 
            array (
                'id' => '555',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":458}',
            ),
            55 => 
            array (
                'id' => '556',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":459}',
            ),
            56 => 
            array (
                'id' => '557',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":93,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":460}',
            ),
            57 => 
            array (
                'id' => '558',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030044","nama":"Raisa Hasmalita","import_id":2,"slug":"raisa-hasmalita","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":94}',
            ),
            58 => 
            array (
                'id' => '559',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":461}',
            ),
            59 => 
            array (
                'id' => '560',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":462}',
            ),
            60 => 
            array (
                'id' => '561',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":463}',
            ),
            61 => 
            array (
                'id' => '562',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":464}',
            ),
            62 => 
            array (
                'id' => '563',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":94,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":465}',
            ),
            63 => 
            array (
                'id' => '564',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030045","nama":"Raka Rahmat Gumelar","import_id":2,"slug":"raka-rahmat-gumelar","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":95}',
            ),
            64 => 
            array (
                'id' => '565',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":1,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":466}',
            ),
            65 => 
            array (
                'id' => '566',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":467}',
            ),
            66 => 
            array (
                'id' => '567',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":468}',
            ),
            67 => 
            array (
                'id' => '568',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":469}',
            ),
            68 => 
            array (
                'id' => '569',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":95,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":470}',
            ),
            69 => 
            array (
                'id' => '570',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030046","nama":"Restu Ramania","import_id":2,"slug":"restu-ramania","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":96}',
            ),
            70 => 
            array (
                'id' => '571',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":471}',
            ),
            71 => 
            array (
                'id' => '572',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":472}',
            ),
            72 => 
            array (
                'id' => '573',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":473}',
            ),
            73 => 
            array (
                'id' => '574',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":4,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":474}',
            ),
            74 => 
            array (
                'id' => '575',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":96,"kriteria_id":5,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":475}',
            ),
            75 => 
            array (
                'id' => '576',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030047","nama":"Rizky Doni Nurdiansyah","import_id":2,"slug":"rizky-doni-nurdiansyah","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":97}',
            ),
            76 => 
            array (
                'id' => '577',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":476}',
            ),
            77 => 
            array (
                'id' => '578',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":477}',
            ),
            78 => 
            array (
                'id' => '579',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":3,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":478}',
            ),
            79 => 
            array (
                'id' => '580',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":479}',
            ),
            80 => 
            array (
                'id' => '581',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":97,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":480}',
            ),
            81 => 
            array (
                'id' => '582',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030048","nama":"Sri Setiawati","import_id":2,"slug":"sri-setiawati","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":98}',
            ),
            82 => 
            array (
                'id' => '583',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":1,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":481}',
            ),
            83 => 
            array (
                'id' => '584',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":482}',
            ),
            84 => 
            array (
                'id' => '585',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":483}',
            ),
            85 => 
            array (
                'id' => '586',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":484}',
            ),
            86 => 
            array (
                'id' => '587',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":98,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":485}',
            ),
            87 => 
            array (
                'id' => '588',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030049","nama":"Tito Nugi Syaputra","import_id":2,"slug":"tito-nugi-syaputra","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":99}',
            ),
            88 => 
            array (
                'id' => '589',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":1,"nilai":"100","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":486}',
            ),
            89 => 
            array (
                'id' => '590',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":2,"nilai":"0","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":487}',
            ),
            90 => 
            array (
                'id' => '591',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":488}',
            ),
            91 => 
            array (
                'id' => '592',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":489}',
            ),
            92 => 
            array (
                'id' => '593',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:51',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":99,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:51.000000Z","created_at":"2023-07-14T12:40:51.000000Z","id":490}',
            ),
            93 => 
            array (
                'id' => '594',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030050","nama":"Vinka Priliani Rianaputri","import_id":2,"slug":"vinka-priliani-rianaputri","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":100}',
            ),
            94 => 
            array (
                'id' => '595',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":491}',
            ),
            95 => 
            array (
                'id' => '596',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":2,"nilai":"70","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":492}',
            ),
            96 => 
            array (
                'id' => '597',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":3,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":493}',
            ),
            97 => 
            array (
                'id' => '598',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":4,"nilai":"70","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":494}',
            ),
            98 => 
            array (
                'id' => '599',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":100,"kriteria_id":5,"nilai":"70","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":495}',
            ),
            99 => 
            array (
                'id' => '600',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nopeserta":"CFTG0030051","nama":"Zena Jasmine Ghaissany Nanlohy","import_id":2,"slug":"zena-jasmine-ghaissany-nanlohy","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":101}',
            ),
            100 => 
            array (
                'id' => '601',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":1,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":496}',
            ),
            101 => 
            array (
                'id' => '602',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":2,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":497}',
            ),
            102 => 
            array (
                'id' => '603',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":3,"nilai":"70","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":498}',
            ),
            103 => 
            array (
                'id' => '604',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":4,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":499}',
            ),
            104 => 
            array (
                'id' => '605',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":101,"kriteria_id":5,"nilai":"80","updated_at":"2023-07-14T12:40:52.000000Z","created_at":"2023-07-14T12:40:52.000000Z","id":500}',
            ),
            105 => 
            array (
                'id' => '606',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:40:52',
                'table_name' => 'import_alternatif',
                'log_type' => 'edit',
                'data' => '{"nama":"Data Testing","slug":"data-testing","updated_at":"2023-07-14 19:40:51","created_at":"2023-07-14 19:40:51","id":2}',
            ),
            106 => 
            array (
                'id' => '607',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":null,"updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":501}',
            ),
            107 => 
            array (
                'id' => '608',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":502}',
            ),
            108 => 
            array (
                'id' => '609',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":503}',
            ),
            109 => 
            array (
                'id' => '610',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":504}',
            ),
            110 => 
            array (
                'id' => '611',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:08',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T12:41:08.000000Z","created_at":"2023-07-14T12:41:08.000000Z","id":505}',
            ),
            111 => 
            array (
                'id' => '612',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:11',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:11.000000Z","created_at":"2023-07-14T12:41:11.000000Z","id":506}',
            ),
            112 => 
            array (
                'id' => '613',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T12:41:12.000000Z","created_at":"2023-07-14T12:41:12.000000Z","id":507}',
            ),
            113 => 
            array (
                'id' => '614',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:12.000000Z","created_at":"2023-07-14T12:41:12.000000Z","id":508}',
            ),
            114 => 
            array (
                'id' => '615',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T12:41:12.000000Z","created_at":"2023-07-14T12:41:12.000000Z","id":509}',
            ),
            115 => 
            array (
                'id' => '616',
                'user_id' => '1',
                'log_date' => '2023-07-14 19:41:12',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T12:41:12.000000Z","created_at":"2023-07-14T12:41:12.000000Z","id":510}',
            ),
            116 => 
            array (
                'id' => '617',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif',
                'log_type' => 'edit',
                'data' => '{"id":52,"nopeserta":"CFTG0030002","nama":"Adrian Chandika","slug":"adrian-chandika","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            117 => 
            array (
                'id' => '618',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":511}',
            ),
            118 => 
            array (
                'id' => '619',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":512}',
            ),
            119 => 
            array (
                'id' => '620',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":513}',
            ),
            120 => 
            array (
                'id' => '621',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":514}',
            ),
            121 => 
            array (
                'id' => '622',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:48',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T13:26:48.000000Z","created_at":"2023-07-14T13:26:48.000000Z","id":515}',
            ),
            122 => 
            array (
                'id' => '623',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif',
                'log_type' => 'edit',
                'data' => '{"id":52,"nopeserta":"CFTG0030002","nama":"Adrian Chandikaa","slug":"adrian-chandikaa","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 20:26:48"}',
            ),
            123 => 
            array (
                'id' => '624',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":516}',
            ),
            124 => 
            array (
                'id' => '625',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":517}',
            ),
            125 => 
            array (
                'id' => '626',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":518}',
            ),
            126 => 
            array (
                'id' => '627',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":519}',
            ),
            127 => 
            array (
                'id' => '628',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:54',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T13:26:54.000000Z","created_at":"2023-07-14T13:26:54.000000Z","id":520}',
            ),
            128 => 
            array (
                'id' => '629',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif',
                'log_type' => 'edit',
                'data' => '{"id":52,"nopeserta":"CFTG00300021","nama":"Adrian Chandika","slug":"adrian-chandika","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 20:26:54"}',
            ),
            129 => 
            array (
                'id' => '630',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":521}',
            ),
            130 => 
            array (
                'id' => '631',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":52,"nilai":"100","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":522}',
            ),
            131 => 
            array (
                'id' => '632',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":523}',
            ),
            132 => 
            array (
                'id' => '633',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":52,"nilai":"0","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":524}',
            ),
            133 => 
            array (
                'id' => '634',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:26:59',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":52,"nilai":"70","updated_at":"2023-07-14T13:26:59.000000Z","created_at":"2023-07-14T13:26:59.000000Z","id":525}',
            ),
            134 => 
            array (
                'id' => '635',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"1","nopeserta":"1","slug":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":102}',
            ),
            135 => 
            array (
                'id' => '636',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":526}',
            ),
            136 => 
            array (
                'id' => '637',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":527}',
            ),
            137 => 
            array (
                'id' => '638',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":528}',
            ),
            138 => 
            array (
                'id' => '639',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":529}',
            ),
            139 => 
            array (
                'id' => '640',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:31:28',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"alternatif_id":102,"nilai":"1","updated_at":"2023-07-14T13:31:28.000000Z","created_at":"2023-07-14T13:31:28.000000Z","id":530}',
            ),
            140 => 
            array (
                'id' => '641',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:33:16',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":102,"nopeserta":"1","nama":"1","slug":"1","import_id":null,"created_at":"2023-07-14 20:31:28","updated_at":"2023-07-14 20:31:28"}',
            ),
            141 => 
            array (
                'id' => '642',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:33:39',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":52,"nopeserta":"CFTG0030002","nama":"Adrian Chandika","slug":"adrian-chandika","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 20:26:59"}',
            ),
            142 => 
            array (
                'id' => '643',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:34:23',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":53,"nopeserta":"CFTG0030003","nama":"Andre Al Mahdi","slug":"andre-al-mahdi","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            143 => 
            array (
                'id' => '644',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:34:44',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":54,"nopeserta":"CFTG0030004","nama":"Angi Anggraeni","slug":"angi-anggraeni","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            144 => 
            array (
                'id' => '645',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:34:47',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":55,"nopeserta":"CFTG0030005","nama":"Arif Muwahhid Kholilulloh","slug":"arif-muwahhid-kholilulloh","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            145 => 
            array (
                'id' => '646',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:34:51',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":56,"nopeserta":"CFTG0030006","nama":"Ayuni Putri Utami","slug":"ayuni-putri-utami","import_id":2,"created_at":"2023-07-14 19:40:51","updated_at":"2023-07-14 19:40:51"}',
            ),
            146 => 
            array (
                'id' => '647',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:01',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":449,"parent_id":null,"title":"Alternatif","icon":"fas fa-map-marked-alt","route":"admin.alternatif","sequence":3,"active":1,"type":1,"created_at":"2023-07-01 18:16:35","updated_at":"2023-07-01 18:17:01"}',
            ),
            147 => 
            array (
                'id' => '648',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:01',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":449,"updated_at":"2023-07-14T13:35:01.000000Z","created_at":"2023-07-14T13:35:01.000000Z","id":350}',
            ),
            148 => 
            array (
                'id' => '649',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:05',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":450,"parent_id":null,"title":"Alternatif Nilai","icon":"fas fa-edit","route":"admin.alternatif.nilai","sequence":4,"active":1,"type":1,"created_at":"2023-07-01 18:17:59","updated_at":"2023-07-01 18:18:22"}',
            ),
            149 => 
            array (
                'id' => '650',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:05',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":450,"updated_at":"2023-07-14T13:35:05.000000Z","created_at":"2023-07-14T13:35:05.000000Z","id":351}',
            ),
            150 => 
            array (
                'id' => '651',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:11',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":"admin.menu.admin","sequence":16,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-07-01 23:02:01"}',
            ),
            151 => 
            array (
                'id' => '652',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:11',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":361,"updated_at":"2023-07-14T13:35:11.000000Z","created_at":"2023-07-14T13:35:11.000000Z","id":352}',
            ),
            152 => 
            array (
                'id' => '653',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:20',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":9,"active":1,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-07-01 23:02:01"}',
            ),
            153 => 
            array (
                'id' => '654',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:20',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":397,"updated_at":"2023-07-14T13:35:20.000000Z","created_at":"2023-07-14T13:35:20.000000Z","id":353}',
            ),
            154 => 
            array (
                'id' => '655',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:26',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":6,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-07-01 23:02:01"}',
            ),
            155 => 
            array (
                'id' => '656',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:26',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":411,"updated_at":"2023-07-14T13:35:26.000000Z","created_at":"2023-07-14T13:35:26.000000Z","id":354}',
            ),
            156 => 
            array (
                'id' => '657',
                'user_id' => '1',
                'log_date' => '2023-07-14 20:35:38',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":2,"name":"Yogi Setiawan","email":"yogis@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$U8mC5GglQoGnaCsa79.5l.psRfQmiKn1ciwIC2xM6GqOAst383idi","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":"2023-07-01 23:09:58","updated_at":"2023-07-01 23:09:58"}',
            ),
            157 => 
            array (
                'id' => '658',
                'user_id' => '1',
                'log_date' => '2023-07-14 21:27:23',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.222","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.79"}',
            ),
            158 => 
            array (
                'id' => '659',
                'user_id' => '1',
                'log_date' => '2023-07-14 21:27:50',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Super Admin","email":"superadmin@gmail.com","foto":"2023071418550373.png","username":null,"email_verified_at":null,"password":"$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"eCZEvZ0D4HfRmLneUdM6PJ7ncssSYiBG9CZZZImJZyXKqP7q50NlXJJ2fXeY","created_at":null,"updated_at":"2023-07-14 18:55:03"}',
            ),
            159 => 
            array (
                'id' => '660',
                'user_id' => '1',
                'log_date' => '2023-07-14 21:28:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.222","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.79"}',
            ),
            160 => 
            array (
                'id' => '661',
                'user_id' => '1',
                'log_date' => '2023-07-14 22:56:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"180.244.128.134","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.79"}',
            ),
            161 => 
            array (
                'id' => '662',
                'user_id' => '1',
                'log_date' => '2023-07-14 23:05:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Super Admin","email":"superadmin@gmail.com","foto":"2023071418550373.png","username":null,"email_verified_at":null,"password":"$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"b7SfoUCowCFcA4CL1fG8KKme80NBhx7lyN8W5lEEhGAqIqjTnkJOATwWPDGN","created_at":null,"updated_at":"2023-07-14 18:55:03"}',
            ),
            162 => 
            array (
                'id' => '663',
                'user_id' => '1',
                'log_date' => '2023-07-15 00:47:42',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Super Admin","email":"superadmin@gmail.com","active":"1","updated_at":"2023-07-14T17:47:42.000000Z","created_at":"2023-07-14T17:47:42.000000Z","id":2,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=S+A&color=7F9CF5&background=EBF4FF"}',
            ),
            163 => 
            array (
                'id' => '664',
                'user_id' => '1',
                'log_date' => '2023-07-15 00:47:52',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Farhan Aziz","email":"azizfarhan72@gmail.com","foto":"2023071423045849.png","username":null,"email_verified_at":null,"password":"$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"b7SfoUCowCFcA4CL1fG8KKme80NBhx7lyN8W5lEEhGAqIqjTnkJOATwWPDGN","created_at":null,"updated_at":"2023-07-14 23:05:05"}',
            ),
            164 => 
            array (
                'id' => '665',
                'user_id' => '1',
                'log_date' => '2023-07-15 00:48:00',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Farhan Aziz","email":"azizfarhan72@gmail.com","foto":"2023071423045849.png","username":null,"email_verified_at":null,"password":"$2y$10$GjjsqWoOsKZJrTNlVmBnwOn3xbU2yT\\/RTNLGKwyCkZMvM2Ml18hTi","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"b7SfoUCowCFcA4CL1fG8KKme80NBhx7lyN8W5lEEhGAqIqjTnkJOATwWPDGN","created_at":null,"updated_at":"2023-07-15 00:47:52"}',
            ),
            165 => 
            array (
                'id' => '666',
                'user_id' => '1',
                'log_date' => '2023-07-15 00:48:08',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"180.244.128.134","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.79"}',
            ),
            166 => 
            array (
                'id' => '667',
                'user_id' => '1',
                'log_date' => '2023-07-15 00:48:32',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Farhan Aziz","email":"azizfarhan72@gmail.com","foto":"2023071423045849.png","username":null,"email_verified_at":null,"password":"$2y$10$GjjsqWoOsKZJrTNlVmBnwOn3xbU2yT\\/RTNLGKwyCkZMvM2Ml18hTi","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"DlYh2PlMu8t0YwgsDRHnqlsJi99KHweFdZ1qtp18J1TThAaLaHxWny4ELQiT","created_at":null,"updated_at":"2023-07-15 00:47:52"}',
            ),
            167 => 
            array (
                'id' => '668',
                'user_id' => '1',
                'log_date' => '2023-07-17 21:41:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"36.79.169.243","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.82"}',
            ),
            168 => 
            array (
                'id' => '669',
                'user_id' => '1',
                'log_date' => '2023-07-17 21:52:38',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Bagas","email":"bagas@gmail.com","active":"1","updated_at":"2023-07-17T14:52:38.000000Z","created_at":"2023-07-17T14:52:38.000000Z","id":3,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=B&color=7F9CF5&background=EBF4FF"}',
            ),
            169 => 
            array (
                'id' => '670',
                'user_id' => '3',
                'log_date' => '2023-07-17 21:54:13',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.85.219","user_agent":"Mozilla\\/5.0 (Linux; Android 9; CPH2015) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.5735.196 Mobile Safari\\/537.36 OPR\\/76.2.4027.73374"}',
            ),
            170 => 
            array (
                'id' => '671',
                'user_id' => '1',
                'log_date' => '2023-07-18 02:46:56',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"36.79.169.243","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.82"}',
            ),
            171 => 
            array (
                'id' => '672',
                'user_id' => '1',
                'log_date' => '2023-07-18 02:47:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Farhan Aziz","email":"azizfarhan72@gmail.com","foto":"2023071423045849.png","username":null,"email_verified_at":null,"password":"$2y$10$GjjsqWoOsKZJrTNlVmBnwOn3xbU2yT\\/RTNLGKwyCkZMvM2Ml18hTi","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"31rWJcyVLkCCEjSibDagvNIvLq3mpDj3d8CeIuC3xYwuA7UZAHTKpSNQcHKe","created_at":null,"updated_at":"2023-07-15 00:47:52"}',
            ),
            172 => 
            array (
                'id' => '673',
                'user_id' => '1',
                'log_date' => '2023-07-18 02:47:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"36.79.169.243","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.82"}',
            ),
            173 => 
            array (
                'id' => '674',
                'user_id' => '1',
                'log_date' => '2023-07-18 02:54:02',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":"1","bobot":"35","nama":"Absensi","slug":"absensi","kode":"C1","created_at":"2023-07-14 18:52:53","updated_at":"2023-07-14 18:52:53"}',
            ),
            174 => 
            array (
                'id' => '675',
                'user_id' => '1',
                'log_date' => '2023-07-18 02:54:08',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"bobot":"35","nama":"Absensi","kode":"C1","slug":"absensi","updated_at":"2023-07-17T19:54:08.000000Z","created_at":"2023-07-17T19:54:08.000000Z","id":6}',
            ),
            175 => 
            array (
                'id' => '676',
                'user_id' => '2',
                'log_date' => '2023-07-18 02:58:21',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.205","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36 Edg\\/114.0.1823.82"}',
            ),
        ));
        
        
    }
}