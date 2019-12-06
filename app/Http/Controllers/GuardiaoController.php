<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuardiaoController extends Controller
{
    public function viewPerfilGuardioes(Request $request){
        return view('/perfilGuardioes.perfilGuardiao');
    }
}
