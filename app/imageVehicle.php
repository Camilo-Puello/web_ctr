<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imageVehicle extends Model
{
    //
    protected $table = 'image_vehicles';
    protected $fillable = ['user_id','lateral_izq','frontal','lateral_der'];
}
