<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Guardian;
use App\User;
use App\Users_group;
use App\Status;

class GuardianController extends Controller
{

    // CRIAR UM NEW USER FAZER UM IF PRA VERIFICAR SE DEU CERTO. DANDO CERTO, PASSA PRO 
    // NEW GUARDIAN. GUARDA A INFORMAÇÃO NO RESULT QUE SERÁ USADA NA VIEW, COMO CADASTRO 
    // COM SUCESSO OU NÃO

    // Função para ver  perfil do guardião
    public function viewProfileGuardian(Request $request, $id=0){
        $profile = Guardian::find($id);
        return view('/Guardian.profileGuardian', ['profile'=>$profile]);
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
            //criando status de novo usuário na tabela Status:
            $newStatus = new Status();
            $newStatus->status = $request->statusGuardian;

            $result = $newStatus->save();
            
            //criando o tipo de usuário na tabela Users_group:
            $newUser_group = new Users_group();
            $newUser_group->user_type = $request->user_typeGuardian;

            $result = $newUser_group->save();

            //criando novo usuário na tabela Users:
            $newUser = new User();
            $newUser->email = $request->email;
            $newUser->password = $request->senhaGuardiao;
            $newUser->user_group_id = $newUser_group->id;
            $newUser->status_id = $newStatus->id;

            $result = $newUser->save();


            //criando um novo usuário guardião na tabela Guardians:
            $newGuardian = new Guardian();
            $newGuardian->name = $request->name;
            $newGuardian->nickname = $request->nickname;
            $newGuardian->date_of_birth = $request->date_of_birth;
            $newGuardian->email = $request->email;
            $newGuardian->phone_number = $request->phone_number;
            $newGuardian->profile_picture = $request->profile_picture;
            $newGuardian->address = $request->adress;
            $newGuardian->number = $request->number;
            $newGuardian->complement = $request->complement;
            $newGuardian->zip_code = $request->zip_code;
            $newGuardian->neighborhood = $request->neighborhood;
            $newGuardian->city = $request->city;
            $newGuardian->state = $request->state;
            $newGuardian->about_the_guardian = $request->about_the_guardian;
            $newGuardian->user_id = $newUser->id;

            //$newGuardian->user_id = Auth()->user()->id;

            $result = $newGuardian->save();
            
            return view('Guardian.registerGuardian', ["result"=>$result]);
        }
    }
    

    public function formUpdate(Request $request, $id=0){

        //if($request->isMethod('GET')){
            $guardian = Guardian::find($id);

            if($guardian){
                return view('Guardian.formUpdateGuardian', ["guardian"=>$guardian]);
            } else {
                return view('Guardian.formUpdateGuardian');
            }
        //} else {
            //echo "Não foi possível atualizar";
        //}
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

        return view('guardian.formUpdateGuardian', ["result"=>$result]);

    }


    public function delete(Request $request){
        
        $data = $request->post();
        $guardian = Guardian::where('id', $data['id']->get()[0]);
        $guardian->delete();
        return view('Guardian.profileGuardian');
        // $result = Guardian::destroy($id);

        // if($result){
        //     return redirect('/home');
        // }
    }
}
