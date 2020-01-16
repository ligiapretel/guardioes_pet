<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    // Fazendo a associação das tabelas para cruzar dados de ads e users.
    public function user(){
        return $this->belongsTo('App\User');
    }
}
