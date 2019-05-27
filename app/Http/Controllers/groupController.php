<?php

namespace App\Http\Controllers;

use App\Group;
use App\Classroom;
use App\Schedule;
use App\Subject;
use App\Day;
use App\User;
use App\Professor;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class groupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('professor')->except('indexStudent','index','studentRegister','studentShow');
    }
    public function indexProfessor($id)
    {
        $p_id = User::find($id)->professor->id;
        $groups = Group::with('professor')->where('professor_id',$p_id)->get();
        return view('groups.indexProfessor',compact('groups'));
    }
    public function indexStudent($id)
    {
        $student = User::find($id)->student;
        $groups = $student->groups;
        return view('groups.indexProfessor',compact('groups'));
    }
    public function index()
    {
        $groups = Group::all();
        return view('groups.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentRegister($id){
        $group = Group::find($id);
        
        $usr_id = Auth::user()->id;

        $student = User::find($usr_id)->student;
        $s_groups = $student->groups;
        foreach($s_groups as $g){
            if($g->id == $id){
                $message = 'Ya registrado';
                return view('pages.home',compact('message'));
            }
        }
        //dd($group);
        $group->students()->attach($student->id);
        
        return view('pages.home');
    }
    public function create()
    {
        $classrooms = Classroom::select('id','module','classroom')->get();
        $schedules = Schedule::select('id','name')->get();
        $subjects = Subject::select('id','name')->get();
        $days = Day::select('id','name')->get();
        $user = Auth::user();
        //$p = $user->Professor;
        $professor = User::find($user->id)->professor;
        return view('groups.form',compact('classrooms','schedules','subjects','days','user','professor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['subject_id'=>'required',
        'schedule_id'=>'required',
        'day_id'=>'required',
        'classroom_id'=>'required',
        'professor_id'=>'required']);
        //dd($request->all());
        $group = new Group($request->except('_token'));
        $id = Auth::user()->id;
        $usr = User::find($id);
        $usr->professor->group()->save($group);
        $groups = Group::select('subject_id','schedule_id','day_id','classroom_id','professor_id')->get();
        return view('pages.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }
    public function professorShow($id)
    {
        $a=array();
        $group = Group::find($id);
        return view('groups.menu',compact('group','a'));
    }
    public function studentShow($id)
    {
        $u_id = Auth::user()->id;
        $group = Group::find($id);
        $evidences = $group->evidence;
        $a = array();
        foreach($evidences as $e){
            $d = $e->delivereds;
            foreach($d as $i){
                if($i->student_id == $u_id)
                    array_push($a,$e->id);
            }
        }
        //dd($group->evidence);
        return view('groups.menu',compact('group','a'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $classrooms = Classroom::select('id','module','classroom')->get();
        $schedules = Schedule::select('id','name')->get();
        $subjects = Subject::select('id','name')->get();
        $days = Day::select('id','name')->get();
        $user = Auth::user();
        //$p = $user->Professor;
        $professor = User::find($user->id)->professor;
        return view('groups.form',compact('group','classrooms','schedules','subjects','days','user','professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $request->validate(['subject_id'=>'required',
        'schedule_id'=>'required',
        'day_id'=>'required',
        'classroom_id'=>'required',
        'professor_id'=>'required']);

        $group->subject_id = $request->input('subject_id');
        $group->schedule_id = $request->input('schedule_id');
        $group->day_id = $request->input('day_id');
        $group->classroom_id = $request->input('classroom_id');
        $group->professor_id = $request->input('professor_id');

        $group->save();
        return view('pages.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->back();
    }
}
