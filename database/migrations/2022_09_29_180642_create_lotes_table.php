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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id('id_lote');
            $table->text('linaje');
            #$table-> *** ('comp_geo')
            $table->unsignedInteger('id_unidad');
            $table->foreign('id_unidad')->references('id_unidad')->on('unidades_medida');
            $table->unsignedInteger('id_cob_geo');
            $table->foreign('id_cob_geo')->references('id_cob_geo')->on('coberturas_geograficas');
            $table->unsignedInteger('id_ref_esp');
            $table->foreign('id_ref_esp')->references('id_ref_esp')->on('referencias_espaciales');
            $table->unsignedInteger('id_comp');
            $table->foreign('id_comp')->references('id_comp')->on('componentes');
            $table->unsignedInteger('id_sub');
            $table->foreign('id_sub')->references('id')->on('sub_componentes');
            $table->unsignedInteger('id_top');
            $table->foreign('id_top')->references('id')->on('topicos');
            $table->unsignedInteger('id_var');
            $table->foreign('id_var')->references('id')->on('variables');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("SELECT AddGeometryColumn('public', 'lotes', 'comp_geo', 4326, 'POINT', 2)");
        DB::statement('CREATE INDEX sidx_lotes_geom ON lotes USING GIST (comp_geo)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotes');
    }
};
