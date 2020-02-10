<?php

namespace App\Http\Controllers;

use App\Ngos;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //metodo para retornar a view.
    public function viewHome(Request $request){
        // Pegando todas as ongs, somente com status ativo, para exibir no formulário de busca
        $ngos = Ngos::join('users','users.id', '=', 'ngos.user_id')
                    ->where('users.status_id','=',1)
                    ->orderBy('ngos.fantasy_name','asc')
                    ->get();

        return view('home',['ngos'=>$ngos]);
    }

    public function viewAbout(Request $request){
        return view('about');
    } 

    public function viewPartners(Request $request){
        return view('partners');
    }

}
