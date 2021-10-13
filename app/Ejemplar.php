<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    //
    protected $fillable = [
        'idEjemplar', 'cantidad', 'precio',
    ];
}
