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
        Schema::create('referencias_espaciales', function (Blueprint $table) {
            $table->id('id_ref_esp');
            $table->string('auth_name');
            $table->integer('auth_srid');
            $table->text('srtext');
            $table->text('proj4text');
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
        Schema::dropIfExists('referencias_espaciales');
    }
};
