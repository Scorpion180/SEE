<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
        $docs = DB::table('users')->where('name','Efren')->get();
        return view('users.usersIndex',compact('docs'));
    }
}