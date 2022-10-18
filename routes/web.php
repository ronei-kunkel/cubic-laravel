<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FuncaoController;
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
Route::resource('usuario', UsuarioController::class)
  ->except(['show']);

Route::resource('funcao', FuncaoController::class)
  ->except(['show']);
  