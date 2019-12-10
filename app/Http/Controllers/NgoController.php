<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NgoController extends Controller
{
    //metodo para retornar para view
    public function viewProfileNgo(Request $request){
        return view('Ngos.profileNgo');
    }
}
