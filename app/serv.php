<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serv extends Model
{
    protected $fillable = 
    [
        'empresa',
        'fecha',
        'origen',
        'destino',
        'h_salida',
        'h_llegada',
        'capacidad_d',
        'vehiculo',
        'contacto',
        'correo',
        'logo'
    ];
}
