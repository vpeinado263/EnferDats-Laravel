<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitud;

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

    // Debe Convertir los array de objetivos a string separado por comas
    $objetivos = $request->has('objetivos') ? implode(', ', $request->objetivos) : null;

    Solicitud::create([
        'institucion' => $request->institucion,
        'tipo_institucion' => $request->tipo_institucion,
        'provincia' => $request->provincia,
        'responsable' => $request->responsable,
        'cargo' => $request->cargo,
        'email' => $request->email,
        'telefono' => $request->telefono,
        'objetivos' => $objetivos,
        'necesidades' => $request->necesidades,
    ]);

    return redirect()->route('contacto')->with('success', 'Solicitud enviada correctamente.');
}
}
