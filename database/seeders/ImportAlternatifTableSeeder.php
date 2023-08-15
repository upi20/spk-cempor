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
                'id' => 2,
                'nama' => 'Data Testing',
                'slug' => 'data-testing',
                'file' => '20230714074051-data-testing.xlsx',
                'count' => 50,
                'created_at' => '2023-07-14 19:40:51',
                'updated_at' => '2023-07-14 19:40:52',
            ),
        ));
        
        
    }
}