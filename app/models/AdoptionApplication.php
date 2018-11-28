<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class AdoptionApplication extends Model
{
	protected $table = "adoption_applications";
    protected $fillable = [
    	'nombre', 
        'cedula_identidad', 
    	'correo_electronico', 
    	'departamento', 
    	'provincia', 
    	'direccion', 
    	'ocupacion', 
    	'estado_civil', 
    	'estado_solicitud', 
    	'razon_adopcion', 
    	'mascotas_actuales', 
    	'razon_mascotas_esterilizadas', 
    	'mascotas_anteriomente', 
    	'estado_mascotas_anteriores', 
    	'visita_periodica_domicilio', 
    ];
}
