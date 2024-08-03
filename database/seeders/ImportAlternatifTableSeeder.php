<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportAlternatifTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_alternatif')->delete();
        
        \DB::table('import_alternatif')->insert(array (
            0 => 
            array (
                'id' => 6,
                'nama' => 'data sidang',
                'slug' => 'data-sidang',
                'file' => '20240803085439-data-sidang.xlsx',
                'count' => 50,
                'created_at' => '2024-08-03 20:54:39',
                'updated_at' => '2024-08-03 20:54:40',
            ),
        ));
        
        
    }
}