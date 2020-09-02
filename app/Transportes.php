<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportes extends Model
{
    protected $fillable = [
        'name',  
        'apellido', 
        'sex', 
        'f_nac', 
        'lugar_nac', 
        'tipo_doct', 
        'num_doct', 
        'tipo_lic', 
        'num_lic', 
        'f_vencimiento', 
        'num_libret_t', 
        'pasado_judicial', 
        'estado_civil', 
        'ciudad_recidencia', 
        'dir', 
        'logo', 
        't_fijo', 
        't_celular',  
        'experiencia', 
        'correo',
    ];
}

