<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Procedimiento;

use App\Models\Insumo;


class DashboardController extends Controller
{
    public function index()
    {
        $tecnicasDemo = Procedimiento::all();
        $insumosDemo = Insumo::all();
        return view('dashboard', compact('tecnicasDemo', 'insumosDemo'));
    }
}