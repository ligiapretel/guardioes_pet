<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    // public function ngo() { 
    //     return $this->belongsTo('App\Ngos');
    // }
    protected $table = 'pets';

    public function pictures () {
        return $this->hasMany('App\PetPicture');
    }

    public function guardians(){
        return $this->belongsTo('App\Guardian', 'guardian_has_pets', 'pet_id', 'guardian_id', 'relation_type_id');
    }

}
