<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
}
protected $fillable = ['institucion', 'tipo_institucion', 'provincia', 'responsable', 'cargo', 'email', 'telefono', 'objetivos', 'necesidades'];