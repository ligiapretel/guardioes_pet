<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ad;

class AdController extends Controller
{
    
    public function viewAllAds(Request $request){
        $listAds = Ad::all();
        return view('Ads.ads',["listAds"=>$listAds]);
    }

    public function viewRegisterAds(Request $request){
        return view('Ads.registerAds');
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

    public function viewFormUpdate(Request $request, $id=0){
        // Dentro do () do find estou recuperando o que veio pela rota
        $ad = Ad::find($id);
        if($ad){
            // Passar um array associativo como parâmetro da view: primeiro o nome da associação, que pode ser qualquer nome, e depois a variável aonde armazenei o esse parâmetro.
            return view('Ads.updateAds',["ad"=>$ad]);
        }else{
            return view('Ads.updateAds');
        }
    }

    
}
