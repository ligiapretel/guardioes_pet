<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ad;
use App\User;
use App\Ngos;
use App\Guardian;
use Auth;

class AdController extends Controller
{

    const MSG_ANUNCIO_CADASTRADO = "Anúncio cadastrado com sucesso!";
    const MSG_ANUNCIO_ERRO_CADASTRO = "Ops! Falha ao cadastrar o anúncio. =(";
    const MSG_ANUNCIO_ATUALIZADO = "Anúncio atualizado com sucesso!";
    const MSG_ANUNCIO_ERRO_ATUALIZACAO = "Ops! Falha ao atualizar o anúncio. =(";

    
    public function viewAllAds(Request $request){
        $listAds = Ad::all();
        return view('Ads.ads',["listAds"=>$listAds]);
        // Na view acesso a função que faz o select na tabela users, ngos e guardians para acessar informações dessas outras tabelas. O select está na model User.
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
        $newAd->user_id = Auth::user()->id;

        $result = $newAd->save();

        if($result){
            // Passando um parâmetro via session no redirect (na view verifico a session para exibir a mensagem de sucesso)
            return redirect("/anuncios/meus-anuncios/")->with('success',self::MSG_ANUNCIO_CADASTRADO);
        }else{
            return redirect("/anuncios/meus-anuncios/")->with('error',self::MSG_ANUNCIO_ERRO_CADASTRO);
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

        if($result){
            return redirect("/anuncios/meus-anuncios/")->with('success',self::MSG_ANUNCIO_ATUALIZADO);
        }else{
            return redirect("/anuncios/meus-anuncios/")->with('error',self::MSG_ANUNCIO_ERRO_ATUALIZACAO);
        }
    }

    public function viewMyAds(Request $request){
        $listAds = Ad::all();
        $userId = Auth::user()->id;
        
        $myAds = Ad::where('user_id','=',$userId)->get();
      
        return view('Ads.myAds',["myAds"=>$myAds]);
    }

    public function delete(Request $request, $id=0){
        $result = Ad::destroy($id);
        if($result){
            return redirect('/anuncios/meus-anuncios');
        }
    }

}