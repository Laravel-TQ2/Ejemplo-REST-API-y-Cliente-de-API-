<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/listar",[PersonaController::class,'Listar']);


Route::get('/crear', function () {
    return view('crear');
});

Route::post("/crear",[PersonaController::class,'Crear']);



Route::get('/eliminar', function () {
    return view('eliminar');
});

Route::post("/eliminar",[PersonaController::class,'Eliminar']);
