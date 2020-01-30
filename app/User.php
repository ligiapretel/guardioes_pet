<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use App\Ngos;
use App\Guardian;
use App\Ad;
use Storage;

class User extends Authenticatable
{
    use Notifiable;

    const ID_NGO = 2;
    const ID_GUARDIAN = 3;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Fazendo a associação das tabelas para cruzar dados de users_group e users.
    public function users_group(){
        return $this->belongsTo('App\Users_group');
    }

    // Fazendo a associação das tabelas para cruzar dados de status e users.
    public function status(){
        return $this->belongsTo('App\Status');
    }

    // Fazendo a associação das tabelas para cruzar dados de ads e users.
    // Como a relação é 1:N, coloco o nome da função no plural
    public function ads(){
        return $this->hasMany(Ad::class);
    }

    // Fazendo a associação das tabelas para cruzar dados de ngos e users.
    // Como a relação é 1:1, coloco o nome da função no singular
    public function ngo()
    {
        return $this->hasOne('App\Ngos');
    }

    // Fazendo a associação das tabelas para cruzar dados de guardians e users.
    public function guardian()
    {
        return $this->hasOne('App\Guardian');
    }

    public function getName(){
        // Verificando se o usuário é ong, ou seja, user_group_id 2, para buscar o nome dele na tabela ngos
        if($this->user_group_id == self::ID_NGO){//self:: é o mesmo que User::, pois estou na classe User

            // Fazendo as declarações de relacionamentos das tabelas, consigo acessar as informações cruzando dados de tabelas conforme abaixo:
            return $this->ngo->fantasy_name;
        
        }elseif($this->user_group_id == self::ID_GUARDIAN){

            return $this->guardian->name;

        }
    }

    public function getPicture(){

        if($this->user_group_id == self::ID_NGO){
            $path = 'ngos_pictures/'.$this->ngo->profile_picture;
        }

        if($this->user_group_id == self::ID_GUARDIAN){
            $path = 'guardians_pictures/'.$this->guardian->profile_picture;
        }

        return Storage::url($path);
    }
}
