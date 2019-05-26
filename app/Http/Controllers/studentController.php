<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Carrer;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrers = Carrer::all();
        return view('student.form',compact('carrers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|max:55',
        'email'=>'email|unique:users,email',
        'password'=>'required|min:9',
        'username'=>'required',
        'code'=>'required|min:9|max:9']);
        $usr = new User($request->except('carrer_id'));
        $usr->save();
        $student = new Student();
        $student->user_id = $usr->id;
        $student->carrer_id = $request->carrer_id;
        $usr->student()->save($student);
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::find($id)->student;
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $carrers = Carrer::all();
        return view("student.form",compact('student','carrers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate(['name'=>'required|max:55',
        'email'=>'email',
        'password'=>'required|min:9',
        'username'=>'required',
        'code'=>'required|min:9|max:9']);
        $user = User::find($student->user_id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->username = $request->username;
        $user->code = $request->code;
        $user->save();
        $student->carrer_id=$request->carrer_id;
        $student->save();
        return view("student.show",compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Studen::fin($id);
        $student->destroy();
        return redirect()->route('student.index');
    }
}
