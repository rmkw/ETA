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
        Schema::create('sub_componentes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('id_sub');
            $table->string('nombre');
            $table->text('definicion')->nullable();
            $table->unsignedInteger('id_comp');
            $table->foreign('id_comp')->references('id_comp')->on('componentes');
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
        Schema::dropIfExists('sub_componentes');
    }
};
