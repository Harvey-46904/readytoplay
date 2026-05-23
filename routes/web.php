<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Wave\Facades\Wave;
use App\Http\Controllers\VistasController;
// Authentication routes
Auth::routes();

// Voyager Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('settings/escuelas/{id}', [VistasController::class, 'escuela'])
    ->name('escuela.detalle');
Route::get('/torneos/{slug}', [VistasController::class, 'torneo'])
    ->name('torneo.detalle');

// Wave routes
Wave::routes();
