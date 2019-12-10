<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterAdsController extends Controller
{
    public function viewRegisterAds(Request $request){
        return view('registerAds');
    }
}
