<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = [
        'idCliente', 'identificacion', 'nombres', 'direccion', 'telefono', 'correo',
    ];
}
