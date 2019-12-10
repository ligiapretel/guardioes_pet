<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterNgoController extends Controller
{
    public function viewRegisterNgo(Request $request){
        return view('/Ngos.registerNgo');
    }
}
