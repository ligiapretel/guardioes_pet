<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ad;

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
        $newAd->toys = $request->brinquedos;
        $newAd->accessories = $request->acessorios;
        $newAd->others = $request->outros;
        // Passando um valor de user_id fixo por enquanto
        $newAd->user_id = 1;

        $result = $newAd->save();

        if($result){
            echo "Deu certo";
        }else{
            echo "Lascou, deu ruim";
        }
    }
}
