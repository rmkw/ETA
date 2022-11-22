<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComponentController extends Controller
{
    public function index(){
        $componentes = DB::table('componentes')->orderBy('id_comp')->get();
        $subComponentes = DB::table('sub_componentes')->orderBy('id')->get();
        $topicos = DB::table('topicos')->orderBy('id')->get();
        $variables = DB::table('variables')->orderBy('id')->get();
//        dd($variables);
        return view('two', [
            'componentes' => $componentes, 'subComponentes' => $subComponentes,
            'topicos' => $topicos, 'variables' => $variables
        ]);
    }
}
