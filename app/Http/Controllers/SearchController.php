<?php

namespace App\Http\Controllers;

use App\Pet;
use App\PetPicture;
use App\Ngos;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //function de busca com filtro 
    public function search(Request $request){
        $type= $request->animal;
        $howToHelp = $request->como_quero_ajudar;
        $animal_bearing = $request->porte;
        $sex = $request->sexo;
        $ngo = $request->ong;
        // dd($ong);   
        
        // criando array para armazenar as condições que serão passadas no query builder
        $filter_all = [];

        // verifica se veio tipo do pet
        if($type){
            $filter_all[] = ['type', $type];
        }
        // verifica se veio porte do pet
        if($animal_bearing){
            $filter_all[] = ['animal_bearing', $animal_bearing];
        }
        // verifica se veio sexo do pet
        if($sex){
            $filter_all[] = ['sex', $sex];
        }
        // verifica se veio ong
        if($ngo){
            $filter_all[] = ['fantasy_name', $ngo];
        }
        // verifica se veio adoção como opção, e compara com 1 (valor atribuído no banco para indicar que o pet está disponível)
        if($howToHelp && $howToHelp == "adocao"){
            $filter_all[] = ['adoption_available', 1];
        }
        // verifica se veio apadrinhamento como opção, e compara com 1 (valor atribuído no banco para indicar que o pet está disponível)
        if($howToHelp && $howToHelp == "apadrinhamento"){
            $filter_all[] = ['sponsorship_available', 1];
        }
        // verifica se veio lar temporário como opção, e compara com 1 (valor atribuído no banco para indicar que o pet está disponível)
        if($howToHelp && $howToHelp == "lar_temporario"){
            $filter_all[] = ['temporary_home_available', 1];
        }

        // verifica se há valores para utilizarmos no 'where'
        if($ngo){
            $pets = Pet::join('users','users.id','=','pets.user_id')
                        ->join('ngos','ngos.user_id','=','users.id')
                        ->join('pets_pictures','pets_pictures.pet_id','=','pets.id')
                        ->where($filter_all)
                        ->select('pets.name','pets.description','pets.id','pets_pictures.picture')
                        ->get();
        }else{
            // $pets = Pet::where($filter_all)->get();
            $pets = Pet::join('pets_pictures','pets_pictures.pet_id','=','pets.id')
                        ->where($filter_all)
                        ->select('pets.name','pets.description','pets.id','pets_pictures.picture')
                        ->get();
        }

        // Pegando todas as ongs, somente com status ativo, para exibir na busca recolhida que aparece na view search
        $ngos = Ngos::join('users','users.id', '=', 'ngos.user_id')
                    ->where('users.status_id','=',1)
                    ->orderBy('ngos.fantasy_name','asc')
                    ->get();
        // dd($pets);
        
        return view('search', ['pets'=>$pets], ['ngos'=>$ngos]);

            // // Outra forma de fazer a query
            // $pets = Pet::query();

            // if($type){
            //     $pets->where('type',$type);
            // }

            // if($animal_bearing){
            //     $pets->where('animal_bearing', $animal_bearing);
            // }

            // if($sex){
            //     $pets->where('sex',$sex);
            // }
            // $pets = $pets->get();
    }
}
