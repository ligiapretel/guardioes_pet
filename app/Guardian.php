<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

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

    // Fazendo a associação das tabelas para cruzar dados de guardians e users.
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function relation_type(){
        return $this->belongsTo('App\Relation_type');
    }

    public function pets(){
        return $this->belongsTo('App\Pet', 'guardian_has_pets', 'guardian_id', 'pet_id', 'relation_type_id');
    }
}