<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pembuangan_akhir_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembuangan_akhirs')->insert([
            [
    
                'keterangan_pembuangan_akhir'=> 'Tangki',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_pembuangan_akhir'=> 'SPAL',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_pembuangan_akhir'=> 'Lubang Tanah',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_pembuangan_akhir'=> 'Kolam/Sawah/Sungai/Danau/Laut',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_pembuangan_akhir'=> 'Pantai/Tanah',
                'nilai'=> '0'
            ]
        ]);
    }
}
