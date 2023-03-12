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
        Schema::create('non_akademik', function (Blueprint $table) {
            $table->id();
            $table->string('mapel_peminatan');   
            $table->string('organisasi');
            $table->string('jabatan');
            $table->string('penghargaan');
            $table->string('cita_cita');
            $table->string('asal_sekolah');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('non_akademik');
    }
};
