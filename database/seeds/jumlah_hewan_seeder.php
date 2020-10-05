<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jumlah_hewan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jumlah_hewans')->insert([
            [
    
                'keterangan_jumlah_hewan'=> '10',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '9',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '8',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '7',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '6',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '5',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '4',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '3',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '2',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jumlah_hewan'=> '1',
                'nilai'=> '0'
            ]
        ]);
    }
}
