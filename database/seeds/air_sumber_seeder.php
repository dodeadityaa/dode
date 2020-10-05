<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class air_sumber_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sumber_airs')->insert([
            [

                'keterangan_sumber_air'=> 'Air Kemasan Bermerk',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Air Isi Ulang',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Leding Meteran',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Leding Eceran',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Sumur Bor/Pompa',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Sumur Terlindung',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Sumur Tak Terlindung',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Mata Air Terlindung',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Mata Air Tak Terlindung',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Air Sungai/Danau/Waduk',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_sumber_air'=> 'Air Hujan',
                'nilai'=> '0'
            ]
        ]);
    }
}
