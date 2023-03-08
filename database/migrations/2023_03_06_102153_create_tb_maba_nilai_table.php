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
        Schema::create('tb_maba_nilai', function (Blueprint $table) {
            $table->id();            
            $table->integer('mtk');
            $table->integer('bi');
            $table->integer('bing');
            $table->integer('peminatan');
            $table->integer('non_akademik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_maba_nilai');
    }
};
