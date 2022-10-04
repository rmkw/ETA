<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Jason',
	    'primer_apellido' => 'Aranda',
            'segundo_apellido' => 'Esparza',
	    'credencial' => '703523',
            'email' => 'jason26.aranda@gmail.com',
            'password' => bcrypt('Calos.manuel♥'),
	    'id_tipo_usuario' => 1
        ]);
    }
}
