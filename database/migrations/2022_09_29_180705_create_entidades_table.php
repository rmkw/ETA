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
        Schema::create('entidades', function (Blueprint $table) {
            $table->id();
            $table->char('cve_ent',2);
            $table->unsignedInteger('anio');
            $table->string('nombre_ent');
//            $table-> GEOM
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("SELECT AddGeometryColumn('public', 'entidades', 'geom', 4326, 'POINT', 2)");
        DB::statement('CREATE INDEX sidx_entidades_geom ON entidades USING GIST (geom)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidades');
    }
};
