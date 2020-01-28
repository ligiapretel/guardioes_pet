<?php

namespace App\Http\Controllers;

use App\Ngos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pet;
use App\PetPicture;
use App\User;
use App\Users_group;
use App\Status;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class NgoController extends Controller
{
    //método para visualização da ong
    public function viewProfileNgo($ngoId){
        $ngo = Ngos::find($ngoId);

        //PARA PUXAR APENAS OS PETS DA ONG
        $pets = Pet::where('id_ngo', '=', $ngoId)->get();
          
        $pet_pictures = 0;
        foreach ($pets as $pet) {
            $pet_pictures = PetPicture::
            where('pet_id', '=', $pet->id)
            ->get();  
        }
      
    return view('Ngos.profileNgo', compact(['ngo','pets','pet_pictures'])); //compact = Cria um array contendo variáveis e seus valores.
    }


    public function registerNgo(){
        return view("Ngos.registerNgo"); //chama a view para cadastro
    }
    //selecionar dados da ong
    public function getNgo($id = 0){
        //captura todos os registros
        $ngos['ngos'] = Ngos::getNgo($id);

        echo ($ngos); // mostra os dados
    }

    //inicio da função para cadastro da ong via formulário  
    public function doRegisterNgo(Request $request){    
        
        //O validate vem antes de criar qualquer registro no BD
        //informado campos requeridos no preenchimento do formulário via controller
        $request->validate([   //campos que são requeridos (obrigatórios)         
            'social_name' => 'required',
            'cnpj' => 'required',
            'phone_number' => 'required',
            'responsable_name' => 'required',
            'address' => 'required',
            'number' => 'required',
            'zip_code' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
        ]);

        //criando novo usuário na tabela Users:
        $newUser = new User();
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->user_group_id = 2;
        $newUser->status_id = 1;

        $result = $newUser->save();

        //criano novo usuário para ong
        $newNgo = new Ngos();
        $newNgo->social_name = $request->social_name;
        $newNgo->fantasy_name = $request->fantasy_name;
        $newNgo->cnpj = $request->cnpj;
        $newNgo->profile_picture = $request->profile_picture;
        $newNgo->site = $request->site;
        $newNgo->phone_number = $request->phone_number;
        $newNgo->responsable_name = $request->responsable_name;
        $newNgo->address = $request->address;
        $newNgo->number = $request->number;
        $newNgo->complement = $request->complement;
        $newNgo->zip_code = $request->zip_code;
        $newNgo->neighborhood = $request->neighborhood;
        $newNgo->city = $request->city;
        $newNgo->state = $request->state;
        $newNgo->about_the_ngo = $request->about_the_ngo;
        $newNgo->type_account = $request->type_account;
        $newNgo->bank_name = $request->bank_name;
        $newNgo->bank_agency = $request->bank_agency;
        $newNgo->bank_account = $request->bank_account;
        $newNgo->user_id = $newUser->id;

        //Salvar imagem da ONG - LOGO
        if($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()){
            $name = date('HisYmd');
            $extension = $request->profile_picture->extension();
            $fileName = "{$name}.{$extension}";

            //salvando a foto no storage:
            $upload = $request->profile_picture->storeAs('ngos_pictures', $fileName);
            //salvando a foto no BD:
            $newNgo->profile_picture = $fileName;
        }
        
        //checa se as senhas são iguais, - nao sei se está correto
        $realPass = $_POST['password'];
        $confirmPass = $_POST['re-password'];

        if($realPass != $confirmPass){ //se a senha for diferente da confirmação da senha
            echo "<script>alert('As senhas não estão iguais!')</script>";
        }else{
        $data = $request->post(); //salvo os dados via post
        }

        /* $data['profile_picture'] = $fileDir;  */// armazena o dado enviado pelo form no campo picture dentro de filedir = caminho da imagem
        
        $result = $newNgo->save();

        //criando condicional para informar o cadastro
        if ($result){
           return redirect('login')
                ->with('success', 'Cadastro Realizado com sucesso!!');
        } else {
            return redirect()
                ->back()
                ->with('errors', 'Falha ao cadastrar, contate o suporte.');
        }
    }    

    //método para buscar os dados da ong
    public function editNgo($id){
        $ngo = Ngos::find($id); //recebe o id da ong cadastrada o método first busca todos os registros
        $user = User::find($id)->where('email', '=', $ngo->id)->get();
        $user = User::find($id);

        if($ngo){
            return view('Ngos.editNgo', ["ngo"=>$ngo, "user"=>$user]);
        }else{
            return view('Ngos.editNgo', ["ngo"=>$ngo, "user"=>$user]);
        }
    }   

    //método para fazer a edição dos dados da ong
    public function doEditNgo(Request $request){
        $user = User::find($id);
        
        $ngo = Ngos::find($request->id);
        
        $ngo->social_name = $request->social_name;
        $ngo->fantasy_name = $request->fantasy_name;
        $ngo->cnpj = $request->cnpj;
        $ngo->profile_picture = $request->profile_picture;
        $ngo->site = $request->site;
        $ngo->phone_number = $request->phone_number;
        $ngo->responsable_name = $request->responsable_name;
        $ngo->address = $request->address;
        $ngo->number = $request->number;
        $ngo->complement = $request->complement;
        $ngo->zip_code = $request->zip_code;
        $ngo->neighborhood = $request->neighborhood;
        $ngo->city = $request->city;
        $ngo->state = $request->state;
        $ngo->about_the_ngo = $request->about_the_ngo;
        $ngo->type_account = $request->type_account;
        $ngo->bank_name = $request->bank_name;
        $ngo->bank_agency = $request->bank_agency;
        $ngo->bank_account = $request->bank_account;
        $ngo->user_id = $ngo->id;

        $result = $ngo->save();

        $user = User::find($ngo->user_id);
        $user->email = $request->email;

        $user->save();


        if($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()){
            $name= date('HisYmd');
            $extension = $request->profile_picture->extension();
            $fileName = "{$name}.{$extension}";
        }

        if(!empty($request->profile_picture)) {
            $upload = $request->profile_picture->storageAs('ngo_pictures', $fileName);
            $ngo->profile_picture = $fileName;
        }

        $result = $ngo->save(); 
        
        return redirect('ong/edita/' . $request->id);
    }
        
        /*  $request->validate([]);

        $ngo = new Ngos($request->post()); // atribuo os novos valores vindo pelo formulário editado 
        //retorno na condicional informando se deu certo
        if($ngo->save()){ //se deu certo ele salva os dados e retorna para perfil da ong
            echo  "<script>alert('Dados editados com sucesso!);</script>";
            return view('Ngos.editNgo', ['ngo'=>$ngo]);
        }else{
            echo  "<script>alert('Falha ao editar dados');</script>";
        }
    }
 */
    //método para deletar a ong - APENAS PARA ADMIN??
    public function deleteNgo(Request $request){
        //recebo os dados da ong pego o id e removo pelo metodo delete()         
        $result = $request->post();         
        $ngo = Ngos::where('id', $result['id'])->get()[0]; //pega o primeiro índice do array  
        $user = User::where('id', $ngo->user_id)->get()[0];
        $user->status_id = 2;
        $user->save();
        return view('/home');
    }

    public function accountViewMyPets($ngoId) {
        $ngo = Ngos::find($ngoId);
        $pets = Pet::where('id_ngo', '=', $ngoId)->get();
        return view('Ngos.accountMyPets', compact('ngo'),['pets'=>$pets]); 
    }

}

