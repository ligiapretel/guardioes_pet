<?php

namespace App\Http\Controllers\Auth;
//namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    //Para facilitar a leitura do código, declaro 2 constantes que armazenam mensagens de erro como resposta ao usuário. A constante precisa ser em letra maiúscula.
    const MSG_USER_INATIVO = "Sua conta foi desativada. Por favor, entre em contato com os administradores da plataforma.";

    const MSG_FALHA_AUTENTICACAO = "Login ou senha incorretos.";


    //session_start();
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    //vizualização da pagina login
    public function viewLogin(){
        return view('/login');
    }
    
    public function login(Request $request){   

        $credentials = $request->only('email', 'password');
        
        // Verificando se login e senha estão incorretos
        if(!Auth::attempt($credentials)){
            return redirect('/login')->with('error', self::MSG_FALHA_AUTENTICACAO);  //self:: é o mesmo que eu escrever o nome da classe aqui (LoginController::). MSG_FALHA_AUTENTICACAO é uma constante declarada dentro dessa classe.
        }
    
        // Verificando se status do usuário não é ativo
        if(1 != Auth::user()->status_id){
            Auth::logout();
            return redirect('/login')->with('error', self::MSG_USER_INATIVO);
        }

        //Passando pelas validações acima, o usuário é redirecionado para a home    
        return redirect()->intended('home');
    }

    public function logout(Request $request){   

        Auth::logout();
        return redirect()->intended('home');
                   
    }

    //inicio luana 

    // public function login(Request $request){    
        
    //     $login = User::where('email', $request->email)->exists();
        
    //     if($login){
    //         $passwordVerify = User::where('email', $request->email)->first();
           
    //         if(Hash::check($request->password, $passwordVerify->password)){
    //             // $_SESSION [] ABRIR SESSION AQUI
    //             $request->session()->put('email', $request->email);

    //             return view('/home');
    //         } else {
    //             echo "Deu erro";
    //         } 
    //     } else {
    //         echo "Senha ou email incorretos";  
    //     }   
    // }
}    




   