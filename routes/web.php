<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ServiciosController;

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


Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

Route::get('/contacto', [InicioController::class, 'contacto'])->name('contacto');


Route::get('/dashboard', function () {
    return view('dashboard'); 
})->name('dashboard');


Route::get('/procedimientos/create', [ProcedimientoController::class, 'create'])->name('procedimientos.create');
Route::post('/procedimientos', [ProcedimientoController::class, 'store'])->name('procedimientos.store');
Route::put('/procedimientos/{id}', [ProcedimientoController::class, 'update'])->name('procedimientos.update');
Route::delete('/procedimientos/{id}', [ProcedimientoController::class, 'destroy'])->name('procedimientos.destroy');