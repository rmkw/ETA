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
        Schema::create('localidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_ent');
            $table->foreign('id_ent')->references('id')->on('entidades');
            $table->unsignedInteger('id_mun');
            $table->foreign('id_mun')->references('id')->on('municipios');
            $table->char('cve_loc',3);
            $table->unsignedInteger('anio');
            $table->string('nombre_loc');
//            $table-> GEOM
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("SELECT AddGeometryColumn('public', 'localidades', 'geom', 4326, 'POINT', 2)");
        DB::statement('CREATE INDEX sidx_localidades_geom ON localidades USING GIST (geom)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localidades');
    }
};
