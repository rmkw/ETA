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
        Schema::create('datos', function (Blueprint $table) {
            $table->id('id_dato');
            $table->unsignedInteger('id_lote');
            $table->foreign('id_lote')->references('id_lote')->on('lotes');
            $table->unsignedInteger('id_ent');
            $table->foreign('id_ent')->references('id')->on('entidades');
            $table->unsignedInteger('id_mun');
            $table->foreign('id_mun')->references('id')->on('municipios');
            $table->unsignedInteger('id_loc');
            $table->foreign('id_loc')->references('id')->on('localidades');
            $table->string('demarcacion');
            $table->string('dato');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("SELECT AddGeometryColumn('public', 'datos', 'geom', 4326, 'POINT', 2)");
        DB::statement('CREATE INDEX sidx_datos_geom ON datos USING GIST (geom)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos');
    }
};
