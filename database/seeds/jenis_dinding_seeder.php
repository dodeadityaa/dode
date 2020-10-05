<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenis_dinding_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_dindings')->insert([
            [
    
                'keterangan_jenis_dinding'=> 'Tembok',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_dinding'=> 'Plesteran/Ayaman/Bambu/Kawat',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_dinding'=> 'Kayu',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_dinding'=> 'Ayaman/Bambu',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_dinding'=> 'Batang_kayu',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_dinding'=> 'Bambu',
                'nilai'=> '0'
            ]
        ]);
    }
}
