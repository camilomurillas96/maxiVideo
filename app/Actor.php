<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    protected $fillable = [
        'idActor', 'nombres', 'nacionalidad', 'sexo', 'tipoActor',
    ];
}
