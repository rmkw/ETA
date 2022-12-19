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
    public function index2(){
        $componentes = DB::table('componentes')->orderBy('id_comp')->get();
        $subComponentes = DB::table('sub_componentes')->orderBy('id')->get();
        $topicos = DB::table('topicos')->orderBy('id')->get();
        $variables = DB::table('variables')->orderBy('id')->get();
//        dd($variables);
        return view('tree', [
            'componentes' => $componentes, 'subComponentes' => $subComponentes,
            'topicos' => $topicos, 'variables' => $variables
        ]);
    }
    public function search(){
        return view('search');
    }
    public function getInfo(){
        return  DB::table('componentes')->orderBy('id_comp')->get();
    }
    public function getInfoSub(){
        return  DB::table('sub_componentes')->orderBy('id')->get();
    }
    public function getInfoTop(){
        return  DB::table('topicos')->orderBy('id')->get();
    }
    public function getInfoVar(){
        return  DB::table('variables')->orderBy('id')->get();
    }

}
