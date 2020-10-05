<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Kualitas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kualitas')->insert([
            [
    
                'keterangan_kualitas'=> 'Bagus/Kualitas Tinggi',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_kualitas'=> 'Jelek/Kualitas Rendah',
                'nilai'=> '0'
            ]
        ]);
    }
}
