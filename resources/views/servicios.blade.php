@extends('layouts.app')

@section('title', 'Servicios - ENFER-DATS')

@section('content')
<div class="container py-5">
    <h1 class="display-4 fw-bold">Nuestros Servicios</h1>
    <p class="lead">ENFER-DATS ofrece soluciones integrales para la gestión de enfermería.</p>
    <hr class="my-4">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Registro Digital</h5>
                    <p class="card-text">Centraliza todas las actividades de enfermería en una única plataforma.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Control de Insumos</h5>
                    <p class="card-text">Seguimiento completo del consumo y disponibilidad de materiales.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Análisis Estratégico</h5>
                    <p class="card-text">Indicadores que permiten visualizar costos, productividad y trazabilidad.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection