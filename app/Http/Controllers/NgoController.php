<?php

namespace App\Http\Controllers;

use App\Ngos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NgoController extends Controller
{
    //metodo para retornar para view
    public function viewProfileNgo($ngoId){
        //AQUI PRECISA DE UMA VALIDAÇÃO SE A ONG ESTÁ LOGADA
        $ngo = Ngos::find($ngoId);
        
        //$ngoAll[''] = Ngos::
        return view('Ngos.profileNgo', compact('ngo')); //compact = Cria um array contendo variáveis e seus valores.
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
        
        $request->validate([   //campos que são requeridos (obrigatórios)         
            'social_name' => 'required',
            'cnpj' => 'required',
            'phone_number' => 'required',
            'responsable_name' => 'required',
            'address' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'zip_code' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'email' => 'required',
            'password' => 'required',
            'state' => 'required',
            //'about_the_ngo' => 'required',
            'type_account'=>'required',
            'bank_name' => 'required',
            'bank_agency' => 'required',
            'bank_account' => 'required', 
        ]);
        
        $profile_pictures = $_FILES['profile_picture']; //capturo o array da imagem
        $fileDir = ''; //criei uma variável para salvar o caminho da imagem
        if(!empty($profile_pictures)){ //se for diferente de vazio 
            $name = explode('.', $profile_pictures['name']);//transforma a string em um array
            $formato = end($name); //pega o último elemento do array
            
            $image = time(). '.' . $formato; //ele armazena na variavel image com a data time do cadastro e a extensão da imagem.
            
            if(move_uploaded_file($profile_pictures['tmp_name'], 'img/' . $image)) { //pego apenas o caminho da imagem(tmp_name)
                $fileDir = 'img/logo-ong/' . $image; //armazeno dentro da variável o caminho da imagem
            } 
        } 

        $realPass = $_POST['password'];
        $confirmPass = $_POST['re-password'];

        if($realPass != $confirmPass){ //se a senha for diferente da confirmação da senha
            echo "<script>alert('As senhas não estão iguais!')</script>";
        }else{
        $data = $request->post(); //salvo os dados via post
        }

        $data['profile_picture'] = $fileDir; // armazena o dado enviado pelo form no campo picture dentro de filedir = caminho da imagem

        //criado variável com a classe ngos criada no model para receber os dados do post
        $ngo = Ngos::create( $data );
        
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
        return view('Ngos.editaOng', ["ngo"=>$ngo]);
    }   

    //método para fazer a edição dos dados da ong
    public function doEditNgo(Request $request){

        $request->validate([]);

        $ngo = new Ngos($request->post()); // atribuo os novos valores vindo pelo formulário editado 
        //retorno na condicional informando se deu certo
        if($ngo->save()){ //se deu certo ele salva os dados e retorna para perfil da ong
            echo  "<script>alert('Dados editados com sucesso!);</script>";
            
            return redirect('/perfilOng/' . $request->post()['id'] );
        }else{
            echo  "<script>alert('Falha ao editar dados');</script>";
        }
    }

    //método para deletar a ong - APENAS PARA ADMIN??
    public function deleteNgo(Request $request){
        //recebo os dados da ong pego o id e removo pelo metodo delete()
        $data = $request->post();
        $ngo = Ngos::where('id', $data['id'])->get()[0]; //pega o primeiro índice do array  
        $ngo->delete();
        return view('Ngos.profileNgo');
    }


}