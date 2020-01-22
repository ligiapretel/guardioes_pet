<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation_type extends Model
{
    protected $table = 'relation_type';
    protected $primaryKey = 'id';
    protected $fillable = [
        'relation',
        'created_at',
        'updated_at'        
    ];
}
