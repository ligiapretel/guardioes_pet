<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function viewAds(Request $request){
        return view('ads');
    }
}
