<?php

namespace App\Http\Controllers;

use App\Professor;
use App\User;
use App\Department;
use App\Admin;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('professor')->except('index','create');
    }
    public function index()
    {
        $professors = Professor::all();
        return view('professor.index',compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if(($admin = User::find($user->id)->admin) != null){
            $departments = Department::all();
            return view('professor.form',compact('departments'));
        }
        else{
            $message = 'No tienes permiso';
            return view('default.error',compact('message'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate(['name'=>'required|max:55',
        'email'=>'email|unique:users,email',
        'password'=>'required|min:9',
        'username'=>'required',
        'code'=>'required|min:9|max:9']);
        $usr = new User($request->except('department_id'));
        $usr->save();
        $professor = new Professor();
        $professor->user_id=$usr->id;
        $professor->department_id=$request->department_id;
        
        $professor->save();
        $professors = Professor::all();
        return view('profesor.index',compact('professors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::find($id);
        return view('professor.show',compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $professor = User::find($user->id)->professor;
        if($professor->user_id == $id){
            $professor = Professor::find($id);
            $departments = Department::all();
            return view("professor.form",compact('departments','professor'));
        }
        else{
            $message = 'No tienes permiso';
            return view('default.error',compact('message'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $professor = Professor::find($id);
        $request->validate(['name'=>'required|max:55',
        'email'=>'email',
        'password'=>'required|min:9',
        'username'=>'required',
        'code'=>'required|min:9|max:9']);
        $user = User::find($professor->user_id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->username = $request->username;
        $user->code = $request->code;
        $user->save();
        $professor->department_id=$request->department_id;
        $professor->save();
        return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        if(($admin = User::find($user->id)->admin) != null){
            $professor = Professor::find($id);
            $professor->delete();
            return redirect()->route('professor.index');
        }
        else{
            $message = 'No tienes permiso';
            return view('default.error',compact('message'));
        }
    }
}
