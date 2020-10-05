<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class luas_lantai_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('luas_lantais')->insert([
            [
    
                'keterangan_luas_lantai'=> '33 m2',
                'nilai'=> '0'
            ]
        ]);
    }
}
