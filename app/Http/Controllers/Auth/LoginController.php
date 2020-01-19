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

        if(Auth::attempt($credentials)){

            return redirect()->intended('home');
 
        }
                   
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




   