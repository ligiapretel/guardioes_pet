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
use App\Ad;
use Illuminate\Support\Facades\Hash;
use Auth;

class NgoController extends Controller
{
    const MSG_PERFIL_ATUALIZADO = "Perfil atualizado com sucesso.";
    const MSG_PERFIL_NAO_ATUALIZADO = "Ops! Falha ao atualizar o perfil. =(";
    const MSG_ONG_CADASTRADA = "Conta criada com sucesso. Acesse sua conta para cadastrar pets e dê-lhes a chance de encontrar uma família.";
    const MSG_ONG_NAO_CADASTRADA = "Ops! Falha ao criar a conta. =(";

    //método para visualização da ong
    public function viewProfileNgo($ngoId){
        $ngo = Ngos::find($ngoId);

        //PARA PUXAR APENAS OS PETS DA ONG
        $pets = Pet::join('ngos','ngos.user_id','=','pets.user_id')
                    ->join('pets_pictures','pets_pictures.pet_id','=','pets.id')
                    ->where('pets.user_id','=',$ngo->user_id)
                    ->get();

        $myAds = Ad::where('user_id','=',$ngo->user_id)->get();

        // Pegando todas as ongs, somente com status ativo, para exibir na busca recolhida que aparece na view profileNgo
        $ngos = Ngos::join('users','users.id', '=', 'ngos.user_id')
                    ->where('users.status_id','=',1)
                    ->orderBy('ngos.fantasy_name','asc')
                    ->get();
      
        return view('Ngos.profileNgo', compact(['ngo','pets','myAds','ngos'])); //compact = Cria um array contendo variáveis e seus valores.
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

        $result = $newNgo->save();

        //criando condicional para informar o cadastro
        if ($result){
           return redirect('login')
                ->with('success',self::MSG_ONG_CADASTRADA);
        } else {
            return redirect()
                ->back()
                ->with('errors',self::MSG_ONG_NAO_CADASTRADA);
        }
    }    

    //método para buscar os dados da ong
    public function editNgo(Request $request, $id=0){
        $user = User::find($id);
        $ngo = Ngos::where('user_id','=',$user)->get();

        return view('Ngos.editNgo',["ngo"=>$ngo,"user"=>$user]);
    }   

    //método para fazer a edição dos dados da ong
    public function doEditNgo(Request $request){
        $user = User::find($request->userId);
        $user->email = $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }elseif(empty($request->password)){
            
        }

        $user->save();
        
        $ngo = Ngos::find($request->id);
        $ngo->social_name = $request->social_name;
        $ngo->fantasy_name = $request->fantasy_name;
        $ngo->cnpj = $request->cnpj;
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
        
        if($result){
            // Para passar um parâmetro na rota com redirect, dou um "name" para ela no arquivo de rotas, e uso o route passando o name e o parâmetro.
            return redirect()->route('editarOng',['id' => $user])->with('success',self::MSG_PERFIL_ATUALIZADO);
        }else{
            return redirect()->route('editarOng',['id' => $user])->with('error',self::MSG_PERFIL_NAO_ATUALIZADO);
        }
    }
        
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

    public function accountViewMyPets(Request $request) {
        $user_id = Auth::user()->id;
        $pets = Pet::where('user_id', '=', $user_id)->get();
        return view('Ngos.accountMyPets', ['pets'=>$pets]); 
    }

}

