<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'institucion' => 'required|string|max:255',
        'tipo_institucion' => 'nullable|string',
        'provincia' => 'nullable|string',
        'responsable' => 'required|string|max:255',
        'cargo' => 'nullable|string',
        'email' => 'required|email|max:255',
        'telefono' => 'nullable|string',
        'objetivos' => 'nullable|string',
        'necesidades' => 'nullable|string',
    ]);

    Solicitud::create($request->all());
    return redirect()->route('contacto')->with('success', 'Solicitud enviada correctamente.');
}
}
