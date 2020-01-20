<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ngos extends Model
{
    protected $table = 'ngos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Id',
        'social_name',
        'fantasy_name',
        'cnpj',
        'profile_picture',
        'site',
        'phone_number',
        'responsable_name',
        'address',
        'number',
        'complement',
        'zip_code',
        'neighborhood',
        'city',
        'password',
        'state',
        'about_the_ngo',
        'type_account',
        'bank_name',
        'bank_agency',
        'bank_account',
        'user_id',
        'created_at',
        'updated_at'        
    ];
}
