<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class watt_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watts')->insert([
            [
    
                'keterangan_watt'=> '450 watt',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_watt'=> '900 watt',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_watt'=> '1300 watt',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_watt'=> '2200 watt',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_watt'=> 'Lebih 2200 watt',
                'nilai'=> '0'
            ]
        ]);
    }
}
