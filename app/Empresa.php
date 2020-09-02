<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model

{
    protected $table = "Empresas";
    protected $fillable = [
        'user_id',
        'name',
        'dir',
        'telefono',
        'cel',
        'correo',
        'logo',
        'descripcion',
        'updated_at', 
        'created_at',
    ];
}
