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
    
    <!-- Formulario de contacto / Solicitud -->
    <section id="solicitud" class="py-5">
        <div class="container bg-light-subtle">
            <div class="text-center mb-5">
                <span class="badge bg-primary">Solicitar Alta</span>  
                <h2 class="fw-bold mt-3">Comenzá a utilizar ENFER-DATS</h2>      
                <p class="text-muted">Completá el formulario y nuestro equipo se pondrá en contacto para evaluar las necesidades de tu institución.</p>    
            </div>    
            <div class="row justify-content-center">        
                <div class="col-lg-8">       
                    <div class="card shadow-sm border-0">   
                        <div class="card-body p-4 p-md-5">
                            <form class="formulario-enferdata-form">
                                <h4 class="mb-4">Información Institucional</h4>
                                <div class="mb-3">
                                    <label class="form-label">Nombre de la Institución o Servicio</label>
                                    <input type="text" class="form-control" placeholder="Ej: Hospital Universitario de Mendoza" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Tipo de Institución</label>
                                        <select class="form-select" required>
                                            <option selected disabled>Seleccione...</option>
                                            <option>Hospital</option>
                                            <option>Clínica</option>
                                            <option>Centro de Salud</option>
                                            <option>Geriátrico</option>
                                            <option>Servicio de Enfermería</option>
                                            <option>Otro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provincia</label>
                                        <input type="text" class="form-control" placeholder="Ej: Mendoza" required>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <h4 class="mb-4">Responsable de Contacto</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nombre y Apellido</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Cargo</label>
                                        <select class="form-select" required>
                                            <option selected disabled>Seleccione...</option>
                                            <option>Jefe de Enfermería</option>
                                            <option>Supervisor/a</option>
                                            <option>Director/a</option>
                                            <option>Administrador/a</option>
                                            <option>Otro</option>
                                        </select>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" placeholder="correo@institucion.com" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" placeholder="+54 9 261..." required>
                                    </div>
                                </div>    
                                <hr class="my-4">
                                <h4 class="mb-4">Objetivos de Implementación</h4>
                                <div class="form-check">   
                                    <input class="form-check-input" type="checkbox" id="actividad">
                                    <label class="form-check-label" for="actividad">Registro de Actividades de Enfermería</label>
                                </div>
                                <div class="form-check">    
                                    <input class="form-check-input" type="checkbox" id="insumos">
                                    <label class="form-check-label" for="insumos">Gestión y Control de Insumos</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="indicadores">
                                    <label class="form-check-label" for="indicadores">Indicadores y Reportes de Gestión</label>
                                </div>    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="costos">
                                    <label class="form-check-label" for="costos">Análisis de Costos Operativos</label>
                                </div>      
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="productividad">
                                    <label class="form-check-label" for="productividad">Medición de Productividad y Carga de Trabajo</label>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">¿Qué necesidad desea resolver con ENFER-DATS?</label>    
                                    <textarea class="form-control" rows="5" placeholder="Describa brevemente la situación actual de su institución y los objetivos que desea alcanzar." required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Enviar Solicitud</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
@endsection