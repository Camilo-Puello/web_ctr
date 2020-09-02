<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User', 'userId');
    }
}
