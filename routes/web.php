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