<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class yes_no_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yes_nos')->insert([
            [
    
                'keterangan_memiliki'=> 'Iya',
                'nilai'=> '0'
            ],
            [
    
                'keterangan_memiliki'=> 'Tidak',
                'nilai'=> '0'
            ],
        ]);
    }
}
