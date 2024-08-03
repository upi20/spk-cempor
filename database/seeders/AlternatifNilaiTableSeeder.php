<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlternatifNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alternatif_nilai')->delete();
        
        \DB::table('alternatif_nilai')->insert(array (
            0 => 
            array (
                'id' => 501,
                'alternatif_id' => 102,
                'kriteria_id' => 6,
                'nilai' => 58,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            1 => 
            array (
                'id' => 502,
                'alternatif_id' => 102,
                'kriteria_id' => 2,
                'nilai' => 80,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            2 => 
            array (
                'id' => 503,
                'alternatif_id' => 102,
                'kriteria_id' => 3,
                'nilai' => 53,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            3 => 
            array (
                'id' => 504,
                'alternatif_id' => 102,
                'kriteria_id' => 4,
                'nilai' => 100,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            4 => 
            array (
                'id' => 505,
                'alternatif_id' => 102,
                'kriteria_id' => 5,
                'nilai' => 59,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            5 => 
            array (
                'id' => 506,
                'alternatif_id' => 103,
                'kriteria_id' => 6,
                'nilai' => 63,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            6 => 
            array (
                'id' => 507,
                'alternatif_id' => 103,
                'kriteria_id' => 2,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            7 => 
            array (
                'id' => 508,
                'alternatif_id' => 103,
                'kriteria_id' => 3,
                'nilai' => 57,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            8 => 
            array (
                'id' => 509,
                'alternatif_id' => 103,
                'kriteria_id' => 4,
                'nilai' => 86,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            9 => 
            array (
                'id' => 510,
                'alternatif_id' => 103,
                'kriteria_id' => 5,
                'nilai' => 71,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            10 => 
            array (
                'id' => 511,
                'alternatif_id' => 104,
                'kriteria_id' => 6,
                'nilai' => 79,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            11 => 
            array (
                'id' => 512,
                'alternatif_id' => 104,
                'kriteria_id' => 2,
                'nilai' => 78,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            12 => 
            array (
                'id' => 513,
                'alternatif_id' => 104,
                'kriteria_id' => 3,
                'nilai' => 99,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            13 => 
            array (
                'id' => 514,
                'alternatif_id' => 104,
                'kriteria_id' => 4,
                'nilai' => 88,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            14 => 
            array (
                'id' => 515,
                'alternatif_id' => 104,
                'kriteria_id' => 5,
                'nilai' => 88,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            15 => 
            array (
                'id' => 516,
                'alternatif_id' => 105,
                'kriteria_id' => 6,
                'nilai' => 54,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            16 => 
            array (
                'id' => 517,
                'alternatif_id' => 105,
                'kriteria_id' => 2,
                'nilai' => 63,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            17 => 
            array (
                'id' => 518,
                'alternatif_id' => 105,
                'kriteria_id' => 3,
                'nilai' => 91,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            18 => 
            array (
                'id' => 519,
                'alternatif_id' => 105,
                'kriteria_id' => 4,
                'nilai' => 90,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            19 => 
            array (
                'id' => 520,
                'alternatif_id' => 105,
                'kriteria_id' => 5,
                'nilai' => 77,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            20 => 
            array (
                'id' => 521,
                'alternatif_id' => 106,
                'kriteria_id' => 6,
                'nilai' => 68,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            21 => 
            array (
                'id' => 522,
                'alternatif_id' => 106,
                'kriteria_id' => 2,
                'nilai' => 55,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            22 => 
            array (
                'id' => 523,
                'alternatif_id' => 106,
                'kriteria_id' => 3,
                'nilai' => 85,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            23 => 
            array (
                'id' => 524,
                'alternatif_id' => 106,
                'kriteria_id' => 4,
                'nilai' => 74,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            24 => 
            array (
                'id' => 525,
                'alternatif_id' => 106,
                'kriteria_id' => 5,
                'nilai' => 99,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            25 => 
            array (
                'id' => 526,
                'alternatif_id' => 107,
                'kriteria_id' => 6,
                'nilai' => 77,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            26 => 
            array (
                'id' => 527,
                'alternatif_id' => 107,
                'kriteria_id' => 2,
                'nilai' => 59,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            27 => 
            array (
                'id' => 528,
                'alternatif_id' => 107,
                'kriteria_id' => 3,
                'nilai' => 96,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            28 => 
            array (
                'id' => 529,
                'alternatif_id' => 107,
                'kriteria_id' => 4,
                'nilai' => 56,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            29 => 
            array (
                'id' => 530,
                'alternatif_id' => 107,
                'kriteria_id' => 5,
                'nilai' => 96,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            30 => 
            array (
                'id' => 531,
                'alternatif_id' => 108,
                'kriteria_id' => 6,
                'nilai' => 98,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            31 => 
            array (
                'id' => 532,
                'alternatif_id' => 108,
                'kriteria_id' => 2,
                'nilai' => 61,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            32 => 
            array (
                'id' => 533,
                'alternatif_id' => 108,
                'kriteria_id' => 3,
                'nilai' => 72,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            33 => 
            array (
                'id' => 534,
                'alternatif_id' => 108,
                'kriteria_id' => 4,
                'nilai' => 83,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            34 => 
            array (
                'id' => 535,
                'alternatif_id' => 108,
                'kriteria_id' => 5,
                'nilai' => 95,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            35 => 
            array (
                'id' => 536,
                'alternatif_id' => 109,
                'kriteria_id' => 6,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            36 => 
            array (
                'id' => 537,
                'alternatif_id' => 109,
                'kriteria_id' => 2,
                'nilai' => 54,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            37 => 
            array (
                'id' => 538,
                'alternatif_id' => 109,
                'kriteria_id' => 3,
                'nilai' => 87,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            38 => 
            array (
                'id' => 539,
                'alternatif_id' => 109,
                'kriteria_id' => 4,
                'nilai' => 74,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            39 => 
            array (
                'id' => 540,
                'alternatif_id' => 109,
                'kriteria_id' => 5,
                'nilai' => 61,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            40 => 
            array (
                'id' => 541,
                'alternatif_id' => 110,
                'kriteria_id' => 6,
                'nilai' => 64,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            41 => 
            array (
                'id' => 542,
                'alternatif_id' => 110,
                'kriteria_id' => 2,
                'nilai' => 87,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            42 => 
            array (
                'id' => 543,
                'alternatif_id' => 110,
                'kriteria_id' => 3,
                'nilai' => 99,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            43 => 
            array (
                'id' => 544,
                'alternatif_id' => 110,
                'kriteria_id' => 4,
                'nilai' => 81,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            44 => 
            array (
                'id' => 545,
                'alternatif_id' => 110,
                'kriteria_id' => 5,
                'nilai' => 50,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            45 => 
            array (
                'id' => 546,
                'alternatif_id' => 111,
                'kriteria_id' => 6,
                'nilai' => 71,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            46 => 
            array (
                'id' => 547,
                'alternatif_id' => 111,
                'kriteria_id' => 2,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            47 => 
            array (
                'id' => 548,
                'alternatif_id' => 111,
                'kriteria_id' => 3,
                'nilai' => 94,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            48 => 
            array (
                'id' => 549,
                'alternatif_id' => 111,
                'kriteria_id' => 4,
                'nilai' => 100,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            49 => 
            array (
                'id' => 550,
                'alternatif_id' => 111,
                'kriteria_id' => 5,
                'nilai' => 65,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            50 => 
            array (
                'id' => 551,
                'alternatif_id' => 112,
                'kriteria_id' => 6,
                'nilai' => 91,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            51 => 
            array (
                'id' => 552,
                'alternatif_id' => 112,
                'kriteria_id' => 2,
                'nilai' => 53,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            52 => 
            array (
                'id' => 553,
                'alternatif_id' => 112,
                'kriteria_id' => 3,
                'nilai' => 82,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            53 => 
            array (
                'id' => 554,
                'alternatif_id' => 112,
                'kriteria_id' => 4,
                'nilai' => 54,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            54 => 
            array (
                'id' => 555,
                'alternatif_id' => 112,
                'kriteria_id' => 5,
                'nilai' => 78,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            55 => 
            array (
                'id' => 556,
                'alternatif_id' => 113,
                'kriteria_id' => 6,
                'nilai' => 56,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            56 => 
            array (
                'id' => 557,
                'alternatif_id' => 113,
                'kriteria_id' => 2,
                'nilai' => 51,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            57 => 
            array (
                'id' => 558,
                'alternatif_id' => 113,
                'kriteria_id' => 3,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            58 => 
            array (
                'id' => 559,
                'alternatif_id' => 113,
                'kriteria_id' => 4,
                'nilai' => 53,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            59 => 
            array (
                'id' => 560,
                'alternatif_id' => 113,
                'kriteria_id' => 5,
                'nilai' => 97,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            60 => 
            array (
                'id' => 561,
                'alternatif_id' => 114,
                'kriteria_id' => 6,
                'nilai' => 86,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            61 => 
            array (
                'id' => 562,
                'alternatif_id' => 114,
                'kriteria_id' => 2,
                'nilai' => 75,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            62 => 
            array (
                'id' => 563,
                'alternatif_id' => 114,
                'kriteria_id' => 3,
                'nilai' => 92,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            63 => 
            array (
                'id' => 564,
                'alternatif_id' => 114,
                'kriteria_id' => 4,
                'nilai' => 94,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            64 => 
            array (
                'id' => 565,
                'alternatif_id' => 114,
                'kriteria_id' => 5,
                'nilai' => 66,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            65 => 
            array (
                'id' => 566,
                'alternatif_id' => 115,
                'kriteria_id' => 6,
                'nilai' => 73,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            66 => 
            array (
                'id' => 567,
                'alternatif_id' => 115,
                'kriteria_id' => 2,
                'nilai' => 59,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            67 => 
            array (
                'id' => 568,
                'alternatif_id' => 115,
                'kriteria_id' => 3,
                'nilai' => 69,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            68 => 
            array (
                'id' => 569,
                'alternatif_id' => 115,
                'kriteria_id' => 4,
                'nilai' => 50,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            69 => 
            array (
                'id' => 570,
                'alternatif_id' => 115,
                'kriteria_id' => 5,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            70 => 
            array (
                'id' => 571,
                'alternatif_id' => 116,
                'kriteria_id' => 6,
                'nilai' => 97,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            71 => 
            array (
                'id' => 572,
                'alternatif_id' => 116,
                'kriteria_id' => 2,
                'nilai' => 81,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            72 => 
            array (
                'id' => 573,
                'alternatif_id' => 116,
                'kriteria_id' => 3,
                'nilai' => 60,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            73 => 
            array (
                'id' => 574,
                'alternatif_id' => 116,
                'kriteria_id' => 4,
                'nilai' => 51,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            74 => 
            array (
                'id' => 575,
                'alternatif_id' => 116,
                'kriteria_id' => 5,
                'nilai' => 74,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            75 => 
            array (
                'id' => 576,
                'alternatif_id' => 117,
                'kriteria_id' => 6,
                'nilai' => 63,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            76 => 
            array (
                'id' => 577,
                'alternatif_id' => 117,
                'kriteria_id' => 2,
                'nilai' => 89,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            77 => 
            array (
                'id' => 578,
                'alternatif_id' => 117,
                'kriteria_id' => 3,
                'nilai' => 53,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            78 => 
            array (
                'id' => 579,
                'alternatif_id' => 117,
                'kriteria_id' => 4,
                'nilai' => 60,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            79 => 
            array (
                'id' => 580,
                'alternatif_id' => 117,
                'kriteria_id' => 5,
                'nilai' => 80,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            80 => 
            array (
                'id' => 581,
                'alternatif_id' => 118,
                'kriteria_id' => 6,
                'nilai' => 91,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            81 => 
            array (
                'id' => 582,
                'alternatif_id' => 118,
                'kriteria_id' => 2,
                'nilai' => 83,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            82 => 
            array (
                'id' => 583,
                'alternatif_id' => 118,
                'kriteria_id' => 3,
                'nilai' => 68,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            83 => 
            array (
                'id' => 584,
                'alternatif_id' => 118,
                'kriteria_id' => 4,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            84 => 
            array (
                'id' => 585,
                'alternatif_id' => 118,
                'kriteria_id' => 5,
                'nilai' => 69,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            85 => 
            array (
                'id' => 586,
                'alternatif_id' => 119,
                'kriteria_id' => 6,
                'nilai' => 100,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            86 => 
            array (
                'id' => 587,
                'alternatif_id' => 119,
                'kriteria_id' => 2,
                'nilai' => 89,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            87 => 
            array (
                'id' => 588,
                'alternatif_id' => 119,
                'kriteria_id' => 3,
                'nilai' => 91,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            88 => 
            array (
                'id' => 589,
                'alternatif_id' => 119,
                'kriteria_id' => 4,
                'nilai' => 96,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            89 => 
            array (
                'id' => 590,
                'alternatif_id' => 119,
                'kriteria_id' => 5,
                'nilai' => 58,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            90 => 
            array (
                'id' => 591,
                'alternatif_id' => 120,
                'kriteria_id' => 6,
                'nilai' => 83,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            91 => 
            array (
                'id' => 592,
                'alternatif_id' => 120,
                'kriteria_id' => 2,
                'nilai' => 99,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            92 => 
            array (
                'id' => 593,
                'alternatif_id' => 120,
                'kriteria_id' => 3,
                'nilai' => 57,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            93 => 
            array (
                'id' => 594,
                'alternatif_id' => 120,
                'kriteria_id' => 4,
                'nilai' => 71,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            94 => 
            array (
                'id' => 595,
                'alternatif_id' => 120,
                'kriteria_id' => 5,
                'nilai' => 86,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            95 => 
            array (
                'id' => 596,
                'alternatif_id' => 121,
                'kriteria_id' => 6,
                'nilai' => 98,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            96 => 
            array (
                'id' => 597,
                'alternatif_id' => 121,
                'kriteria_id' => 2,
                'nilai' => 70,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            97 => 
            array (
                'id' => 598,
                'alternatif_id' => 121,
                'kriteria_id' => 3,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            98 => 
            array (
                'id' => 599,
                'alternatif_id' => 121,
                'kriteria_id' => 4,
                'nilai' => 72,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            99 => 
            array (
                'id' => 600,
                'alternatif_id' => 121,
                'kriteria_id' => 5,
                'nilai' => 65,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            100 => 
            array (
                'id' => 601,
                'alternatif_id' => 122,
                'kriteria_id' => 6,
                'nilai' => 83,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            101 => 
            array (
                'id' => 602,
                'alternatif_id' => 122,
                'kriteria_id' => 2,
                'nilai' => 70,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            102 => 
            array (
                'id' => 603,
                'alternatif_id' => 122,
                'kriteria_id' => 3,
                'nilai' => 89,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            103 => 
            array (
                'id' => 604,
                'alternatif_id' => 122,
                'kriteria_id' => 4,
                'nilai' => 90,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            104 => 
            array (
                'id' => 605,
                'alternatif_id' => 122,
                'kriteria_id' => 5,
                'nilai' => 59,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            105 => 
            array (
                'id' => 606,
                'alternatif_id' => 123,
                'kriteria_id' => 6,
                'nilai' => 80,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            106 => 
            array (
                'id' => 607,
                'alternatif_id' => 123,
                'kriteria_id' => 2,
                'nilai' => 100,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            107 => 
            array (
                'id' => 608,
                'alternatif_id' => 123,
                'kriteria_id' => 3,
                'nilai' => 76,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            108 => 
            array (
                'id' => 609,
                'alternatif_id' => 123,
                'kriteria_id' => 4,
                'nilai' => 55,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            109 => 
            array (
                'id' => 610,
                'alternatif_id' => 123,
                'kriteria_id' => 5,
                'nilai' => 51,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            110 => 
            array (
                'id' => 611,
                'alternatif_id' => 124,
                'kriteria_id' => 6,
                'nilai' => 84,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            111 => 
            array (
                'id' => 612,
                'alternatif_id' => 124,
                'kriteria_id' => 2,
                'nilai' => 98,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            112 => 
            array (
                'id' => 613,
                'alternatif_id' => 124,
                'kriteria_id' => 3,
                'nilai' => 63,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            113 => 
            array (
                'id' => 614,
                'alternatif_id' => 124,
                'kriteria_id' => 4,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            114 => 
            array (
                'id' => 615,
                'alternatif_id' => 124,
                'kriteria_id' => 5,
                'nilai' => 79,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            115 => 
            array (
                'id' => 616,
                'alternatif_id' => 125,
                'kriteria_id' => 6,
                'nilai' => 83,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            116 => 
            array (
                'id' => 617,
                'alternatif_id' => 125,
                'kriteria_id' => 2,
                'nilai' => 68,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            117 => 
            array (
                'id' => 618,
                'alternatif_id' => 125,
                'kriteria_id' => 3,
                'nilai' => 96,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            118 => 
            array (
                'id' => 619,
                'alternatif_id' => 125,
                'kriteria_id' => 4,
                'nilai' => 71,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            119 => 
            array (
                'id' => 620,
                'alternatif_id' => 125,
                'kriteria_id' => 5,
                'nilai' => 99,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            120 => 
            array (
                'id' => 621,
                'alternatif_id' => 126,
                'kriteria_id' => 6,
                'nilai' => 83,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            121 => 
            array (
                'id' => 622,
                'alternatif_id' => 126,
                'kriteria_id' => 2,
                'nilai' => 51,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            122 => 
            array (
                'id' => 623,
                'alternatif_id' => 126,
                'kriteria_id' => 3,
                'nilai' => 70,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            123 => 
            array (
                'id' => 624,
                'alternatif_id' => 126,
                'kriteria_id' => 4,
                'nilai' => 61,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            124 => 
            array (
                'id' => 625,
                'alternatif_id' => 126,
                'kriteria_id' => 5,
                'nilai' => 95,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            125 => 
            array (
                'id' => 626,
                'alternatif_id' => 127,
                'kriteria_id' => 6,
                'nilai' => 94,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            126 => 
            array (
                'id' => 627,
                'alternatif_id' => 127,
                'kriteria_id' => 2,
                'nilai' => 76,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            127 => 
            array (
                'id' => 628,
                'alternatif_id' => 127,
                'kriteria_id' => 3,
                'nilai' => 51,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            128 => 
            array (
                'id' => 629,
                'alternatif_id' => 127,
                'kriteria_id' => 4,
                'nilai' => 73,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            129 => 
            array (
                'id' => 630,
                'alternatif_id' => 127,
                'kriteria_id' => 5,
                'nilai' => 84,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            130 => 
            array (
                'id' => 631,
                'alternatif_id' => 128,
                'kriteria_id' => 6,
                'nilai' => 76,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            131 => 
            array (
                'id' => 632,
                'alternatif_id' => 128,
                'kriteria_id' => 2,
                'nilai' => 80,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            132 => 
            array (
                'id' => 633,
                'alternatif_id' => 128,
                'kriteria_id' => 3,
                'nilai' => 61,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            133 => 
            array (
                'id' => 634,
                'alternatif_id' => 128,
                'kriteria_id' => 4,
                'nilai' => 54,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            134 => 
            array (
                'id' => 635,
                'alternatif_id' => 128,
                'kriteria_id' => 5,
                'nilai' => 99,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            135 => 
            array (
                'id' => 636,
                'alternatif_id' => 129,
                'kriteria_id' => 6,
                'nilai' => 75,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            136 => 
            array (
                'id' => 637,
                'alternatif_id' => 129,
                'kriteria_id' => 2,
                'nilai' => 67,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            137 => 
            array (
                'id' => 638,
                'alternatif_id' => 129,
                'kriteria_id' => 3,
                'nilai' => 74,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            138 => 
            array (
                'id' => 639,
                'alternatif_id' => 129,
                'kriteria_id' => 4,
                'nilai' => 85,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            139 => 
            array (
                'id' => 640,
                'alternatif_id' => 129,
                'kriteria_id' => 5,
                'nilai' => 59,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            140 => 
            array (
                'id' => 641,
                'alternatif_id' => 130,
                'kriteria_id' => 6,
                'nilai' => 86,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            141 => 
            array (
                'id' => 642,
                'alternatif_id' => 130,
                'kriteria_id' => 2,
                'nilai' => 50,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            142 => 
            array (
                'id' => 643,
                'alternatif_id' => 130,
                'kriteria_id' => 3,
                'nilai' => 97,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            143 => 
            array (
                'id' => 644,
                'alternatif_id' => 130,
                'kriteria_id' => 4,
                'nilai' => 78,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            144 => 
            array (
                'id' => 645,
                'alternatif_id' => 130,
                'kriteria_id' => 5,
                'nilai' => 60,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            145 => 
            array (
                'id' => 646,
                'alternatif_id' => 131,
                'kriteria_id' => 6,
                'nilai' => 75,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            146 => 
            array (
                'id' => 647,
                'alternatif_id' => 131,
                'kriteria_id' => 2,
                'nilai' => 50,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            147 => 
            array (
                'id' => 648,
                'alternatif_id' => 131,
                'kriteria_id' => 3,
                'nilai' => 94,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            148 => 
            array (
                'id' => 649,
                'alternatif_id' => 131,
                'kriteria_id' => 4,
                'nilai' => 98,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            149 => 
            array (
                'id' => 650,
                'alternatif_id' => 131,
                'kriteria_id' => 5,
                'nilai' => 100,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            150 => 
            array (
                'id' => 651,
                'alternatif_id' => 132,
                'kriteria_id' => 6,
                'nilai' => 92,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            151 => 
            array (
                'id' => 652,
                'alternatif_id' => 132,
                'kriteria_id' => 2,
                'nilai' => 88,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            152 => 
            array (
                'id' => 653,
                'alternatif_id' => 132,
                'kriteria_id' => 3,
                'nilai' => 80,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            153 => 
            array (
                'id' => 654,
                'alternatif_id' => 132,
                'kriteria_id' => 4,
                'nilai' => 55,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            154 => 
            array (
                'id' => 655,
                'alternatif_id' => 132,
                'kriteria_id' => 5,
                'nilai' => 83,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            155 => 
            array (
                'id' => 656,
                'alternatif_id' => 133,
                'kriteria_id' => 6,
                'nilai' => 79,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            156 => 
            array (
                'id' => 657,
                'alternatif_id' => 133,
                'kriteria_id' => 2,
                'nilai' => 63,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            157 => 
            array (
                'id' => 658,
                'alternatif_id' => 133,
                'kriteria_id' => 3,
                'nilai' => 65,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            158 => 
            array (
                'id' => 659,
                'alternatif_id' => 133,
                'kriteria_id' => 4,
                'nilai' => 96,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            159 => 
            array (
                'id' => 660,
                'alternatif_id' => 133,
                'kriteria_id' => 5,
                'nilai' => 71,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            160 => 
            array (
                'id' => 661,
                'alternatif_id' => 134,
                'kriteria_id' => 6,
                'nilai' => 84,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            161 => 
            array (
                'id' => 662,
                'alternatif_id' => 134,
                'kriteria_id' => 2,
                'nilai' => 97,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            162 => 
            array (
                'id' => 663,
                'alternatif_id' => 134,
                'kriteria_id' => 3,
                'nilai' => 70,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            163 => 
            array (
                'id' => 664,
                'alternatif_id' => 134,
                'kriteria_id' => 4,
                'nilai' => 86,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            164 => 
            array (
                'id' => 665,
                'alternatif_id' => 134,
                'kriteria_id' => 5,
                'nilai' => 77,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            165 => 
            array (
                'id' => 666,
                'alternatif_id' => 135,
                'kriteria_id' => 6,
                'nilai' => 64,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            166 => 
            array (
                'id' => 667,
                'alternatif_id' => 135,
                'kriteria_id' => 2,
                'nilai' => 65,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            167 => 
            array (
                'id' => 668,
                'alternatif_id' => 135,
                'kriteria_id' => 3,
                'nilai' => 65,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            168 => 
            array (
                'id' => 669,
                'alternatif_id' => 135,
                'kriteria_id' => 4,
                'nilai' => 67,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            169 => 
            array (
                'id' => 670,
                'alternatif_id' => 135,
                'kriteria_id' => 5,
                'nilai' => 81,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            170 => 
            array (
                'id' => 671,
                'alternatif_id' => 136,
                'kriteria_id' => 6,
                'nilai' => 82,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            171 => 
            array (
                'id' => 672,
                'alternatif_id' => 136,
                'kriteria_id' => 2,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            172 => 
            array (
                'id' => 673,
                'alternatif_id' => 136,
                'kriteria_id' => 3,
                'nilai' => 95,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            173 => 
            array (
                'id' => 674,
                'alternatif_id' => 136,
                'kriteria_id' => 4,
                'nilai' => 50,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            174 => 
            array (
                'id' => 675,
                'alternatif_id' => 136,
                'kriteria_id' => 5,
                'nilai' => 65,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            175 => 
            array (
                'id' => 676,
                'alternatif_id' => 137,
                'kriteria_id' => 6,
                'nilai' => 54,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            176 => 
            array (
                'id' => 677,
                'alternatif_id' => 137,
                'kriteria_id' => 2,
                'nilai' => 94,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            177 => 
            array (
                'id' => 678,
                'alternatif_id' => 137,
                'kriteria_id' => 3,
                'nilai' => 51,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            178 => 
            array (
                'id' => 679,
                'alternatif_id' => 137,
                'kriteria_id' => 4,
                'nilai' => 58,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            179 => 
            array (
                'id' => 680,
                'alternatif_id' => 137,
                'kriteria_id' => 5,
                'nilai' => 93,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            180 => 
            array (
                'id' => 681,
                'alternatif_id' => 138,
                'kriteria_id' => 6,
                'nilai' => 84,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            181 => 
            array (
                'id' => 682,
                'alternatif_id' => 138,
                'kriteria_id' => 2,
                'nilai' => 74,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            182 => 
            array (
                'id' => 683,
                'alternatif_id' => 138,
                'kriteria_id' => 3,
                'nilai' => 73,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            183 => 
            array (
                'id' => 684,
                'alternatif_id' => 138,
                'kriteria_id' => 4,
                'nilai' => 80,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            184 => 
            array (
                'id' => 685,
                'alternatif_id' => 138,
                'kriteria_id' => 5,
                'nilai' => 78,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            185 => 
            array (
                'id' => 686,
                'alternatif_id' => 139,
                'kriteria_id' => 6,
                'nilai' => 100,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            186 => 
            array (
                'id' => 687,
                'alternatif_id' => 139,
                'kriteria_id' => 2,
                'nilai' => 59,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            187 => 
            array (
                'id' => 688,
                'alternatif_id' => 139,
                'kriteria_id' => 3,
                'nilai' => 78,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            188 => 
            array (
                'id' => 689,
                'alternatif_id' => 139,
                'kriteria_id' => 4,
                'nilai' => 86,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            189 => 
            array (
                'id' => 690,
                'alternatif_id' => 139,
                'kriteria_id' => 5,
                'nilai' => 96,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            190 => 
            array (
                'id' => 691,
                'alternatif_id' => 140,
                'kriteria_id' => 6,
                'nilai' => 52,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            191 => 
            array (
                'id' => 692,
                'alternatif_id' => 140,
                'kriteria_id' => 2,
                'nilai' => 50,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            192 => 
            array (
                'id' => 693,
                'alternatif_id' => 140,
                'kriteria_id' => 3,
                'nilai' => 75,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            193 => 
            array (
                'id' => 694,
                'alternatif_id' => 140,
                'kriteria_id' => 4,
                'nilai' => 76,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            194 => 
            array (
                'id' => 695,
                'alternatif_id' => 140,
                'kriteria_id' => 5,
                'nilai' => 84,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            195 => 
            array (
                'id' => 696,
                'alternatif_id' => 141,
                'kriteria_id' => 6,
                'nilai' => 51,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            196 => 
            array (
                'id' => 697,
                'alternatif_id' => 141,
                'kriteria_id' => 2,
                'nilai' => 66,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            197 => 
            array (
                'id' => 698,
                'alternatif_id' => 141,
                'kriteria_id' => 3,
                'nilai' => 85,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            198 => 
            array (
                'id' => 699,
                'alternatif_id' => 141,
                'kriteria_id' => 4,
                'nilai' => 77,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            199 => 
            array (
                'id' => 700,
                'alternatif_id' => 141,
                'kriteria_id' => 5,
                'nilai' => 54,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            200 => 
            array (
                'id' => 701,
                'alternatif_id' => 142,
                'kriteria_id' => 6,
                'nilai' => 85,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            201 => 
            array (
                'id' => 702,
                'alternatif_id' => 142,
                'kriteria_id' => 2,
                'nilai' => 80,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            202 => 
            array (
                'id' => 703,
                'alternatif_id' => 142,
                'kriteria_id' => 3,
                'nilai' => 84,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            203 => 
            array (
                'id' => 704,
                'alternatif_id' => 142,
                'kriteria_id' => 4,
                'nilai' => 94,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            204 => 
            array (
                'id' => 705,
                'alternatif_id' => 142,
                'kriteria_id' => 5,
                'nilai' => 71,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            205 => 
            array (
                'id' => 706,
                'alternatif_id' => 143,
                'kriteria_id' => 6,
                'nilai' => 56,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            206 => 
            array (
                'id' => 707,
                'alternatif_id' => 143,
                'kriteria_id' => 2,
                'nilai' => 59,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            207 => 
            array (
                'id' => 708,
                'alternatif_id' => 143,
                'kriteria_id' => 3,
                'nilai' => 52,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            208 => 
            array (
                'id' => 709,
                'alternatif_id' => 143,
                'kriteria_id' => 4,
                'nilai' => 95,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            209 => 
            array (
                'id' => 710,
                'alternatif_id' => 143,
                'kriteria_id' => 5,
                'nilai' => 74,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            210 => 
            array (
                'id' => 711,
                'alternatif_id' => 144,
                'kriteria_id' => 6,
                'nilai' => 69,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            211 => 
            array (
                'id' => 712,
                'alternatif_id' => 144,
                'kriteria_id' => 2,
                'nilai' => 50,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            212 => 
            array (
                'id' => 713,
                'alternatif_id' => 144,
                'kriteria_id' => 3,
                'nilai' => 69,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            213 => 
            array (
                'id' => 714,
                'alternatif_id' => 144,
                'kriteria_id' => 4,
                'nilai' => 86,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            214 => 
            array (
                'id' => 715,
                'alternatif_id' => 144,
                'kriteria_id' => 5,
                'nilai' => 99,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            215 => 
            array (
                'id' => 716,
                'alternatif_id' => 145,
                'kriteria_id' => 6,
                'nilai' => 67,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            216 => 
            array (
                'id' => 717,
                'alternatif_id' => 145,
                'kriteria_id' => 2,
                'nilai' => 96,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            217 => 
            array (
                'id' => 718,
                'alternatif_id' => 145,
                'kriteria_id' => 3,
                'nilai' => 97,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            218 => 
            array (
                'id' => 719,
                'alternatif_id' => 145,
                'kriteria_id' => 4,
                'nilai' => 90,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            219 => 
            array (
                'id' => 720,
                'alternatif_id' => 145,
                'kriteria_id' => 5,
                'nilai' => 88,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            220 => 
            array (
                'id' => 721,
                'alternatif_id' => 146,
                'kriteria_id' => 6,
                'nilai' => 93,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            221 => 
            array (
                'id' => 722,
                'alternatif_id' => 146,
                'kriteria_id' => 2,
                'nilai' => 60,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            222 => 
            array (
                'id' => 723,
                'alternatif_id' => 146,
                'kriteria_id' => 3,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            223 => 
            array (
                'id' => 724,
                'alternatif_id' => 146,
                'kriteria_id' => 4,
                'nilai' => 84,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            224 => 
            array (
                'id' => 725,
                'alternatif_id' => 146,
                'kriteria_id' => 5,
                'nilai' => 50,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            225 => 
            array (
                'id' => 726,
                'alternatif_id' => 147,
                'kriteria_id' => 6,
                'nilai' => 79,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            226 => 
            array (
                'id' => 727,
                'alternatif_id' => 147,
                'kriteria_id' => 2,
                'nilai' => 69,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            227 => 
            array (
                'id' => 728,
                'alternatif_id' => 147,
                'kriteria_id' => 3,
                'nilai' => 98,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            228 => 
            array (
                'id' => 729,
                'alternatif_id' => 147,
                'kriteria_id' => 4,
                'nilai' => 100,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            229 => 
            array (
                'id' => 730,
                'alternatif_id' => 147,
                'kriteria_id' => 5,
                'nilai' => 66,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            230 => 
            array (
                'id' => 731,
                'alternatif_id' => 148,
                'kriteria_id' => 6,
                'nilai' => 74,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            231 => 
            array (
                'id' => 732,
                'alternatif_id' => 148,
                'kriteria_id' => 2,
                'nilai' => 66,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            232 => 
            array (
                'id' => 733,
                'alternatif_id' => 148,
                'kriteria_id' => 3,
                'nilai' => 85,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            233 => 
            array (
                'id' => 734,
                'alternatif_id' => 148,
                'kriteria_id' => 4,
                'nilai' => 54,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            234 => 
            array (
                'id' => 735,
                'alternatif_id' => 148,
                'kriteria_id' => 5,
                'nilai' => 87,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            235 => 
            array (
                'id' => 736,
                'alternatif_id' => 149,
                'kriteria_id' => 6,
                'nilai' => 85,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            236 => 
            array (
                'id' => 737,
                'alternatif_id' => 149,
                'kriteria_id' => 2,
                'nilai' => 55,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            237 => 
            array (
                'id' => 738,
                'alternatif_id' => 149,
                'kriteria_id' => 3,
                'nilai' => 63,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            238 => 
            array (
                'id' => 739,
                'alternatif_id' => 149,
                'kriteria_id' => 4,
                'nilai' => 60,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            239 => 
            array (
                'id' => 740,
                'alternatif_id' => 149,
                'kriteria_id' => 5,
                'nilai' => 95,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            240 => 
            array (
                'id' => 741,
                'alternatif_id' => 150,
                'kriteria_id' => 6,
                'nilai' => 94,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            241 => 
            array (
                'id' => 742,
                'alternatif_id' => 150,
                'kriteria_id' => 2,
                'nilai' => 70,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            242 => 
            array (
                'id' => 743,
                'alternatif_id' => 150,
                'kriteria_id' => 3,
                'nilai' => 61,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            243 => 
            array (
                'id' => 744,
                'alternatif_id' => 150,
                'kriteria_id' => 4,
                'nilai' => 52,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            244 => 
            array (
                'id' => 745,
                'alternatif_id' => 150,
                'kriteria_id' => 5,
                'nilai' => 82,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            245 => 
            array (
                'id' => 746,
                'alternatif_id' => 151,
                'kriteria_id' => 6,
                'nilai' => 82,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            246 => 
            array (
                'id' => 747,
                'alternatif_id' => 151,
                'kriteria_id' => 2,
                'nilai' => 69,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            247 => 
            array (
                'id' => 748,
                'alternatif_id' => 151,
                'kriteria_id' => 3,
                'nilai' => 100,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            248 => 
            array (
                'id' => 749,
                'alternatif_id' => 151,
                'kriteria_id' => 4,
                'nilai' => 62,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
            249 => 
            array (
                'id' => 750,
                'alternatif_id' => 151,
                'kriteria_id' => 5,
                'nilai' => 51,
                'created_at' => '2024-08-03 20:33:44',
                'updated_at' => '2024-08-03 20:33:44',
            ),
        ));
        
        
    }
}