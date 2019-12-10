<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function viewPets(Request $request) {
        return view('Pets.pets');
    }
}
