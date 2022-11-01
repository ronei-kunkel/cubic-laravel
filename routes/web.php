<?php

use App\Http\Controllers\CondominioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FuncaoController;
use App\Http\Controllers\RuaController;
use App\Http\Controllers\EntrypointController;
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

/**
 * O método resource permite que eu use a convenção de mapeamento de rotas para actions do laravel
 */
Route::resource('/', EntrypointController::class)
  ->only(['index']);

Route::resource('usuario', UsuarioController::class)
  ->except(['show']);

Route::resource('funcao', FuncaoController::class)
  ->except(['show']);

Route::resource('rua', RuaController::class)
  ->except(['show']);

Route::resource('condominio', CondominioController::class)
  ->except(['show']);