<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    //criando usuário admin. Um único método separado em get e post.
    public function createAdmin(Request $request){

        if($request->isMethod('GET')){
            return view('Admin.registerAdmin');
        } else {

            //criando novo admin
            $newAdmin = new Admin();
            $newAdmin->name = $request->nameAdmin; //CONFERIR A TABELA USERS!!!!!!!!
            $newAdmin->email = $request->emailAdmin;
            $newAdmin->password = $request->passwordAdmin;

            $result = $newAdmin->save();

            //enviando result para a view
            return view('Admin.registerAdmin', ["result"=>$result]); 
        }
    }


    //editando usuário admin. Tentando fazer com um único método. COMO FICA O {ID?}???????
    public function updateAdmin(Request $request, $id=0){

        if($request->isMethod('GET')){
            $admin = Admin::find($id);
            if($admin){
                return view('Admin.updateAdmin', ["admin"=>$admin]);
            } else {
                return view('Admin.updateAdmin');
            }
        } else {
            
            $admin = Admin::find($request->idAdmin); //CONFERIR A TABELA USERS E ADMINISTRATORS!!!!!!!!
            $admin->name = $request->nameAdmin;
            $admin->email = $request->emailAdmin;
            $admin->password = $request->passwordAdmin;

            $result = $admin->save();

            return view('Admin.updateAdmin', ["result"=>$result]);
        }
    }

    //deletando usuário admin
    public function deleteAdmin(Request $request, $id=0){
        $result = Admin::destroy($id);
        if($result){
            return redirect('/listaAdmin'); // rota para visualizar a lista de usuários admin
        }
    } 

    //visualizando a lista de usuários admin
    public function viewAllAdmin(Request $request){
        $listAdmin = Admin::all();
        return view('Admin.listAdmin', ["listAdmin"=>$listAdmin]); // view listAdmin.blade
    }






}
