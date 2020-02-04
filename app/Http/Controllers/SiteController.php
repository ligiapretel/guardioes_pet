<?php

namespace App\Http\Controllers;

use App\Ngos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //metodo para retornar a view.
    public function viewHome(Request $request){
        /* $ngos['ngos'] = Ngos::getNgo($ngos); */
        return view('home');
    }

    public function viewAbout(Request $request){
        return view('about');
    } 

    public function viewPartners(Request $request){
        return view('partners');
    }
}
