@extends('layouts.app')

@section('title', 'Dashboard - ENFER-DATS')

@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
    <h1 class="page-title">Dashboard de Costos Operativos · ENFER-DATS</h1>
    <p class="text-muted subtitle">
        Gestión analítica de costos, control de insumos y monitoreo de actividades asistenciales.
        <span class="text-secondary">(Datos almacenados en base de datos)</span>
    </p>

    <!-- ========== TABLA DE PROCEDIMIENTOS ========== -->
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Catálogo de Técnicas Asistenciales</span>
            <span class="float-end text-secondary small">
                Costo operativo por procedimiento registrado
            </span>
        </div>

        <!-- Formulario para agregar nuevo procedimiento -->
        <div class="card-body pt-2 pb-0">
            <form action="{{ route('procedimientos.store') }}" method="POST" class="row g-2 align-items-end">
                @csrf
                <div class="col-md-6">
                    <label class="form-label small">Nuevo procedimiento</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" placeholder="Nombre" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label small">Costo ($)</label>
                    <input type="number" step="0.01" name="costo" class="form-control form-control-sm" placeholder="0.00" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary w-100">Agregar</button>
                </div>
            </form>
        </div>

        <!-- Tabla de procedimientos -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-dashboard" id="tablaProcedimientos">
                    <thead>
                        <tr>
                            <th class="id-col">ID</th>
                            <th>Procedimiento Asistencial</th>
                            <th style="width:140px;">Costo Unitario ($)</th>
                            <th class="accion-col">Gestión</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tecnicasDemo as $item)
                        <tr data-id="{{ $item->id }}">
                            <td class="id-col">{{ $item->id }}</td>
                            <td>
                                <input type="text" class="form-control-plaintext nombre-input" value="{{ $item->nombre }}" placeholder="Nombre">
                            </td>
                            <td>
                                <input type="number" step="0.01" min="0" class="form-control-plaintext precio-input" value="{{ number_format($item->costo, 2, '.', '') }}" placeholder="0.00">
                            </td>
                            <td class="accion-col">
                                <button class="btn-accion actualizar-fila" data-id="{{ $item->id }}" data-tabla="procedimientos" title="Actualizar">💾</button>
                                <form action="{{ route('procedimientos.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-accion" onclick="return confirm('¿Eliminar este procedimiento?')" title="Eliminar">✕</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top-0 py-2">
            <button class="btn-accion" id="btnAgregarTecnica" style="padding:0.2rem 0.8rem;">+ Registrar procedimiento</button>
            <span class="text-muted small ms-2">(alternativa al formulario superior)</span>
        </div>
    </div>

    <!-- ========== TABLA DE INSUMOS ========== -->
    <div class="card mt-4">
        <div class="card-header">
            <span class="fw-bold">Catálogo de Insumos Hospitalarios</span>
            <span class="float-end text-secondary small">
                Costo unitario y valorización de stock
            </span>
        </div>

        <!-- Formulario para agregar nuevo insumo -->
        <div class="card-body pt-2 pb-0">
            <form action="{{ route('insumos.store') }}" method="POST" class="row g-2 align-items-end">
                @csrf
                <div class="col-md-6">
                    <label class="form-label small">Nuevo insumo</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" placeholder="Nombre" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label small">Precio ($)</label>
                    <input type="number" step="0.01" name="precio" class="form-control form-control-sm" placeholder="0.00" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-primary w-100">Agregar</button>
                </div>
            </form>
        </div>

        <!-- Tabla de insumos -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-dashboard" id="tablaInsumos">
                    <thead>
                        <tr>
                            <th class="id-col">ID</th>
                            <th>Recurso Clínico</th>
                            <th style="width:140px;">Costo Unitario ($)</th>
                            <th class="accion-col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($insumosDemo as $item)
                        <tr data-id="{{ $item->id }}">
                            <td class="id-col">{{ $item->id }}</td>
                            <td>
                                <input type="text" class="form-control-plaintext nombre-input" value="{{ $item->nombre }}" placeholder="Nombre">
                            </td>
                            <td>
                                <input type="number" step="0.01" min="0" class="form-control-plaintext precio-input" value="{{ number_format($item->precio, 2, '.', '') }}" placeholder="0.00">
                            </td>
                            <td class="accion-col">
                                <button class="btn-accion actualizar-fila" data-id="{{ $item->id }}" data-tabla="insumos" title="Actualizar">💾</button>
                                <form action="{{ route('insumos.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-accion" onclick="return confirm('¿Eliminar este insumo?')" title="Eliminar">✕</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top-0 py-2">
            <button class="btn-accion" id="btnAgregarInsumo" style="padding:0.2rem 0.8rem;">+ Registrar recurso</button>
            <span class="text-muted small ms-2">(alternativa al formulario superior)</span>
        </div>
    </div>

    <!-- Botones de navegación -->
    <div class="row mt-3">
        <div class="col-6">
            <span id="mensajeActualizacion" class="text-muted small"></span>
        </div>
        <div class="col-6 text-end">
            <a href="{{ route('inicio') }}" class="btn-volver">← Volver a la página principal</a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    (function() {
        'use strict';

        // Función para mostrar mensaje temporal
        function mostrarMensaje(texto, tipo = 'success') {
            const el = document.getElementById('mensajeActualizacion');
            el.textContent = texto;
            el.style.color = tipo === 'success' ? '#198754' : '#dc3545';
            setTimeout(() => { el.textContent = ''; }, 4000);
        }

        // Manejar clic en botón actualizar (💾)
        document.querySelectorAll('.actualizar-fila').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const id = this.dataset.id;
                const tabla = this.dataset.tabla; // 'procedimientos' o 'insumos'
                const row = this.closest('tr');
                const nombre = row.querySelector('.nombre-input').value.trim();
                const precio = row.querySelector('.precio-input').value.trim();

                if (!nombre || isNaN(parseFloat(precio))) {
                    mostrarMensaje('Completa todos los campos correctamente.', 'error');
                    return;
                }

                // Determinar la ruta según la tabla
                const url = `/${tabla}/${id}`;
                const data = {
                    nombre: nombre,
                    precio: tabla === 'insumos' ? parseFloat(precio) : parseFloat(precio), // en insumos se llama 'precio'
                    // Nota: en procedimientos la columna es 'costo', pero en el controlador aceptamos 'costo' o 'precio'
                    // Para simplificar, el controlador debe leer 'precio' para insumos y 'costo' para procedimientos.
                    // Vamos a enviar un campo genérico 'valor' y en el controlador lo asignamos.
                    // O mejor, usar el nombre correcto según la tabla.
                };

                // Para insumos, el campo es 'precio'; para procedimientos, 'costo'
                if (tabla === 'insumos') {
                    data.precio = parseFloat(precio);
                } else {
                    data.costo = parseFloat(precio);
                }

                fetch(url, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        mostrarMensaje(data.message || 'Actualizado correctamente.', 'success');
                    } else {
                        mostrarMensaje(data.message || 'Error al actualizar.', 'error');
                    }
                })
                .catch(error => {
                    mostrarMensaje('Error de conexión.', 'error');
                    console.error(error);
                });
            });
        });

        // Botones "Agregar" alternativos (desplazan al formulario superior)
        document.getElementById('btnAgregarTecnica')?.addEventListener('click', function() {
            const form = document.querySelector('#tablaProcedimientos').closest('.card').querySelector('form');
            if (form) form.querySelector('input[name="nombre"]').focus();
        });
        document.getElementById('btnAgregarInsumo')?.addEventListener('click', function() {
            const form = document.querySelector('#tablaInsumos').closest('.card').querySelector('form');
            if (form) form.querySelector('input[name="nombre"]').focus();
        });

    })();
</script>
@endpush