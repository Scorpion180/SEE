<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return view("pages.informacion");
});

Route::get('/contacto', function () {
    return view("pages.contacto");
});

//apellido? para indicar que puede o no recibirlo
Route::get('/bienvenida/{nombre}/{apellido?}',function($nombre,$apellido = null){
    return view('pages.bienvenida',compact('nombre','apellido'));
    
    //Para mandar valores a la vista
    //->with(['nombre'=>$nombre,'apellido'=>$apellido]);

    //Compact para los mismos nombres de variables que recibiste
    //return view('pages.bienvenida',compact('nombre','apellido'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
