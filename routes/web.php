<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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


Route::get('/cadastro', function(){
    return view('cadusuario');
});
Route::get('/albuns', [UsuarioController::class, 'index']);
Route::post('/albuns', [UsuarioController::class, 'store']);
Route::get('/albuns/{id}', [UsuarioController::class, 'destroy']);
Route::get('/texto/{id}', [UsuarioController::class, 'show']);


