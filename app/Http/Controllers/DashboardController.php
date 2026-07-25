<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Procedimiento;

use App\Models\Insumo;


class DashboardController extends Controller
{
    public function index()
    {
        $tecnicasDemo = Procedimiento::all(); // antes era un array
        $insumosDemo = Insumo::all();
        return view('dashboard', compact('tecnicasDemo', 'insumosDemo'));
    }
}