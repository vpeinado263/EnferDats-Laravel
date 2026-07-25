<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsumoController extends Controller
{
    public function index()
    {
        return redirect()->route('dashboard');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);
    
        Insumo::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Insumo creado.');
    }

    public function update(Request $request, $id)
    
    {
        $procedimiento = Insumo::findOrFail($id);
        $request->validate([
        'nombre' => 'required|string|max:255',
        'precio' => 'required|numeric|min:0',]);
        $procedimiento->update($request->all());
        
        return redirect()->route('dashboard')->with('success', 'Insumo actualizado.');
    }

    
    public function destroy($id)
    {
        Insumo::findOrFail($id)->delete();
        return redirect()->route('dashboard')->with('success', 'Insumo eliminado.');
    }
}
