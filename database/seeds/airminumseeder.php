<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class airminumseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('air_minums')->insert([
            [
    
                'keterangan_air_minum'=> 'Membeli Eceran',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_air_minum'=> 'Langganan',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_air_minum'=> 'Tidak Membeli',
                'nilai'=> '0'
            ]

        ]);
    }
}
