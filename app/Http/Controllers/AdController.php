<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function viewAds(Request $request){
        return view('ads');
    }

    public function viewRegisterAds(Request $request){
        return view('registerAds');
    }

    public function create(Request $request){
        $newAd = new Ad();
        $newAd->medicine = $request->medicamento;
        $newAd->hygiene_supply = $request->higiene;
        $newAd->food = $request->alimentos;
        $newAd->toy = $request->brinquedo;
        $newAd->accessories = $request->acessorio;
        $newAd->others = $request->outros;
    }
}
