<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterGuardianController extends Controller
{
    public function viewRegisterGuardian(Request $request){
        return view('/Guardian.registerGuardian');
    }
}
