<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Ngos;
use App\Guardian;

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

    public function getName(){
        if($this->user_group_id == 2){
            $user = new User();
            $ngo = new Ngos();

            $name = Ngos::leftJoin('users', 'users.id', '=', 'ngos.user_id')->select('ngos.*')->value('social_name');

            return view('Ads.ads',["name"=>$name]);

        }elseif($this->user_group_id == 3){
            return "Entrou no user_group 3";
        }
    }
}
