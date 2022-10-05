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
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_entidad');
            $table->foreign('id_entidad')->references('id')->on('entidades');
            $table->char('cve_mun',3);
            $table->unsignedInteger('anio');
            $table->string('nombre_mun');
//            $table-> GEOM
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("SELECT AddGeometryColumn('public', 'municipios', 'geom', 4326, 'POINT', 2)");
        DB::statement('CREATE INDEX sidx_municipios_geom ON municipios USING GIST (geom)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
};
