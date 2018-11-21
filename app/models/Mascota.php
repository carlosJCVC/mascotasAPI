<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = ['nombre', 'raza', 'especie', 'edad', 'sexo', 'estado', 'imagen', 'enfermedades', 'procedencia', 'descripcion'];
}
