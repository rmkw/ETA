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

Route::get('/D',function (){
    return view('dashboard3') ;
});

Route::get('/',function (){
    return view('dashboard') ;
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/componentes', [ComponentController::class, 'index'])->name('componentes');
