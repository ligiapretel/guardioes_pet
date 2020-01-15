<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User; 
use App\Administrator; 
use App\Status; 
use App\Users_group; 

class AdminController extends Controller
{

    //criando usuário admin em um único método separado em get e post:
    public function createAdmin(Request $request){

        if($request->isMethod('GET')){
            
            return view('Admin.registerAdmin');

        } else {

            //criando status de novo usuário na tabela Status:
            $newStatus = new Status();
            $newStatus->status = $request->statusAdmin;

            $result = $newStatus->save();

            //criando user_type de novo usuário da tabela Users_group:
            $newUser_group = new Users_group();
            $newUser_group->user_type = $request->user_typeAdmin;

            $result = $newUser_group->save();

            //criando novo user na tabela Users:
            $newUser = new User();
            $newUser->email = $request->emailAdmin; 
            $newUser->password = $request->passwordAdmin;
            $newUser->user_group_id = $newUser_group->id;
            $newUser->status_id = $newStatus->id;

            $result = $newUser->save();

            //criando novo usuário admin na tabela Administrators:
            $newAdmin = new Administrator();
            $newAdmin->name = $request->nameAdmin; 
            $newAdmin->user_id = $newUser->id;;
            //dúvida se o id de Users vai automaticamente para user_id de Administrators

            $result = $newAdmin->save();

            //enviando result para a view:
            return view('Admin.registerAdmin', ["result"=>$result]); 
        }
    }


    //A PARTIR DAQUI NÃO ESTÁ FINALIZADO AINDA. 14/1

    //editando usuário admin. Tentando fazer com um único método. COMO FICA O {ID?}???????
    public function updateAdmin(Request $request, $id=0){

        if($request->isMethod('GET')){
            //encontrando o id na tabela Users:
            $user = User::find($id); 

            if($user){
                return view('Admin.updateAdmin', ["user"=>$user]);
            } else {
                return view('Admin.updateAdmin');
            }
        } else {

            //buscando email e senha do formulário de atualização:
            $user = User::find($request->idAdmin);
            $user->email = $request->emailAdmin;
            $user->password = $request->passwordAdmin;

            $result = $user->save();

            if($result){ //PRECISA DISSO???
                
                //buscando nome do formulário de atualização:
                $admin = Administrator::find($request->idAdmin); 
                $admin->name = $request->nameAdmin;
    
                $result = $admin->save();

            }
            

            return view('Admin.updateAdmin', ["result"=>$result]);
        }
    }

    //deletando usuário admin: Dúvida->tabela Users ou Administrators?
    public function deleteAdmin(Request $request, $id=0){
        $result = User::destroy($id);
        if($result){
            return redirect('/admin'); 
        }
    } 

    //visualizando a lista de usuários admin
    public function viewAllAdmin(Request $request){
        $listAdmin = Administrators::all();
        return view('Admin.listAdmin', ["listAdmin"=>$listAdmin]); 
    }






}
