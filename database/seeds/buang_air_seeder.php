<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class buang_air_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buang_airs')->insert([
            [
    
                'keterangan_buang_air'=> 'Sendiri',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_buang_air'=> 'Bersama',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_buang_air'=> 'Umum',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_buang_air'=> 'Tidak Ada',
                'nilai'=> '0'
            ]
        ]);
    }
}
