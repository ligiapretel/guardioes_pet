<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    //criando usuário admin
    public function create(Request $request){

        if($request->isMethod('GET')){
            return view('Admin.registerAdmin');
        } else {

            //criando novo admin
            $newAdmin = new Admin();
            $newAdmin->name = $request->nameAdmin; //CONFERIR A TABELA ADMIN
            $newAdmin->email = $request->emailAdmin;
            $newAdmin->password = $request->passwordAdmin;

            $result = $newAdmin->save();

            //enviando result para a view
            return view('Admin.registerAdmin', ["result"=>$result]); 
        }
    }

    
    //editando usuário admin. Tentando fazer com um único método
    public function update(Request $request, $id=0){

        if($request->isMethod('GET')){
            $admin = Admin::find($id);
            if($admin){
                return view('Admin.updateAdmin', ["admin"=>$admin]);
            } else {
                return view('Admin.updateAdmin');
            }
        } else {
            
            $admin = Admin::find($request->idAdmin); 
            $admin->name = $request->nameAdmin;
            $admin->email = $request->emailAdmin;
            $admin->password = $request->passwordAdmin;

            $result = $admin->save();

            return view('Admin.updateAdmin', ["result"=>$result]);
        }
    }





}
