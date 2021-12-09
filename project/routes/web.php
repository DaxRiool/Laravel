<?php

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
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SolarSystemController;

Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{filter}', [PlanetController::class, 'show']);

Route::get('/solarsystems', [SolarSystemController::class, 'indexsolar']);
Route::get('/solarsystems/{id}', [SolarSystemController::class,'showsolar']);


?>