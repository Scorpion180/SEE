<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\UserModel;
class UserController extends Controller
{
    //
    public function index(){
        $docs = UserModel::all();
        return view('users.usersIndex',compact('docs'));
    }
}