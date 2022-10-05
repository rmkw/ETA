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
        Schema::create('lotes_fuentes', function (Blueprint $table) {
            $table->id('id_lote_fuente');
            $table->unsignedInteger('id_lote');
            $table->foreign('id_lote')->references('id_lote')->on('lotes');
            $table->unsignedInteger('id_fuente');
            $table->foreign('id_fuente')->references('id_fuente')->on('fuentes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotes_fuentes');
    }
};
