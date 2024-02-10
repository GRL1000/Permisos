<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//División
Route::get('/division/nueva', [App\Http\Controllers\DivisionController::class, 'view'])->name('nueva.division');
Route::post('/division/guardar', [App\Http\Controllers\DivisionController::class, 'store'])->name('guardar.division');
Route::get('/divisiones', [App\Http\Controllers\DivisionController::class, 'index'])->name('divisiones');
Route::get('/division/eliminar', [App\Http\Controllers\DivisionController::class, 'delete'])->name('eliminar.division');

//Profesor
Route::get('/profesor/nuevo', [App\Http\Controllers\ProfesorController::class, 'view'])->name('nuevo.profesor');
Route::post('/profesor/guardar', [App\Http\Controllers\ProfesorController::class, 'store'])->name('guardar.profesor');
Route::get('/profesores', [App\Http\Controllers\ProfesorController::class, 'index'])->name('profesores');
Route::get('/profesor/eliminar', [App\Http\Controllers\ProfesorController::class, 'delete'])->name('eliminar.profesor');

//Puesto
Route::get('/puesto/nuevo', [App\Http\Controllers\PuestoController::class, 'view'])->name('nuevo.puesto');
Route::post('/puesto/guardar', [App\Http\Controllers\PuestoController::class, 'store'])->name('guardar.puesto');
Route::get('/puestos', [App\Http\Controllers\PuestoController::class, 'index'])->name('puestos');
Route::get('/puesto/eliminar', [App\Http\Controllers\PuestoController::class, 'delete'])->name('eliminar.puesto');

//Permisos
Route::get('/permiso/nuevo', [App\Http\Controllers\PermisoController::class, 'view'])->name('nuevo.permiso');
Route::post('/permiso/guardar', [App\Http\Controllers\PermisoController::class, 'store'])->name('guardar.permiso');
Route::get('/permisos', [App\Http\Controllers\PermisoController::class, 'index'])->name('permisos');
Route::get('/permiso/eliminar', [App\Http\Controllers\PermisoController::class, 'delete'])->name('eliminar.permiso');
