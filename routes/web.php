<?php

use App\Models\Categoria;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\CategoriaController;
/*
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::fallback( function () {
   return 'Aqui no debes meter las narices';
});


Route::controller(CategoriaController::class)->group( function () {
    Route::get('/',[CategoriaController::class, 'inicio']); //funciona
    Route::get('/categorias', [CategoriaController::class, 'listado']); //funciona
    Route::get('/categoria',[CategoriaController::class, 'agregar']); //funciona
    Route::post('/categoria',[CategoriaController::class, 'insertar']); //funciona

    Route::get('/categoria/{categoria}', [CategoriaController::class, 'editar']); //funciona
    Route::post('/categoria/{categoria}', [CategoriaController::class, 'actualizar']);
});
