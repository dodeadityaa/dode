<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenis_lantai_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_lantais')->insert([
            [
    
                'keterangan_jenis_lantai'=> 'Marmer/Granit',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_lantai'=> 'Keramik',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_lantai'=> 'Parket/Vinil/Permadani',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_lantai'=> 'Ubin/Tegel/Teraso',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_lantai'=> 'Kayu/Papan Kualitas Tinggi',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_lantai'=> 'Sementara/Batu Bata Merah',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_lantai'=> 'Bambu',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_lantai'=> 'Kayu/Papan Kualitas Rendah',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_lantai'=> 'Tanah',
                'nilai'=> '0'
            ]
        ]);
    }
}
