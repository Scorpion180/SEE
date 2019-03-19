<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docs = UserModel::all();
        return view('users.usuarioIndex',compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.usuarioForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usr = new UserModel();
        $usr->name = $request->name;
        $usr->email = $request->email;
        $usr->codigo = $request->codigo;
        $usr->password = $request->password;
        $usr->save();

        return view('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = UserModel::find($id);
        return view('users.usuarioShow',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserModel::find($id);
        return view("users.usuarioForm",compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserModel $userModel)
    {
        $userModel->name = $request->input('name');
        $userModel->email = $request->input('email');
        $userModel->codigo = $request->input('codigo');
        $userModel->password = $request->input('password');

        $userModel->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect()->route('usuario.index');
    }
}
