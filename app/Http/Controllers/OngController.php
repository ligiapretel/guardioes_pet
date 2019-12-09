<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OngController extends Controller
{
    //metodo para retornar para view
    public function viewPerfilOng(Request $request){
        return view('Ongs.perfilOng');
    }
}
