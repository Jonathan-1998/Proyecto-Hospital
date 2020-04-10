<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [ 'cedula_identidad', 'nombre', 'especialdad'];
}
