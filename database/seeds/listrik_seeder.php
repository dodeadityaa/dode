<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class listrik_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listriks')->insert([
            [
    
                'keterangan_listrik'=> 'Listrik PLN',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_listrik'=> 'Listrik Non PLN',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_listrik'=> 'Bukan Listrik',
                'nilai'=> '0'
            ]
        ]);
    }
}
