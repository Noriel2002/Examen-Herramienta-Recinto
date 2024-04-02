<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuidadorAnimalController;
use App\Http\Controllers\AnimalRecintoController;

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RecintoController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\Cuidador_AnimalController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\Animal_RecintoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('/Animal', AnimalController::class);
Route::resource('/Especie', EspecieController::class);
Route::resource('/Recinto', RecintoController::class);
Route::post('/Recinto/necesidades', 'RecintoController@necesidades');
Route::resource('/Cuidador', CuidadorController::class);
Route::resource('/CuidadorAnimal', CuidadorAnimalController::class);
Route::resource('/Actividad', ActividadController::class);
Route::resource('/AnimalRecinto', AnimalRecintoController::class);

