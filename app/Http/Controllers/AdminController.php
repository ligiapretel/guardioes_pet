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

    //criando usuário admin:
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

            $result = $newAdmin->save();

            //enviando result para a view:
            return view('Admin.registerAdmin', ["result"=>$result]); 
        }
    }


    //view do formulário de update: OKKK
    public function viewUpdateAdmin(Request $request, $id=0){
        
        //encontrando o id em Users:
        $user = User::find($id);
        
        //encontrando o name em Administrators:
        $nameAdmin = Administrator::where('user_id', $id)->value('name');
        
        //encontranto o status em Status: 
        $status = Status::leftJoin('users', 'users.status_id', '=', 'status.id')->select('status.*')->value('status');
        
        //enviando os objetos para a view: 
        if($user){
            return view('Admin.updateAdmin', ["user"=>$user, "nameAdmin"=>$nameAdmin, "status"=>$status]);
        } else {
            return view('Admin.updateAdmin');
        }
        //TENTAR COLOCAR DESSE MODO DEPOIS DE FINALIZADO if($request->isMethod('GET')){ 
}

    //editando usuário admin: OKKK
    public function updateAdmin(Request $request){

        //alterando email e senha na tabela Users:
        $user = User::find($request->idAdmin); 
        $user->email = $request->emailAdmin;
        $user->password = $request->passwordAdmin;
        
        $result = $user->save();
        
        //alterando nome na tabela Administrators: 
        $admin = Administrator::where('user_id', $user->id)->first();
        $admin->name = $request->nameAdmin;

        $result = $admin->save();

        //alterando status na tabela Status: PROBLEMAS!
        $status = Status::where('id', $user->status_id)->first();
        $status->status = $request->statusAdmin;

        $result = $status->save();
        

        return view('Admin.updateAdmin', ["result"=>$result]);
    }

    //deletando usuário: PROBLEMA!!!
    public function deleteAdmin(Request $request, $id=0){
        $result = User::destroy($id);
        if($result){
            return redirect('/admin'); 
        }
    } 

    //visualizando a lista de usuários admin 
    public function viewAllAdmin(Request $request){ 

        $listAdmin = User::leftJoin('administrators', 'administrators.user_id', '=', 'users.id')->select('users.email', 'users.id', 'administrators.name')->get();

        return view('Admin.listAdmin', ["listAdmin"=>$listAdmin]); 
    }






}