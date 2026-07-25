<?php

namespace App\Http\Controllers;

use App\Models\Procedimiento;
use Illuminate\Http\Request;

class ProcedimientoController extends Controller

{
    public function index()
    {
        return redirect()->route('dashboard');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'costo' => 'required|numeric|min:0',
        ]);
    
        Procedimiento::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Procedimiento creado.');
    }

    public function update(Request $request, $id)
    
    {
        $procedimiento = Procedimiento::findOrFail($id);
        $request->validate([
        'nombre' => 'required|string|max:255',
        'costo' => 'required|numeric|min:0',]);
        $procedimiento->update($request->all());
        
        return redirect()->route('dashboard')->with('success', 'Procedimiento actualizado.');
    }

    
    public function destroy($id)
    {
        Procedimiento::findOrFail($id)->delete();
        return redirect()->route('dashboard')->with('success', 'Procedimiento eliminado.');
    }
}
