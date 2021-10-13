<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    //
    protected $fillable = [
        'idPelicula', 'titulo', 'nacionalidad', 'productora', 'fecha',
    ];
}
