<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Datos de ejemplo (los mismos que estaban en el PHP)
        $tecnicasDemo = [
            ['id' => 1, 'nombre' => 'Toma de signos vitales', 'precio' => 5.50],
            ['id' => 2, 'nombre' => 'Administración de medicamentos', 'precio' => 8.00],
            ['id' => 3, 'nombre' => 'Curaciones (por herida)', 'precio' => 12.75],
            ['id' => 4, 'nombre' => 'Canalización de vía periférica', 'precio' => 15.00],
            ['id' => 5, 'nombre' => 'Monitorización continua', 'precio' => 20.00],
        ];

        $insumosDemo = [
            ['id' => 1, 'nombre' => 'Guantes quirúrgicos (par)', 'precio' => 2.30],
            ['id' => 2, 'nombre' => 'Jeringas 5ml (unidad)', 'precio' => 1.10],
            ['id' => 3, 'nombre' => 'Alcohol en gel (500ml)', 'precio' => 4.50],
            ['id' => 4, 'nombre' => 'Mascarilla N95 (unidad)', 'precio' => 3.80],
            ['id' => 5, 'nombre' => 'Venda elástica (unidad)', 'precio' => 6.20],
        ];

        return view('dashboard', compact('tecnicasDemo', 'insumosDemo'));
    }
}