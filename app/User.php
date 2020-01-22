<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use App\Ngos;
use App\Guardian;
use App\Ad;

class User extends Authenticatable
{
    use Notifiable;

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
        if($this->user_group_id == 2){

            // return $this->ngo->social_name;

            $ngoName = DB::table('users')
            ->join('ngos', 'users.id', '=', 'ngos.user_id')
            ->select('users.*', 'ngos.*')
            ->get();

            $ngoName = $ngoName[0]->social_name;

            // dd($ngoName);

            return $ngoName;
        
        }elseif($this->user_group_id == 3){
            $guardianName = DB::table('users')
            ->join('guardians', 'users.id', '=', 'guardians.user_id')
            ->select('users.*', 'guardians.*')
            ->get();

            $guardianName = $guardianName[0]->name;

            return $guardianName;
        }
    }
}
