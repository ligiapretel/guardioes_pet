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
        $newAd->user_id = 3;

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

    public function update(Request $request){
        // No find, o request traz tudo que foi enviado pelo usuário, então seleciono a informação pelo nome do atributo - igual ao que está no form    
        $ad = Ad::find($request->idAd);
        $ad->medicine = $request->medicamento;
        $ad->hygiene_supply = $request->higiene;
        $ad->food = $request->alimentos;
        $ad->toys = $request->brinquedos;
        $ad->accessories = $request->acessorios;
        $ad->others = $request->outros;

        // O result é um booleano, então coloco como parâmetro da view para que a view exiba a informação de acordo com o booleano.
        $result = $ad->save();

        return view('Ads.updateAds',["result"=>$result]);
    }

    public function viewMyAds(Request $request){
        return view('Ads.myAds');
    }

    
}
