<?php

use App\Http\Controllers\ComponentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/2',function (){
    return view('two') ;
});

Route::get('/J',function (){
    return view('dashboard2') ;
});


Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/componentes', [ComponentController::class, 'index'])->name('componentes');
Route::get('/d', [ComponentController::class, 'index2'])->name('componentes2');

Route::get('/search', [ComponentController::class, 'search'])->name('busqueda');

Route::get('/traer', [ComponentController::class, 'getInfo']);
Route::get('/traerSub', [ComponentController::class, 'getInfoSub']);
Route::get('/traerTop', [ComponentController::class, 'getInfoTop']);
Route::get('/traerVar', [ComponentController::class, 'getInfoVar']);
