@extends('layouts.app')

@section('title', 'Dashboard - ENFER-DATS')

@push('styles')

@endpush

@section('content')
<div class="container">
    <h1 class="page-title">Dashboard de Costos Operativos · ENFER-DATS</h1>
    <p class="text-muted" style="font-weight:300; margin-top:-0.5rem; margin-bottom:2rem;">
        Gestión analítica de costos, control de insumos y monitoreo de actividades asistenciales.
        <span class="text-secondary">(Datos de ejemplo – sin conexión a base de datos)</span>
    </p>

    <!-- Tabla de técnicas -->
    <div class="card">
        <div class="card-header">
            <span style="font-weight:600;">Catálogo de Técnicas Asistenciales</span>
            <span class="float-end text-secondary" style="font-weight:300; font-size:0.9rem;">
                Costo operativo por procedimiento registrado
            </span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table" id="tablaTecnicas">
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
                        <tr data-id="{{ $item['id'] }}">
                            <td class="id-col">{{ $item['id'] }}</td>
                            <td>
                                <input type="text" class="form-control-plaintext nombre-input" value="{{ $item['nombre'] }}" placeholder="Nombre">
                            </td>
                            <td>
                                <input type="number" step="0.01" min="0" class="form-control-plaintext precio-input" value="{{ number_format($item['precio'], 2, '.', '') }}" placeholder="0.00">
                            </td>
                            <td class="accion-col">
                                <button class="btn-accion eliminar-fila" title="Eliminar fila">✕</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top-0" style="padding:0.5rem 1rem; border-top:1px solid #dee2e6;">
            <button class="btn-accion" id="btnAgregarTecnica" style="padding:0.2rem 0.8rem;">+ Registrar procedimiento</button>
        </div>
    </div>

    <!-- Tabla de insumos -->
    <div class="card">
        <div class="card-header">
            <span style="font-weight:600;">Catálogo de Insumos Hospitalarios</span>
            <span class="float-end text-secondary" style="font-weight:300; font-size:0.9rem;">
                Costo unitario y valorización de stock
            </span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table" id="tablaInsumos">
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
                        <tr data-id="{{ $item['id'] }}">
                            <td class="id-col">{{ $item['id'] }}</td>
                            <td>
                                <input type="text" class="form-control-plaintext nombre-input" value="{{ $item['nombre'] }}" placeholder="Nombre">
                            </td>
                            <td>
                                <input type="number" step="0.01" min="0" class="form-control-plaintext precio-input" value="{{ number_format($item['precio'], 2, '.', '') }}" placeholder="0.00">
                            </td>
                            <td class="accion-col">
                                <button class="btn-accion eliminar-fila" title="Eliminar fila">✕</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top-0" style="padding:0.5rem 1rem; border-top:1px solid #dee2e6;">
            <button class="btn-accion" id="btnAgregarInsumo" style="padding:0.2rem 0.8rem;">+ Registrar recurso</button>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6">
            <button class="btn-guardar" id="btnGuardarCambios">💾 Consolidar Actualización</button>
            <span id="mensajeGuardado" class="text-muted ms-3" style="font-size:0.9rem;"></span>
        </div>
        <div class="col-6 text-end">
            <a href="{{ route('inicio') }}" class="btn-volver">← Volver a la página principal</a>
        </div>
    </div>

    <div class="footer-demo">
        © 2026 ENFER-DATS · Plataforma de Gestión, Trazabilidad y Analítica de Enfermería // VHPTech
        <span class="text-secondary">Sin conexión a BD – solo simulación local</span>
    </div>
</div>
@endsection

@push('scripts')
<script>
    (function() {
        'use strict';

        function obtenerDatosTabla(tableId) {
            const tbody = document.querySelector('#' + tableId + ' tbody');
            const filas = tbody.querySelectorAll('tr');
            const datos = [];
            filas.forEach(function(tr) {
                const id = tr.dataset.id ? parseInt(tr.dataset.id) : null;
                const nombreInput = tr.querySelector('.nombre-input');
                const precioInput = tr.querySelector('.precio-input');
                if (nombreInput && precioInput) {
                    const nombre = nombreInput.value.trim();
                    const precio = parseFloat(precioInput.value) || 0;
                    datos.push({
                        id: id,
                        nombre: nombre,
                        precio: precio
                    });
                }
            });
            return datos;
        }

        function mostrarMensaje(texto, esExito = true) {
            const msg = document.getElementById('mensajeGuardado');
            msg.textContent = texto;
            msg.style.color = esExito ? '#198754' : '#dc3545';
            setTimeout(() => {
                msg.textContent = '';
            }, 4000);
        }

        document.getElementById('btnGuardarCambios').addEventListener('click', function() {
            const tecnicas = obtenerDatosTabla('tablaTecnicas');
            const insumos = obtenerDatosTabla('tablaInsumos');
            console.log('📋 Técnicas:', tecnicas);
            console.log('📦 Insumos:', insumos);
            mostrarMensaje('✅ Cambios simulados guardados localmente (consola)', true);
        });

        function agregarFila(tableId, nombrePlaceholder = 'Nuevo', precioPlaceholder = '0.00') {
            const tbody = document.querySelector('#' + tableId + ' tbody');
            const filas = tbody.querySelectorAll('tr');
            let maxId = 0;
            filas.forEach(tr => {
                const id = parseInt(tr.dataset.id);
                if (!isNaN(id) && id > maxId) maxId = id;
            });
            const nuevoId = maxId + 1;

            const tr = document.createElement('tr');
            tr.dataset.id = nuevoId;

            const tdId = document.createElement('td');
            tdId.className = 'id-col';
            tdId.textContent = nuevoId;
            tr.appendChild(tdId);

            const tdNombre = document.createElement('td');
            const inputNombre = document.createElement('input');
            inputNombre.type = 'text';
            inputNombre.className = 'form-control-plaintext nombre-input';
            inputNombre.placeholder = nombrePlaceholder;
            tdNombre.appendChild(inputNombre);
            tr.appendChild(tdNombre);

            const tdPrecio = document.createElement('td');
            const inputPrecio = document.createElement('input');
            inputPrecio.type = 'number';
            inputPrecio.step = '0.01';
            inputPrecio.min = '0';
            inputPrecio.className = 'form-control-plaintext precio-input';
            inputPrecio.placeholder = precioPlaceholder;
            tdPrecio.appendChild(inputPrecio);
            tr.appendChild(tdPrecio);

            const tdAccion = document.createElement('td');
            tdAccion.className = 'accion-col';
            const btnEliminar = document.createElement('button');
            btnEliminar.className = 'btn-accion eliminar-fila';
            btnEliminar.title = 'Eliminar fila';
            btnEliminar.textContent = '✕';
            tdAccion.appendChild(btnEliminar);
            tr.appendChild(tdAccion);

            tbody.appendChild(tr);
            inputNombre.focus();
        }

        document.getElementById('btnAgregarTecnica').addEventListener('click', function() {
            agregarFila('tablaTecnicas', 'Nueva técnica', '0.00');
        });

        document.getElementById('btnAgregarInsumo').addEventListener('click', function() {
            agregarFila('tablaInsumos', 'Nuevo insumo', '0.00');
        });

        document.addEventListener('click', function(e) {
            const btn = e.target.closest('.eliminar-fila');
            if (!btn) return;
            const tr = btn.closest('tr');
            if (!tr) return;
            if (confirm('¿Eliminar esta fila?')) {
                tr.remove();
                const tbody = tr.parentNode;
                const filas = tbody.querySelectorAll('tr');
                filas.forEach((fila, index) => {
                    const idCelda = fila.querySelector('.id-col');
                    if (idCelda) {
                        idCelda.textContent = index + 1;
                        fila.dataset.id = index + 1;
                    }
                });
            }
        });
    })();
</script>
@endpush