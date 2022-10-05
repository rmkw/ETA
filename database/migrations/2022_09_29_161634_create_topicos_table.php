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
        Schema::create('topicos', function (Blueprint $table) {
            $table->id('id_top');
            $table->string('nombre');
            $table->text('definicion')->nullable();
            $table->unsignedInteger('id_comp');
            $table->foreign('id_comp')->references('id_comp')->on('componentes');
            $table->unsignedInteger('id_sub');
            $table->foreign('id_sub')->references('id_sub')->on('sub_componentes');
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
        Schema::dropIfExists('topicos');
    }
};
