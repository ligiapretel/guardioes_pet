<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Pet;
use App\PetPicture;
use Auth;


class PetController extends Controller
{ 
    public function viewPets(Request $request) {
        return view('Pets.pets');
    }

    public function viewForm (Request $request) {
        return view ('Pets.registerPet');
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

        //$newPet->id_ngo = Auth::user()->id;

        $result = $newPet->save();


        $newPetPicture = new PetPicture;
        $newPetPicture->picture = $request->picture;
        $newPetPicture->pet_id = $newPet->id;
    
        if($request->hasFile('picture') && $request->file('picture')->isValid()) {

            $name = date('HisYmd');
            $extension = $request->picture->extension();
            $fileName = "{$name}.{$extension}";

            $upload = $request->picture->storeAs('pets_pictures', $fileName);
            $newPetPicture->picture = $fileName;
            $newPetPicture->save();
        }    

        return view('Pets.registerPet', ["result"=>$result]);
        //se houver result, será mostrada uma mensagem de sucesso (está na view)
    }


}
