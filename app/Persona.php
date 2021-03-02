<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable=[        
            'nombre',
            'apellidop',
            'apellidom',
            'fechanacimiento',
            'direccion',
            'carnet',
            'expedido',
            'genero',
            'observacion',
            'foto',
            'persona_id',
            'idantiguo',
    ];
}
