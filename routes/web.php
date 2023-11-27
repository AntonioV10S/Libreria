<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Inicio');
});
Route::get('/inicio', [LibrosController::class, 'Iniciar']);
Route::post('/guardar', [LibrosController::class, 'Save']);
Route::get('/mostrar', [LibrosController::class, 'index']);
Route::delete('/eliminar/{id}', [LibrosController::class, 'delete']);
