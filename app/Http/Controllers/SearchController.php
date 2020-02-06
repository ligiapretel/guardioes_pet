<?php

namespace App\Http\Controllers;

use App\Pet;
use App\PetPicture;
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
        $ong = $request->ong;
        // dd($request->all());   
        
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
        if(isset($filter_all)){
            $pets = Pet::where($filter_all)->get();
        }else{
            $pets = Pet::all();
        }
        
        return view('search', ['pets'=>$pets]);

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
