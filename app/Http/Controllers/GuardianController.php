<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guardian;
use App\User;

class GuardianController extends Controller
{

    // CRIAR UM NEW USER FAZER UM IF PRA VERIFICAR SE DEU CERTO. DANDO CERTO, PASSA PRO 
    // NEW GUARDIAN. GUARDA A INFORMAÇÃO NO RESULT QUE SERÁ USADA NA VIEW, COMO CADASTRO 
    // COM SUCESSO OU NÃO

    public $guardian;
    // Função para ver  perfil do guardião
    public function viewProfileGuardian(Request $request){
        return view('/Guardian.profileGuardian');
    }

    // public function viewProfileGuardian($guardianId){
    //     $guardian = Guardian::find($guardianId);
    //     return view('Guardian.profileGuardian', compact('guardian'));
    // }

    // Função para ver o formulário de cadastro de guardião
    public function viewRegisterGuardian(Request $request){
        return view('/Guardian.registerGuardian');
    }

    public function create(Request $request){

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = $request->password;

        $newUser->user_id = Auth()->user()->id;

        $result = $newUser->save();

        if($result){
            echo "Cadastrou usuário corretamente, agora segue para guardião";
        } else {
            echo "Não cadastrou corretamente.";
        }

        $newGuardian = new Guardian();
        $newGuardian->name = $request->name;
        $newGuardian->nickname = $request->nickname;
        $newGuardian->date_of_birth = $request->date_of_birth;
        $newGuardian->email = $request->email;
        $newGuardian->phone_number = $request->phone_number;
        $newGuardian->profile_picture = $request->profile_picture;
        $newGuardian->address = $request->address;
        $newGuardian->number = $request->number;
        $newGuardian->complement = $request->complement;
        $newGuardian->zip_code = $request->zip_code;
        $newGuardian->neighborhood = $request->neighborhood;
        $newGuardian->city = $request->city;
        $newGuardian->state = $request->state;
        $newGuardian->about_the_guardian = $request->about_the_guardian;

        $newGuardian->user_id = Auth()->user()->id;

        $result = $newGuardian->save();

        return view('guardian.registerGuardian', ["result"=>$result]);
    }
    

    public function formUpdate(Request $request, $id=0){
        $guardian = Guardian::find($id);

        if($guardian){
            return view('guardian.formUpdateGuardian', ["guardian"->$guardian]);
        } else {
            return view('guardian.formUpdateGuardian');
        }
    }


    public function storeUpdate(Request $request){
        $guardian = Guardian::find($request->idGuardian);
        $guardian->name = $request->name;
        $guardian->nickname = $request->nickname;
        $guardian->date_of_birth = $request->date_of_birth;
        $guardian->email = $request->email;
        $guardian->phone_number = $request->phone_number;
        $guardian->profile_picture = $request->profile_picture;
        $guardian->address = $request->address;
        $guardian->number = $request->number;
        $guardian->complement = $request->complement;
        $guardian->zip_code = $request->zip_code;
        $guardian->neighborhood = $request->neighborhood;
        $guardian->city = $request->city;
        $guardian->state = $request->state;
        $guardian->about_the_guardian = $request->about_the_guardian;

        $result = $guardian->save();

        return view('guardian.formUpdateGuardian', ["result"->$result]);

    }


    public function delete(Request $request, $id=0){
        $result = Guardian::destroy($id);

        if($result){
            return redirect('/home');
        }
    }
}
