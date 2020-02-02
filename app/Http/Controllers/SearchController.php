<?php

namespace App\Http\Controllers;

use App\Pet;
use App\PetPicture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //function de busca com filtro 
    public function search(Request $request){

        $tipo= $request['type'];
        $porte = $request['animal_bearing'];
        $sexo = $request['sex'];
        $adoacao = $request['adoption_available'];
        $temporario = $request['temporary_home_available'];
        $padrinho = $request['sponsorship_available'];

        $pets = new Pet;
        
        if ($request['type'])
            $pets = $pets->where('type', $tipo);
        if ($request['sex'])
            $pets = $pets->where('sex', $sexo);
        if ($request['animal_bearing'])
            $pets = $pets->where('animal_bearing', $porte);
        if ($request['adoption_available'])
            $pets = $pets->where('adoption_available', $adoacao);
        if ($request['temporary_home_available'])
            $pets = $pets->where('temporary_home_available', $temporario);
        if ($request['sponsorship_available'])
            $pets = $pets->where('sponsorship_available', $padrinho);

        $pets = $pets    
            ->orderBy('animal_bearing')
            ->get();

        return view('search', ['pets'=>$pets]);
    }
}
