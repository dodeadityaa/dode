<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kamar_tidur_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamar_tidurs')->insert([
            [
    
                'keterangan_kamar_tidur'=> '5',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_kamar_tidur'=> '4',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_kamar_tidur'=> '3',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_kamar_tidur'=> '2',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_kamar_tidur'=> '1',
                'nilai'=> '0'
            ]

        ]);
    }
}
