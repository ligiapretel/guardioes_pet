<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    // public function ngo() { 
    //     return $this->belongsTo('App\Ngos');
    // }

    public function pictures () {
        return $this->hasMany('App\PetPicture');
    }


}
