<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //metodo para retornar a view.
    public function viewHome(Request $request){
        return view('home');
    }
}
