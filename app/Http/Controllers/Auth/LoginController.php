<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
    public function login()
    {
        $credentials = $this->validate(request(),[
            'email'=>'email|required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            
            //if(($professor = User::find($user->id)->professor) != null)
            //return 'bienvenido';

            //else
            //return 'no holi';
            return view('home');
        }
        else{
            return 'No eres tú';
        }
    }
}
