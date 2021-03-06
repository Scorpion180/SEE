<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home');
    }
    public function info(){
        return view("pages.informacion");
    }

    public function contacto(){
        return view("pages.contacto");
    }
    public function bienvenido($nombre,$apellido = null){
        return view('pages.bienvenida',compact('nombre','apellido'));
    }
    public function equipo(){
        return view('pages.equipo');
    }
    public function prueba(){
        return view('layouts.black');
    }
    public function home(){
        return view("pages.home");
    }
}
