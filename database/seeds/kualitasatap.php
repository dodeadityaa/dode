<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class kualitasatap extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kualitas_atap')->insert([
            [
    
                'keterangan_kualitas_atap'=> 'Bagus/Kualitas Tinggi',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_kualitas_atap'=> 'Jelek/Kualitas Rendah',
                'nilai'=> '0'
            ]
        ]);
    }
}
