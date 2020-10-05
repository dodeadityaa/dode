<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(kualitasatap::class);
        $this->call(bahan_bakar_masakseeder::class);
        $this->call(air_sumber_seeder::class);
        $this->call(Pembuangan_akhir_seeder::class);
        $this->call(luas_lantai_seeder::class);
        $this->call(airminumseeder::class);
        $this->call(buang_air_seeder::class);
        $this->call(jenis_atap_seeder::class);
        $this->call(jenis_dinding_seeder::class);
        $this->call(jenis_kloset_seeder::class);
        $this->call(jenis_lantai_seeder::class);
        $this->call(jumlah_hewan_seeder::class);
        $this->call(Kamar_tidur_seeder::class);
        $this->call(Kualitas_seeder::class);
        $this->call(lahan_seeder::class);
        $this->call(listrik_seeder::class);
        $this->call(rumah_seeder::class);
        $this->call(watt_seeder::class);
        $this->call(yes_no_seeder::class);
    }
}
