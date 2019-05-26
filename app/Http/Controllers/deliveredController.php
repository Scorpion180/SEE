<?php

namespace App\Http\Controllers;

use App\Delivered;
use App\Evidence;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class deliveredController extends Controller
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
    public function create($evidence_id)
    {
        $evidence = Evidence::find($evidence_id);
        $d = $evidence->delivereds;
        //dd($d);
        $s_id = User::find(Auth::user()->id)->id;
        //dd($s_id);
        foreach($d as $i){
            if($i->student_id == $s_id)
                return redirect()->route('indexStudentGroups',Auth::user()->id);
        }
        return view('delivered.form',compact('evidence'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = User::find($request->user_id);
        $delivered = new Delivered(['student_id'=>$student->id,'evidence_id'=>$request->evidence_id]);
        $evidence = Evidence::find($request->evidence_id);
        $evidence->delivereds()->save($delivered);
        $message = "Entregado!";
        return view('pages.home',compact($message));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Delivered  $delivered
     * @return \Illuminate\Http\Response
     */
    public function show(Delivered $delivered)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Delivered  $delivered
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivered $delivered)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Delivered  $delivered
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivered $delivered)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Delivered  $delivered
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivered $delivered)
    {
        //
    }
}
