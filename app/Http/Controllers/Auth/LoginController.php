<?php

namespace App\Http\Controllers\Auth;
//namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;

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
        $login = User::where('email', $request->email)->where('password', $request->password)->exists(); //value('email');
        // dd($login);
        // exit;
        //$password = password_verify($request->password, $login->password);
        //senha deu certo manda x, deu errado login
        //Auth::login($login, true);
        if($login){
            //$username = User::where('email', $request->email);
            $this->authenticate($request);
        return view('/home');

        } else {
            echo "Senha ou email incorretos";
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        dd(Auth::attempt($credentials));
        exit;
        if (Auth::attempt($credentials)) {
            
            return redirect()->intended('dashboard');
        }
    }

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
