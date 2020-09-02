<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    protected $fillable = [
        'name',
        'tipo',
        'doc',
        'email',
        'contacto1',
        'contacto2',
        'empresa',
        'razon',
        'nit',
        'descripcion',
        'adjunto',
    ];
}
