<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function viewProfileGuardian(Request $request){
        return view('/Guardian.profileGuardian');
    }
}
