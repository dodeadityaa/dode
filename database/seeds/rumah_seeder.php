<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class rumah_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rumahs')->insert([
            [
    
                'keterangan_rumah'=> 'Milik Sendiri',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_rumah'=> 'Kontrakan/Sewa',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_rumah'=> 'Bebas Sewa',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_rumah'=> 'Dinas',
                'nilai'=> '0'
            ]
        ]);
    }
}
