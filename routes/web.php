<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\SolicitudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página de inicio 
Route::get('/', [InicioController::class, 'index'])->name('inicio');

// Página de servicios
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

// Página de contacto 
Route::get('/contacto', [InicioController::class, 'contacto'])->name('contacto');

// Dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CRUD para procedimientos 
Route::resource('procedimientos', ProcedimientoController::class)->except(['show']);

// CRUD para insumos 
Route::resource('insumos', InsumoController::class)->except(['show']);

// Guardar solicitudes
Route::post('/solicitudes', [SolicitudController::class, 'store'])->name('solicitudes.store');