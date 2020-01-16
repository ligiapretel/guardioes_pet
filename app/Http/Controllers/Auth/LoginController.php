<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
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

    //inicio luana 
    //vizualização da pagina login
    public function viewLogin(){
        return view('/login');
    }
    
    public function login(Request $request){
        $login = User::where('email', $request->email)->get(); //value('email');
        // dd($login);
        // exit;
        //$password = password_verify($request->password, $login->password);
        //senha deu certo manda x, deu errado login
        //Auth::login($login, true);
        if($login){
        return view('/home', ["login"=>$login]);
        } else {
            echo "Não deu";
        }
        // if($login){
        //     return $login;
        // }
    }

    // public function authLogin(){
    //     $login = $this->login($request);
    //     Auth::login($login, true);
    //     return view('/home');
    // }

    // public function username(){
    //     return 'email';
    // }


    // private function loginUser(){
    //     //session_start();
    //     $email = $_POST['email'];
    //     //acessa tabela usuario
    //     $user = new Login();
    //     $resultado = $user->loginUser($email);

    //     // $senha = password_verify($_POST['senha'], $resultado[0]['senha']);
      
    //     // if($senha){
    //     //     $_SESSION['fake']['user'] = $resultado;
    //     //     header('Location:/fake-instagram-POO/posts');

    //     // } else {
    //     //     $_SESSION['loginError'] = "NÃO LOGADO";
    //     //     header('Location:login');
    //     // }

    // public function 

}
