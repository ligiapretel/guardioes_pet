<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Guardian;
use App\Pet;
use App\PetPicture;
use App\Relation_type;
use App\Guardian_has_pets;


class GuardianAndPetController extends Controller
{
    public function viewProfileGuardianPet(Request $request, $id=3){
        $profile = Guardian::find($id);
        
        $pet = Pet::find($id);
        $pet_pictures = DB::table('pets_pictures')
            ->where('pet_id', '=', $pet->id)
            ->get();
        
        $profileGuardian = new Guardian();
        $profileGuardian->id = $id;        //trás o id logado que está na tabela guardians
        //dd($profileGuardian);

        $guardianId = new Guardian_has_pets();
        //$guardianId->guardian_id = $id;  //está trazendo id que está logado não o id da tabela Guardian_has_pets.
        //$guardianId->guardian_id = $guardianId->guardian_id;    //aqui está retornando id null
        $guardianId->guardian_id = $guardianId->id;
        dd($guardianId);


        $relationAdopted = Relation_type::find($id=1);
        $adopted = new Guardian_has_pets();
        $adopted->pet_id = $id;     //aqui está trazendo pet_id=1
        $petAdopted = Pet::find($id);
        $petAdopted->id = $petAdopted->id;     //aqui pegou o perfil do pet id 1: pipo
        
        $relationHome = Relation_type::find($id=2);
        $home = new Guardian_has_pets();
        $home->pet_id = $id;        //aqui está trazendo pet_id=2
        $petHome = Pet::find($id);
        $petHome->id = $petHome->id;       //aqui pegou o perfil do pet id 2: maria 
      
        $relationSponsored = Relation_type::find($id=3);
        $sponsor = new Guardian_has_pets();
        $sponsor->pet_id = $id;     //aqui está trazendo pet_id=3
        // $sponsor->guardian_id = $id;
        // //dd($sponsor);
        $petSponsored = Pet::find($id);
        $petSponsored->id = $petSponsored->id;   //aqui pegou o perfil do pet id 3: tuti
        


        if($profile){
            return view('Guardian.profileGuardian', 
            ['profile'=>$profile, 
            'pet'=>$pet, 
            'pet_pictures'=>$pet_pictures,
            'profileGuardian'=>$profileGuardian,
            'guardianId'=>$guardianId,
            'relationAdopted'=>$relationAdopted,
            'adopted'=>$adopted,
            'petAdopted'=>$petAdopted,
            'relationHome'=>$relationHome,
            'home'=>$home,
            'petHome'=>$petHome,
            'relationSponsored'=>$relationSponsored,
            'sponsor'=>$sponsor,
            'petSponsored'=>$petSponsored
            ]);
        }
    }
    

    public function createAdoption(Request $request, $id){
        $adoption = new Guardian_has_pets();
        $adoption->guardian_id = $request->guardian_id=1;
        $adoption->pet_id = $id;
        $adoption->relation_type_id = 1;

        $result = $adoption->save();

        if($result){
            echo "Foi adotado!";
        } else {
            echo "Não deu certo - Adoção";
        }
    }

    public function createHome(Request $request, $id){
        $home = new Guardian_has_pets();
        $home->guardian_id = $request->guardian_id=1;
        $home->pet_id = $id;
        $home->relation_type_id = 2;

        $result = $home->save();

        if($result){
            echo "Está em Lar Temporário";
        } else {
            echo "Não deu certo - Lar";
        }
    }

    public function createSponsor(Request $request, $id){
        $sponsor = new Guardian_has_pets();
        $sponsor->guardian_id = $request->guardian_id=1;
        $sponsor->pet_id = $id;
        $sponsor->relation_type_id = 3;

        $result = $sponsor->save();

        if($result){
            echo "Está apadrinhado";
        } else {
            echo "Não deu certo - Apadrinhar";
        }
    }
    
}
