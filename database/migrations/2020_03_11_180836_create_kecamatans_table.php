<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatans', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_kabkot');
            $table->string('nama_kecamatan');
            $table->timestamps();

            Schema::disableForeignKeyConstraints();
            $table->foreign('id_kabkot')->references('id')->on('kabkots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kecamatans');
    }
}
