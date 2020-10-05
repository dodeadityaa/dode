<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class jenis_kloset_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_klosets')->insert([
            [
    
                'keterangan_jenis_kloset'=> 'Leher Angsa',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_kloset'=> 'Plengsengan',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_kloset'=> 'Cempluk/Cubluk',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_jenis_kloset'=> 'Tidak Pakai',
                'nilai'=> '0'
            ]
        ]);
    }
}
