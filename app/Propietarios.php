<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietarios extends Model
{
    protected $fillable = [
        'name',
        'doc_pro', 
        'tenedor', 
        'doc_ten', 
        'trans', 
        'afiliado', 
        'conductor',
        'telef', 
        'r_carga', 
        'tarjeta_p', 
        'r_combustible',
        'tarjeta_re',
        'placa_re',
        'marc',
        'num_ejes',
        'placa',
        'clase',
        'marca',
        'modelo',
        'tipo',
        'color',
        'linea',
        'motor',
        'chasis',
        'capacidad',
        'manifiesto',
        'ciudad',
        'fecha',
        'tecno_m',
        'venci',
        'cer_gases',
        'vto',
        'seg_obli',
        'vence',
        'compa_sec',
        'seg_contra',
        'ven',
        'compa_cont',
        'seg_extra',
        'venc',
        'compa_extra',
        'image_1',
        'image_2',
    ];
}
