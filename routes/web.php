<?php

use App\Http\Controllers\AsesorController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\UnidadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Asignatura;
use App\Models\Progedu;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('asignatura/unidad/{id}', [AsignaturaController::class,'unidades']);
Route::resource('asignatura', AsignaturaController::class);


Route::resource('asesores', AsesorController::class);

Route::resource('unidades', UnidadController::class);
