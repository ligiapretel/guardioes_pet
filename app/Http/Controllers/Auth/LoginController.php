<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    //VICTOR: O AUTHENTICATESUSERS JÁ VALIDA/AUTENTICA E TB RETORNA VIEW (VERIFICAR OS NOMES)
    //NATI FAZER AS FUNÇÕES ACESSO BANCO, VIEW E AUTENTICAÇÕES (COM SENHA CRIPTOGRAFADA)
    
    // public function dbAcess(Request $request){
    //     $login = Users::where('email', $email)->get();
    //     return view('/home');
    // }

    // public function viewLogin(){
    //     return view('/login');
    // }

}
