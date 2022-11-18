<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        $componentes = Componente::all();
        $componentes = DB::table('componentes')->get();
     //   dd($componentes);
        return view('dashboard', [
            'componentes' => $componentes
        ]);
    }
}
