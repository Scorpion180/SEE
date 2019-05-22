<?php

namespace App\Http\Controllers;

use App\Group;
use App\Classroom;
use App\Schedule;
use App\Subject;
use App\Day;
use App\User;
use App\Professor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class groupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = Classroom::select('id','module','classroom')->get();
        $schedules = Schedule::select('id','name')->get();
        $subjects = Subject::select('id','name')->get();
        $days = Day::select('id','name')->get();
        $user = Auth::user();
        //$p = $user->Professor;
        $p = Professor::with('user:id')->get();
        dd($p);
        return view('groups.form',compact('classrooms','schedules','subjects','days','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
