<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class lahan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lahans')->insert([
            [
    
                'keterangan_lahan'=> 'Milik Sendiri',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_lahan'=> 'Milik Orang Lain',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_lahan'=> 'Tanah Negara',
                'nilai'=> '0'
            ]
        ]);
    }
}
