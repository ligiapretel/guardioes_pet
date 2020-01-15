<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_group extends Model
{
    protected $table = 'users_group';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_type',
        'created_at',
        'updated_at'        
    ];
}
