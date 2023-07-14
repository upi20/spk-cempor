<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KriteriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('kriteria')->delete();

        \DB::table('kriteria')->insert(array(
            0 =>
            array(
                'id' => 1,
                'bobot' => 35,
                'nama' => 'Absensi',
                'slug' => 'absensi',
                'kode' => 'C1',
                'created_at' => '2023-07-14 18:52:53',
                'updated_at' => '2023-07-14 18:52:53',
            ),
            1 =>
            array(
                'id' => 2,
                'bobot' => 10,
                'nama' => 'Kuis',
                'slug' => 'kuis',
                'kode' => 'C2',
                'created_at' => '2023-07-14 18:53:09',
                'updated_at' => '2023-07-14 18:53:51',
            ),
            2 =>
            array(
                'id' => 3,
                'bobot' => 25,
                'nama' => 'Budi Pekerti',
                'slug' => 'budi-pekerti',
                'kode' => 'C3',
                'created_at' => '2023-07-14 18:53:20',
                'updated_at' => '2023-07-14 18:54:04',
            ),
            3 =>
            array(
                'id' => 4,
                'bobot' => 10,
                'nama' => 'Keaktifan',
                'slug' => 'keaktifan',
                'kode' => 'C4',
                'created_at' => '2023-07-14 18:53:34',
                'updated_at' => '2023-07-14 18:53:34',
            ),
            4 =>
            array(
                'id' => 5,
                'bobot' => 20,
                'nama' => 'Tugas',
                'slug' => 'tugas',
                'kode' => 'C5',
                'created_at' => '2023-07-14 18:53:46',
                'updated_at' => '2023-07-14 18:54:13',
            ),
        ));
    }
}
