<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenis_atap_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_ataps')->insert([
            [
    
                'keterangan_jenis_atap'=> 'Beton/Genteng Beton',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_atap'=> 'Genteng Keramik',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_atap'=> 'Genteng Metal',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_atap'=> 'Genteng Tanah Liat',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_atap'=> 'Asbes',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_atap'=> 'Seng',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_atap'=> 'Sirap',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_atap'=> 'Bambu',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_atap'=> 'Jerami/Daun-Daunan/Rumbia',
                'nilai'=> '0'
            ]
            

        ]);
    }
}
