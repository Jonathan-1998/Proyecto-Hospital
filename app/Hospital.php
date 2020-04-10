<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [ 'nombre', 'duracion', 'direccion', 'telefono', 'cantidad_camas'];
}
