<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bahan_bakar_masakseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahan_bakar_masaks')->insert([
            [
    
                'keterangan_bahan_bakar_masak'=> 'Gas Lebih dari 3 Kg',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_bahan_bakar_masak'=> 'Gas 3 Kg',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_bahan_bakar_masak'=> 'Gas Kota/Biogas',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_bahan_bakar_masak'=> 'Minyak Tanah',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_bahan_bakar_masak'=> 'Briket',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_bahan_bakar_masak'=> 'Arang',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_bahan_bakar_masak'=> 'Kayu Bakar',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_bahan_bakar_masak'=> 'Tidak Memasak Di Rumah',
                'nilai'=> '0'
            ]
            
        ]);
    }
}
