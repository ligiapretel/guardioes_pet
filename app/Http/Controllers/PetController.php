<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Pet;
use App\Ngos;
use App\PetPicture;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;




class PetController extends Controller
{
    // public function viewPets(Request $request) {
    //     return view('Pets.pets');
    // }

    public function viewForm (Request $request) {
        $ngo = Ngos::find(Auth::user()->id);   
        return view ('Pets.registerPet', ["ngo"=>$ngo]);
    }

    public function register (Request $request) {
        $newPet = new Pet;
        $newPet->name = $request->name;
        $newPet->type = $request->type;
        $newPet->sex = $request->sex;
        $newPet->animal_bearing = $request->animal_bearing;
        $newPet->coal_type = $request->coal_type;
        $newPet->breed = $request->breed;
        $newPet->age = $request->age;
        $newPet->castration = $request->castration;
        $newPet->vaccinated = $request->vaccinated;
        $newPet->deworming = $request->deworming;
        $newPet->description = $request->description;
        $newPet->docile = $request->docile;
        $newPet->like_affection = $request->like_affection;
        $newPet->like_children = $request->like_children;
        $newPet->live_well_with_animals = $request->live_well_with_animals;
        $newPet->like_to_play = $request->like_to_play;
        $newPet->well_behaved = $request->well_behaved;
        $newPet->adoption_available = $request->adoption_available;
        $newPet->temporary_home_available = $request->temporary_home_available;
        $newPet->sponsorship_available = $request->sponsorship_available;
        $newPet->user_id = Auth::user()->id;
  
        $result = $newPet->save();

        $newPetPicture = new PetPicture;
        $newPetPicture->picture = $request->picture;
        $newPetPicture->pet_id = $newPet->id;
    
        if($request->hasFile('picture') && $request->file('picture')->isValid()) {

            $name = date('HisYmd');
            $extension = $request->picture->extension();
            $fileName = "{$name}.{$extension}";

            $upload = $request->picture->storeAs('public/pets_pictures', $fileName);
            $newPetPicture->picture = $fileName;
            $newPetPicture->save();
        }    

        // $ngoId = Auth::user();

        
        if($result){
            // Passando um parâmetro via session no redirect (na view verifico a session para exibir a mensagem de sucesso)
            return redirect("/pet/cadastro")->with('created',"Pet cadastrado com sucesso!");
        }else{
            return redirect("/pet/cadastro")->with('error',"Ops! Falha ao salvar as informações do pet =(");
        }
    }


    //     return view('Pets.registerPet', ["result"=>$result]);
    //     //se houver result, será mostrada uma mensagem de sucesso (está na view)
    // }

    public function viewFormUpdate (Request $request, $id) {
        $pet = Pet::find($id);
        //$picture = DB::table('pets_pictures')->where('pet_id', $pet->id)->first();
        $ngo = Ngos::find(Auth::user()->id);
        $pictures = PetPicture::find($id);
        //dd($picture); //VER COMO DEIXAR A FOTO QUE JÁ EXISTE NO BANCO

        if($pet) {
             return view('Pets.updatePet', ['pet'=>$pet, 'pictures'=>$pictures, 'ngo'=>$ngo]);
        } else {
            return view('Pets.updatePet');
        }
    }

    public function update (Request $request) {
        $pet = Pet::find($request->idPet);
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->sex = $request->sex;
        $pet->animal_bearing = $request->animal_bearing;
        $pet->coal_type = $request->coal_type;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->castration = $request->castration;
        $pet->vaccinated = $request->vaccinated;
        $pet->deworming = $request->deworming;
        $pet->description = $request->description;
        $pet->docile = $request->docile;
        $pet->like_affection = $request->like_affection;
        $pet->like_children = $request->like_children;
        $pet->live_well_with_animals = $request->live_well_with_animals;
        $pet->like_to_play = $request->like_to_play;
        $pet->well_behaved = $request->well_behaved;
        $pet->adoption_available = $request->adoption_available;
        $pet->temporary_home_available = $request->temporary_home_available;
        $pet->sponsorship_available = $request->sponsorship_available;

        //$pet->id_ngo = Auth::user()->id;

        $result = $pet->save();
    
        if($request->hasFile('picture') && $request->file('picture')->isValid()) {

            $newPetPicture = new PetPicture;
            $newPetPicture->picture = $request->picture;
            $newPetPicture->pet_id = $pet->id; //TEM QUE ARRUMAR AQUI NA HORA DE ATUALIZAR

            $name = date('HisYmd');
            $extension = $request->picture->extension();
            $fileName = "{$name}.{$extension}";

            $upload = $request->picture->storeAs('public/pets_pictures', $fileName);
            $newPetPicture->picture = $fileName;
            $newPetPicture->save();
        } 

        // return view('Pets.updatePet', ["result"=>$result, 'picture'=>$picture]);
        // //se houver result, será mostrada uma mensagem de sucesso (está na view)

        if($result){
            // Passando um parâmetro via session no redirect (na view verifico a session para exibir a mensagem de sucesso)
            return redirect("/ong/minhaconta/pets")->with('updated',"Informações do pet atualizadas com sucesso!");
        }else{
            return redirect("/ong/minhaconta/pets")->with('error',"Ops! Falha ao atualizar as informações do pet =(");
        }

    }

    public function delete (Request $request, $id=0) {
        $result = Pet::destroy($id);
        if($result) {
            return redirect('/ong/minhaconta/pets');
            //mesma coisa que o header Location
        }
    }

    public function viewPetProfile(Request $request, $id=1) {
        $pet = Pet::find($id);
        $ngo = Ngos::leftJoin('pets', 'pets.user_id', '=', 'ngos.user_id')->get()[0];

        $pet_pictures = DB::table('pets_pictures')
            ->where('pet_id', '=', $pet->id)
            ->get();

        if($pet) {
           return view('Pets.petProfile', ['pet'=>$pet, 'pet_pictures'=>$pet_pictures, 'ngo'=>$ngo]);
        }
    }
 
    public function viewAllPets() {
        $pets = Pet::all();
        return view ('Pets.allPets', ['pets'=>$pets]);
    }
}

