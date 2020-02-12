<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Guardian;
use Auth;

class ChatController extends Controller
{
    public function viewChat(Request $request){
        //Identificando se existe guardião logado, para exibir o menu lateral diferente.
        $userId = Auth::user()->id;
        $profile = User::join('guardians','guardians.user_id','=','users.id')
        ->where('guardians.user_id','=',$userId)
        ->select('guardians.id')
        ->get();

        return view('chat',["profile"=>$profile]);
    }
}
