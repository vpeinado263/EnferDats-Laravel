@extends('layouts.app')

@section('title', 'Enfer-Dats - Inicio')

@section('content')
    <!-- Seccion Inicio (Hero) -->
    <section id="inicio">
        <div class="container">      
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="badge bg-primary mb-3">Sistema de Gestión</span>
                    <h1 class="display-4 fw-bold mb-4">Bienvenidos</h1>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('ENFER-DATS-Logo.png') }}" alt="EnferData-Logo" class="img-fluid rounded">   
                </div>
            </div>
        </div>
    </section>
    
    <!-- Seccion Indicadores -->
    <section class="indicadores py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <h2>350+</h2>
                    <p>Actividades Registradas</p>
                </div>
                <div class="col-md-4">
                    <h2>125+</h2>
                    <p>Insumos Controlados</p>
                </div>
                <div class="col-md-4">
                    <h2>98%</h2>
                    <p>Trazabilidad</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección beneficios -->
    <section id="beneficios" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary">Beneficios</span>
                <p class="text-muted">Optimiza procesos, mejora la trazabilidad y toma decisiones basadas en datos.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Registro Digital</h5>
                            <p class="card-text">Centraliza todas las actividades de enfermería en una única plataforma.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">     
                    <div class="card h-100 shadow-sm"> 
                        <div class="card-body text-center">
                            <h5 class="card-title">Control de Insumos</h5>
                            <p class="card-text">Seguimiento completo del consumo y disponibilidad de materiales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Indicadores</h5>
                            <p class="card-text">Obtén estadísticas para optimizar la gestión de recursos y personal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Seguridad</h5>
                            <p class="card-text">Información protegida y accesible desde cualquier dispositivo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
    
    <!-- Sección de servicios o características (cards) -->
    <section id="areas" class="py-5 bg-dark">
        <div class="container">  
            <div class="text-center mb-5">  
                <span class="badge bg-primary">Áreas de Gestión</span>
                <h2 class="fw-bold text-light">Transformando datos en información útil</h2>
                <p class="text-muted">ENFER-DATS permite registrar, analizar y comprender el verdadero impacto de las actividades de enfermería.</p>
            </div>
            <div class="row g-4"> 
                <div class="col-md-4"> 
                    <div class="card h-100 shadow-sm"> 
                        <div class="card-body text-center">
                            <h1 class="text-primary">1</h1>
                            <h4>Registro de Actividades</h4>
                            <p>Documentación de procedimientos, controles y tareas realizadas por el personal de enfermería.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="card h-100 shadow-sm"> 
                        <div class="card-body text-center">
                            <h1 class="text-primary">2</h1>
                            <h4>Gestión de Insumos</h4>
                            <p>Seguimiento del consumo, utilización y disponibilidad de recursos e insumos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h1 class="text-primary">3</h1>
                            <h4>Análisis Estratégico</h4>
                            <p>Indicadores que permiten visualizar costos, productividad y trazabilidad de los procesos asistenciales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection