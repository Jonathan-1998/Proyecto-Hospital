<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [ 'cedula_identidad', 'numero_registro', 'numero_cama',
                            'nombre', 'direccion', 'fecha_nacimiento', 'sexo'];
}
