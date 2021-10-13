<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alquilerPelicula extends Model
{
    //
    protected $fillable = [
        'idAlquiler', 'precioPorDia', 'fechaInicial', 'FechaFinal',
    ];
}
