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
        Schema::create('variables', function (Blueprint $table) {
            $table->id('id_var');
            $table->text('nombre');
            $table->enum('status', ['captura', 'capturado', 'revisado', 'aprobado', 'rechazado']);
            $table->boolean('mdea');
            $table->unsignedInteger('id_comp');
            $table->foreign('id_comp')->references('id_comp')->on('componentes');
            $table->unsignedInteger('id_sub');
            $table->foreign('id_sub')->references('id_sub')->on('sub_componentes');
            $table->unsignedInteger('id_top');
            $table->foreign('id_top')->references('id_top')->on('topicos');
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
        Schema::dropIfExists('variables');
    }
};
