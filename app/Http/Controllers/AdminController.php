<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User; 
use App\Administrator;  
use App\Guardian;  
use App\Ngos;  
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
                $user->password = Hash::make($request->passwordAdmin);
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

    //visualizando a lista de usuários tipo admin 
    public function viewAllAdmin(Request $request){ 

        $listAdmin = User::join('administrators', 'users.id', '=', 'administrators.user_id')->select('users.email', 'users.id', 'users.status_id', 'users.created_at', 'users.updated_at',  'administrators.name')->get();

        return view('Admin.listAdmin', ["listAdmin"=>$listAdmin]); 
    }

    //visualizando a lista de usuários tipo ong
    public function viewAllNgo(Request $request){

        $listNgo = User::join('ngos', 'users.id', '=', 'ngos.user_id')->select('users.id', 'users.email', 'users.status_id', 'users.created_at', 'users.updated_at', 'ngos.social_name', 'ngos.cnpj')->get();

        return view('Admin.listNgo', ["listNgo"=>$listNgo]);
    }

    //visualizando a lista de usuários tipo guardião
    public function viewAllGuardian(Request $request){

        $listGuardian = User::join('guardians', 'users.id', '=', 'guardians.user_id')->select('users.id', 'users.email', 'users.status_id', 'users.created_at', 'users.updated_at', 'guardians.name')->get();

        return view('Admin.listGuardian', ["listGuardian"=>$listGuardian]);
    }

    //editando dados de usuário tipo Ong: 
    public function updateNgo(Request $request, $id=0){
            
        if($request->isMethod('GET')){
            
            //encontrando o id em Users:
            $user = User::find($id);
            
            //encontrando os outros dados em Ngos: 
            $ngo = Ngos::where('user_id', $id)->first();
            
            //enviando os objetos para a view: 
            if($user){
                return view('Admin.updateNgo', ["user"=>$user, "ngo"=>$ngo]);
            } else {
                return view('Admin.updateNgo');
            }
        } else {
            
            //alterando status_id na tabela Users:
            $user = User::find($request->idNgo); 
            $user->status_id = $request->statusNgo;
            
            $result = $user->save();
            
            //alterando outros dados na tabela Ngos: 
            $ngo = Ngos::where('user_id', $user->id)->first();
            $ngo->social_name = $request->social_name;
            $ngo->cnpj = $request->cnpj;
    
            $result = $ngo->save();
    
            return view('Admin.updateNgo', ["result"=>$result]);
        }
    }

    //editando dados de usuário tipo Guardião: 
    public function updateGuardian(Request $request, $id=0){
                
        if($request->isMethod('GET')){
            
            //encontrando o id em Users:
            $user = User::find($id);
            
            //encontrando os outros dados em Guardians: 
            $guardian = Guardian::where('user_id', $id)->first();
            
            //enviando os objetos para a view: 
            if($user){
                return view('Admin.updateGuardian', ["user"=>$user, "guardian"=>$guardian]);
            } else {
                return view('Admin.updateGuardian');
            }
        } else {
            
            //alterando status_id na tabela Users:
            $user = User::find($request->idGuardian); 
            $user->status_id = $request->statusGuardian;
            
            $result = $user->save();
            
            //alterando outros dados na tabela Guardians: 
            $guardian = Guardian::where('user_id', $user->id)->first();
            $guardian->cpf = $request->cpf;

            $result = $guardian->save();

            return view('Admin.updateGuardian', ["result"=>$result]);
        }
    }



}