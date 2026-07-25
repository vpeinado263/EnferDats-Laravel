<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\DashboardController;

Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

Route::get('/contacto', [InicioController::class, 'contacto'])->name('contacto');

// Dashboard usando el controlador
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CRUD para procedimientos (todas las rutas excepto 'show')
Route::resource('procedimientos', ProcedimientoController::class)->except(['show']);

// CRUD para insumos (crea el controlador InsumoController con métodos similares)
Route::resource('insumos', InsumoController::class)->except(['show']);

// Ruta para guardar solicitudes
Route::post('/solicitudes', [SolicitudController::class, 'store'])->name('solicitudes.store');