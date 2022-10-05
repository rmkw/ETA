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
        Schema::create('propuestas', function (Blueprint $table) {
            $table->id('id_propuesta');
            $table->unsignedInteger('id_cap');
            $table->foreign('id_cap')->references('id_usuario')->on('users');
            $table->dateTimeTz('fecha_cap');
            $table->unsignedInteger('id_lote');
            $table->foreign('id_lote')->references('id_lote')->on('lotes');
            $table->unsignedInteger('id_rev');
            $table->foreign('id_rev')->references('id_usuario')->on('users');
            $table->dateTimeTz('fecha_rev');
            $table->unsignedInteger('id_aut');
            $table->foreign('id_aut')->references('id_usuario')->on('users');
            $table->dateTimeTz('fecha_aut');
            $table->enum('status', ['captura', 'capturado', 'revisado', 'aprobado', 'rechazado']);
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
        Schema::dropIfExists('propuestas');
    }
};
