@extends('layouts.app')

@section('title', 'Contacto - ENFER-DATS')

@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

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
                         <!-- Formulario de contacto / Solicitud -->
                        <form action="{{ route('solicitudes.store') }}" method="POST"  class="formulario-enferdata-form">
                            @csrf
                            <h4 class="mb-4">Información Institucional</h4>
                            <div class="mb-3">
                                <label class="form-label">Nombre de la Institución o Servicio</label>
                                <input type="text" name="institucion" class="form-control" placeholder="Ej: Hospital Universitario de Mendoza" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tipo de Institución</label>
                                    <select name="tipo_institucion" class="form-select" required>
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
                                    <input type="text" name="provincia" class="form-control" placeholder="Ej: Mendoza" required>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h4 class="mb-4">Responsable de Contacto</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nombre y Apellido</label>
                                    <input type="text" name="responsable" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Cargo</label>
                                    <select name="cargo" class="form-select" required>
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
                                    <input type="email" name="email" class="form-control" placeholder="correo@institucion.com" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Teléfono</label>
                                    <input type="tel" name="telefono" class="form-control" placeholder="+54 9 261..." required>
                                </div>
                            </div>    
                            <hr class="my-4">
                            <h4 class="mb-4">Objetivos de Implementación</h4>
                            <div class="form-check">   
                                <input class="form-check-input" name="objetivos[]" type="checkbox" id="actividad">
                                <label class="form-check-label" for="actividad">Registro de Actividades de Enfermería</label>
                            </div>
                            <div class="form-check">    
                                <input class="form-check-input" name="objetivos[]" type="checkbox" id="insumos">
                                <label class="form-check-label" for="insumos">Gestión y Control de Insumos</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="objetivos[]" type="checkbox" id="indicadores">
                                <label class="form-check-label" for="indicadores">Indicadores y Reportes de Gestión</label>
                            </div>    
                            <div class="form-check">
                                <input class="form-check-input" name="objetivos[]" type="checkbox" id="costos">
                                <label class="form-check-label" for="costos">Análisis de Costos Operativos</label>
                            </div>      
                            <div class="form-check mb-4">
                                <input class="form-check-input" name="objetivos[]" type="checkbox" id="productividad">
                                <label class="form-check-label" for="productividad">Medición de Productividad y Carga de Trabajo</label>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">¿Qué necesidad desea resolver con ENFER-DATS?</label>    
                                <textarea class="form-control" name="necesidades" rows="5" placeholder="Describa brevemente la situación actual de su institución y los objetivos que desea alcanzar." required></textarea>
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