<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Guardian;
use App\Pet;
use App\PetPicture;
use App\Relation_type;
use App\Guardian_has_pets;
use App\User;
use App\Ad;
use Auth;

class GuardianController extends Controller
{


    const MSG_PET_ADOTADO = "Pet adotado com sucesso!";
    const MSG_PET_ADOTADO_ERRO = "Ops! Algo deu errado ao adotar o pet. =(";
    const MSG_PET_LAR = "O Pet escolhido ficará no seu lar temporariamente.";
    const MSG_PET_LAR_ERRO = "Ops! Algo deu errado. =(";
    const MSG_PET_APADRINHADO = "Pet apadrinhado com sucesso!";
    const MSG_PET_APADRINHADO_ERRO = "Ops! Algo deu errado ao apadrinhar o pet. =(";


    
    public function viewProfileGuardian(Request $request, $id=3){
        $profile = Guardian::find($id);
        $pets = Guardian_has_pets::join('guardians', 'guardians.id', '=', 'guardian_has_pets.guardian_id')->join('pets', 'guardian_has_pets.pet_id', '=', 'pets.id')->join('pets_pictures', 'pets_pictures.pet_id', '=', 'pets.id')->select('pets.*', 'guardian_has_pets.relation_type_id', 'pets_pictures.picture')->get();
        dd($profile);

        function adopted($pets){
            foreach($pets as $pet){
                if($pet->relation_type_id==1){
                    return true;
                }
            }
            return false;
        };
        $adopted = adopted($pets);


        function home($pets){
            foreach($pets as $pet){
                if($pet->relation_type_id==2){
                    return true;
                }
            }
            return false;
        };
        $home = home($pets);
        
        
        function sponsor($pets){
            foreach($pets as $pet){
                if($pet->relation_type_id==3){
                    return true;
                }
            }
            return false;
        };
        $sponsor = sponsor($pets);

        $myAds = Ad::where('user_id','=',$profile->user_id)->get();

        if($profile){
            return view('Guardian.profileGuardian', 
            ['profile'=>$profile, 
            'pets'=>$pets,
            'adopted'=>$adopted,
            'home'=>$home, 
            'sponsor'=>$sponsor,
            'myAds'=>$myAds
            ]);
        }
    }
    


    public function viewMyAccountGuardian(Request $request, $id=3){
        $profile = Guardian::find($id);

        $pets = Guardian_has_pets::join('guardians', 'guardians.id', '=', 'guardian_has_pets.guardian_id')->join('pets', 'guardian_has_pets.pet_id', '=', 'pets.id')->join('pets_pictures', 'pets_pictures.pet_id', '=', 'pets.id')->select('pets.*', 'guardian_has_pets.relation_type_id', 'pets_pictures.picture')->get();


        function adopted($pets){
            foreach($pets as $pet){
                if($pet->relation_type_id==1){
                    return true;
                }
            }
            return false;
        };
        $adopted = adopted($pets);


        function home($pets){
            foreach($pets as $pet){
                if($pet->relation_type_id==2){
                    return true;
                }
            }
            return false;
        };
        $home = home($pets);
        
        
        function sponsor($pets){
            foreach($pets as $pet){
                if($pet->relation_type_id==3){
                    return true;
                }
            }
            return false;
        };
        $sponsor = sponsor($pets);
        if($profile){
            return view('/Guardian.myAccountGuardian', [
            'profile'=>$profile, 
            'pets'=>$pets,
            'adopted'=>$adopted,
            'home'=>$home, 
            'sponsor'=>$sponsor]);
        }
    }

    

    public function viewRegisterGuardian(Request $request){
        return view('/Guardian.registerGuardian');
    }

    

    public function createGuardian(Request $request){
        if($request->isMethod('GET')){
            return view('/Guardian.registerGuardian');
        } 
        
        $request->validate([   //campos que são requeridos (obrigatórios). O validate eve vir antes de salvar as informações no banco. Assim, o usuário pode saber o que deve ou não ser preenchido.         
            'name' => 'required',
            'nickname' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
            'number' => 'required',
            'zip_code' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
        ]);

            //criando novo usuário na tabela Users:
            $newUser = new User();
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->senhaGuardiao);
            $newUser->user_group_id = $request->user_typeGuardian;  
            $newUser->status_id = $request->statusGuardian;

            $result = $newUser->save();

            //criando um novo usuário guardião na tabela Guardians:
            $newGuardian = new Guardian();
            $newGuardian->name = $request->name;
            $newGuardian->nickname = $request->nickname;
            $newGuardian->date_of_birth = $request->date_of_birth;
            $newGuardian->phone_number = $request->phone_number;
            $newGuardian->address = $request->address;
            $newGuardian->number = $request->number;
            $newGuardian->complement = $request->complement;
            $newGuardian->zip_code = $request->zip_code;
            $newGuardian->neighborhood = $request->neighborhood;
            $newGuardian->city = $request->city;
            $newGuardian->state = $request->state;
            $newGuardian->about_the_guardian = $request->about_the_guardian;
            $newGuardian->user_id = $newUser->id;

            if($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()){
                $name = date('HisYmd');
                $extension = $request->profile_picture->extension();
                $fileName = "{$name}.{$extension}";

                //salvando a foto no storage:
                $upload = $request->profile_picture->storeAs('guardians_pictures', $fileName);
                //salvando a foto no BD:
                $newGuardian->profile_picture = $fileName;
            }
            $result = $newGuardian->save();
       
           //return view('Guardian.registerGuardian', ["result"=>$result]);
           return redirect('/guardiao/cadastrar')->with(['result'=>$result]);
        }
    
    
    

    public function formUpdate($id){
            $guardian = Guardian::find($id);
            
            $user = Auth::user()->email;

            if($guardian){
                return view('Guardian.formUpdateGuardian', [
                    "guardian"=>$guardian, 
                    "user"=>$user]);
            } else {
                return view('Guardian.formUpdateGuardian');
            }
    }



    
    public function storeUpdate(Request $request){
        $guardian = Guardian::find($request->idGuardian);
        $guardian->name = $request->name;
        $guardian->nickname = $request->nickname;
        $guardian->date_of_birth = $request->date_of_birth;
        $guardian->phone_number = $request->phone_number;
        $guardian->address = $request->address;
        $guardian->number = $request->number;
        $guardian->complement = $request->complement;
        $guardian->zip_code = $request->zip_code;
        $guardian->neighborhood = $request->neighborhood;
        $guardian->city = $request->city;
        $guardian->state = $request->state;
        $guardian->about_the_guardian = $request->about_the_guardian;

        $result = $guardian->save();

        
        $user = User::find($guardian->user_id);
        $user->email = $request->email;
        $user->password = $request->password;

        $result = $user->save();

        if($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()){
            $name = date('HisYmd');
            $extension = $request->profile_picture->extension();
            $fileName = "{$name}.{$extension}";

            //salvando a foto no storage:
            $upload = $request->profile_picture->storeAs('guardians_pictures', $fileName);
            //salvando a foto no BD:
            $guardian->profile_picture = $fileName;
        }

        $result = $guardian->save();

        return redirect('/guardiao/cadastrar')->with(['result'=>$result]);

    }

    
    public function delete($id=0){
        $result = User::destroy($id);
        
        if($result){
            return redirect('/home');
        }
    }


    
    public function viewAllGuardians(){
        $guardians = Guardian::all();
        return view('Guardian.allGuardians', ['guardians'=>$guardians]);
    }



    public function listAllGuardians(){
        $listGuardians = User::leftJoin('guardians', 'guardians.user_id', '=', 'users.id')->select('users.email', 'users.id', 'users.status_id', 'users.user_group_id', 'guardians.name')->get();

        return view('Guardian.listGuardian', ["listGuardians"=>$listGuardians]); 
    }




    //FUNÇÕES PARA MARCAR O PET COMO ADOTADO, APADRINHADO OU LAR
    public function createAdoption(Request $request, $id){
        $adoption = new Guardian_has_pets();
        $adoption->guardian_id = $request->guardian_id=1;
        $adoption->pet_id = $id;
        $adoption->relation_type_id = 1;

        $result = $adoption->save();

        if($result){
            return redirect("/pet/perfil/")->with('success', self::MSG_PET_ADOTADO);
        } else {
            return redirect("/pet/perfil/")->with('error', self::MSG_PET_ADOTADO_ERRO);
        }
    }

    public function createHome(Request $request, $id){
        $home = new Guardian_has_pets();
        $home->guardian_id = $request->guardian_id=1;
        $home->pet_id = $id;
        $home->relation_type_id = 2;

        $result = $home->save();

        if($result){
            return redirect("/pet/perfil/")->with('success', self::MSG_PET_LAR);
        } else {
            return redirect("/pet/perfil/")->with('error', self::MSG_PET_LAR_ERRO);
        }
    }

    public function createSponsor(Request $request, $id){
        $sponsor = new Guardian_has_pets();
        $sponsor->guardian_id = $request->guardian_id=1;
        $sponsor->pet_id = $id;
        $sponsor->relation_type_id = 3;

        $result = $sponsor->save();

        if($result){
            return redirect("/pet/perfil/")->with('success', self::MSG_PET_APADRINHADO);
        } else {
            return redirect("/pet/perfil/")->with('error',self::MSG_PET_APADRINHADO_ERRO);
        }
    }
}
