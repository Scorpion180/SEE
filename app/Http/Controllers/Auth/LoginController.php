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
            
            if((User::find($user->id)->professor) != null)
                session(['type' => 'p']);
            elseif((User::find($user->id)->student) != null)
                session(['type' => 's']);

            //else
            //return 'no holi';
            return view('pages.home');
        }
        else{
            $msg = "Datos erroneos";
            return view('auth.login',compact('msg'));
        }
    }
    public function logout() {
        return redirect('login')->with(Auth::logout());
      }
}
