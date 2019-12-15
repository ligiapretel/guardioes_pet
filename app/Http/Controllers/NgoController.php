<?php

namespace App\Http\Controllers;

use App\Ngos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NgoController extends Controller
{
    //metodo para retornar para view
    public function viewProfileNgo(Request $request){
        //AQUI PRECISA DE UMA VALIDAÇÃO SE A ONG ESTÁ LOGADA
        return view('Ngos.profileNgo');
    }

    public function registerNgo(){
        return view("Ngos.registerNgo");
    }
    //selecionar dados da ong
    public function getNgo($id = 0){
        //captura todos os registros
        $ngos['ngos'] = Ngos::getNgo($id);

        echo ($ngos); // mostra os dados
    }

    //inicio da função para cadastro da ong via formulário  
    public function doRegisterNgo(Request $request){
    //informado campos requeridos no preenchimento do formulário via controller
        $request->validate([
            'Id' => 'required',
            'social_name' => 'required',
            'cnpj' => 'required',
            'profile_picture' => 'required',
            'site' => 'required',
            'phone_number' => 'required',
            'responsable_name' => 'required',
            'address' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'zip_code' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
            'about_the_ngo' => 'required',
            'bank_name' => 'required',
            'bank_agency' => 'required',
            'bank_account' => 'required',
            'user_id' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);
        //criado variável com a classe ngos criada no model para receber os dados do post
        $ngo = Ngos::create($request->post());
        
        //criando condicional para informar o cadastro
        if ($ngo){
            echo "<script>alert('Cadastro realizado com Sucesso!);</script>";
            return view('Ngos/profileNgo');
        } else {
            echo  "<script>alert('Falha ao realizar o cadastro);</script>";
        }
    }    
    //método para buscar os dados da ong
    public function editNgo($id){
        $ngo = Ngos::where('id', $id)->first(); //recebe o id da ong cadastrada o método first busca todos os registros
        return view('Ngos.editNgo', ["ngo"=>$ngo]);
    }   

    //método para fazer a edição dos dados da ong
    public function doEditNgo(Request $request){
        $ngo = new Ngo($request->post()); // atribuo os novos valores vindo pelo formulário editado 
        //retorno na condicional informando se deu certo
        if($ngo->save()){ //se deu certo ele salva os dados e retorna para perfil da ong
            echo  "<script>alert('Dados editados com sucesso!);</script>";
            return view('Ngos.profileNgo');
        }else{
            echo  "<script>alert('Falha ao editar dados');</script>";
        }
    }

    //método para deletar a ong - APENAS PARA ADMIN??
    public function deleteNgo(Request $request){
        //recebo os dados da ong pego o id e removo pelo metodo delete()
        $data = $request->post();
        $ngo = Ngo::where('id', $data['id'])->get()[0]; //pega o primeiro índice do array  
        $ngo->delete();
        return view('Ngos.profileNgo');
    }


}
