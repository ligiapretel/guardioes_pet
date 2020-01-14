<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetPicture extends Model
{
    protected $table = 'pets_pictures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'picture'
    ];
 
    public function pet() {
        return $this->belongsTo('App\Pet');
    }
}
