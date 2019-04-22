<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckProfessor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $professor = User::find($user->id)->professor;
        if($professor != null)
            return $next($request);
        else{
            $message = 'No tienes permiso';
            return view('default.error',compact('message'));
        }
    }
}
