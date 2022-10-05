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
        Schema::create('fuentes', function (Blueprint $table) {
            $table->id('id_fuente');
            $table->string('nombre');
            $table->text('desc')->nullable();
            $table->text('restriccion_uso')->nullable();
            $table->text('url')->nullable();
            $table->text('metodo_acceso')->nullable();
            $table->text('restriccion_acceso')->nullable();
            $table->unsignedInteger('id_tipo_fuente');
            $table->foreign('id_tipo_fuente')->references('id_tipo_fuente')->on('tipos_fuente');
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
        Schema::dropIfExists('fuentes');
    }
};
