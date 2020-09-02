<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    protected $table = 'liders';
    protected $fillable = [        
        'name',
        'coop',
        'candidato',
        'desxripcion',
       
    ];
}
