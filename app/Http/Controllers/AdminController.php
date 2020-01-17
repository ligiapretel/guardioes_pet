<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User; 
use App\Administrator; 
use App\Status; 
use App\Users_group;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    //criando usuário admin:
    public function createAdmin(Request $request){

        if($request->isMethod('GET')){
            
            return view('Admin.registerAdmin');

        } else {

            //criando novo user na tabela Users:
            $newUser = new User();
            $newUser->email = $request->emailAdmin; 
            $newUser->password = Hash::make($request->passwordAdmin);
            $newUser->user_group_id = $request->user_groupAdmin; // o usuário admin é sempre user_group id = 1
            $newUser->status_id = $request->statusAdmin; // o novo usuário começa com o status ativo (id = 1)

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
        
        //editando usuário admin: 
        public function updateAdmin(Request $request, $id=0){
            
            if($request->isMethod('GET')){
                
                //encontrando o id em Users:
                $user = User::find($id);
                
                //encontrando o name em Administrators:
                $nameAdmin = Administrator::where('user_id', $id)->value('name');
                
                //enviando os objetos para a view: 
                if($user){
                    return view('Admin.updateAdmin', ["user"=>$user, "nameAdmin"=>$nameAdmin]);
                } else {
                    return view('Admin.updateAdmin');
                }
            } else {
                
                //alterando email, senha e status na tabela Users:
                $user = User::find($request->idAdmin); 
                $user->email = $request->emailAdmin;
                $user->password = $request->passwordAdmin;
                $user->status_id = $request->statusAdmin;
                
                $result = $user->save();
                
                //alterando nome na tabela Administrators: 
                $admin = Administrator::where('user_id', $user->id)->first();
                $admin->name = $request->nameAdmin;
        
                $result = $admin->save();
        
                return view('Admin.updateAdmin', ["result"=>$result]);
            }
    }

    //deletando usuário:
    public function deleteAdmin(Request $request, $id=0){
        $result = User::destroy($id);
        if($result){
            return redirect('/admin'); 
        }
    } 

    //visualizando a lista de usuários admin 
    public function viewAllAdmin(Request $request){ 

        $listAdmin = User::leftJoin('administrators', 'administrators.user_id', '=', 'users.id')->select('users.email', 'users.id', 'users.status_id', 'administrators.name')->get();

        return view('Admin.listAdmin', ["listAdmin"=>$listAdmin]); 
    }






}