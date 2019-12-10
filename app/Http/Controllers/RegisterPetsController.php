<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterPetsController extends Controller
{
    public function viewRegisterPets(Request $request){
        return view('/Pets.registerPets');
    }
}
