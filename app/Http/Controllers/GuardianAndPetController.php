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


class GuardianAndPetController extends Controller
{
    // public function viewProfileGuardianPet(Request $request, $id=3){
    //     $profile = Guardian::find($id);
    //     $pet = Pet::find($id);
    //     $pet_pictures = DB::table('pets_pictures')
    //         ->where('pet_id', '=', $pet->id)
    //         ->get();
    //     $relation = Relation_type::find($id);

    //     if($profile){
    //         return view('/Guardian.profileGuardian', 
    //         ['profile'=>$profile, 
    //         'pet'=>$pet, 
    //         'pet_pictures'=>$pet_pictures, 
    //         'relation'=>$relation]);
    //     }
    // }


    
}
