<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mabas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->integer('nilai_mtk');
            $table->integer('nilai_bi');
            $table->integer('nilai_bing');
            $table->integer('nilai_peminatan');
            $table->string('organisasi');
            $table->string('jabatan');
            $table->string('penghargaan');
            $table->string('cita_cita');
            $table->string('asal_sekolah');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mabas');
    }
};
