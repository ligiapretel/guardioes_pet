<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Guardian;
use App\User;
use App\Users_group;
use App\Status;

class GuardianController extends Controller
{
    // Função para ver  perfil do guardião
    public function viewProfileGuardian(Request $request, $id=3){
        $profile = Guardian::find($id);
        if($profile){
            return view('/Guardian.profileGuardian', ['profile'=>$profile]);
        }
    }

    // Função para ver  perfil do guardião
    public function viewMyAccountGuardian(Request $request, $id=3){
        $profile = Guardian::find($id);
        if($profile){
            return view('/Guardian.myAccountGuardian', ['profile'=>$profile]);
        }
    }

    // Função para ver o formulário de cadastro de guardião
    //Essa função está funcionando!!
    public function viewRegisterGuardian(Request $request){
        return view('/Guardian.registerGuardian');
    }

    //Essa função está funcionando!!
    public function createGuardian(Request $request){

        if($request->isMethod('GET')){
            return view('/Guardian.registerGuardian');
        } else {

            //criando novo usuário na tabela Users:
            $newUser = new User();
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->senhaGuardiao);
            $newUser->user_group_id = 3;
            $newUser->status_id = 1;

            $result = $newUser->save();


            //criando um novo usuário guardião na tabela Guardians:
            $newGuardian = new Guardian();
            $newGuardian->name = $request->name;
            $newGuardian->nickname = $request->nickname;
            $newGuardian->date_of_birth = $request->date_of_birth;
            //$newGuardian->email = $request->email;
            $newGuardian->phone_number = $request->phone_number;
            //$newGuardian->profile_picture = $request->profile_picture;
            $newGuardian->address = $request->address;
            $newGuardian->number = $request->number;
            $newGuardian->complement = $request->complement;
            $newGuardian->zip_code = $request->zip_code;
            $newGuardian->neighborhood = $request->neighborhood;
            $newGuardian->city = $request->city;
            $newGuardian->state = $request->state;
            $newGuardian->about_the_guardian = $request->about_the_guardian;
            $newGuardian->user_id = $newUser->id;


            $request->validate([   //campos que são requeridos (obrigatórios)         
                'name' => 'required',
                'nickname' => 'required',
                'date_of_birth' => 'required',
                'phone_number' => 'required',
                'address' => 'required',
                'number' => 'required',
                'complement' => 'required',
                'zip_code' => 'required',
                'neighborhood' => 'required',
                'city' => 'required',
                'state' => 'required',
            ]);

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
        
            return view('Guardian.registerGuardian', ["result"=>$result]);
        }
    }
    
    //Essa função está funcionando!!
    public function formUpdate(Request $request, $id=0){

            $guardian = Guardian::find($id);

            if($guardian){
                return view('Guardian.formUpdateGuardian', ["guardian"=>$guardian]);
            } else {
                return view('Guardian.formUpdateGuardian');
            }
    }

    //não precisa o campo email aqui:
    //Essa função está funcionando!!
    public function storeUpdate(Request $request){
        $guardian = Guardian::find($request->idGuardian);
        $guardian->name = $request->name;
        $guardian->nickname = $request->nickname;
        $guardian->date_of_birth = $request->date_of_birth;
        //$guardian->email = $request->email;
        $guardian->phone_number = $request->phone_number;
        //$guardian->profile_picture = $request->profile_picture;
        $guardian->address = $request->address;
        $guardian->number = $request->number;
        $guardian->complement = $request->complement;
        $guardian->zip_code = $request->zip_code;
        $guardian->neighborhood = $request->neighborhood;
        $guardian->city = $request->city;
        $guardian->state = $request->state;
        $guardian->about_the_guardian = $request->about_the_guardian;

        $result = $guardian->save();

        //selcionando o usuário. Depois que criptografar a senha descomentar..
        //NÃO ESTÁ PUXANDO O EMAIL CADASTRADO. Mas está atualizando com o novo email informado.
        $user = User::find($guardian->user_id);
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

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

        return view('guardian.formUpdateGuardian', ["result"=>$result]);

    }

    //essa função está deletando um usuário da tabela guardians. Apenas.
    public function delete(Request $request, $id=0){
    
        $result = Guardian::destroy($id);
        //Aqui eu preciso trocar pra User:: ou inserir a função destroy com Guardian e User?
        if($result){
            return redirect('/home');
        }
    }



    public function viewAllGuardians(){
        $guardians = Guardian::all();
        return view('Guardian.allGuardians', ['guardians'=>$guardians]);
    }
}
