<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generadoras extends Model
{
    protected $fillable = [
        'name',
        'dir',
        'telefono',
        'cel',
        'correo',
        'descripcion',
        'logo',
        'updated_at', 
        'created_at',
    ];
}
