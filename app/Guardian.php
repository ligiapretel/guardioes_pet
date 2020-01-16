<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model{ 
    protected $table = 'guardians';
    protected $primaryKey = 'id'; 

    // Por questões de segurança não é usado colocar os campos que o usuário não deve 
    // preencher no fillable. Campos como id, timestamps...
    protected $fillable = [
        'name',
        'nickname',
        'date_of_birth',
        'email',
        'phone_number',
        'profile_picture',
        'address',
        'number',
        'complement',
        'zip_code',
        'neighborhood',
        'city',
        'state',
        'about_the_guardian',
    ];
}