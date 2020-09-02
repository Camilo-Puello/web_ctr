<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProfile extends Model
{
    //
    protected $table = 'image_profiles';
    protected $fillable = ['user_id','frontal',];
}
