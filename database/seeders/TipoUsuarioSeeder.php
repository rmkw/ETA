<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_usuario')->insert([
            'id_tipo_usuario' => 1,
            'nombre' => 'admin',
        ]);
        DB::table('tipos_usuario')->insert([
	    'id_tipo_usuario' => 2,
            'nombre' => 'capturista',
        ]);
        DB::table('tipos_usuario')->insert([
            'id_tipo_usuario' => 3,
            'nombre' => 'revisador',
        ]);
        DB::table('tipos_usuario')->insert([
            'id_tipo_usuario' => 4,
            'nombre' => 'autorizador',
        ]);
    }
}
