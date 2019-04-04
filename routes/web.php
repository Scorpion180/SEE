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
Route::get('/user','UserController@index')->name('user.index');

Route::resource('usuario','UsuarioController');
Route::resource('profesor','ProfessorController');
Route::resource('department','DepartmentController');
/*Route::get('/usuario/crear','UsuarioController@create');
Route::get('/usuario/crear','UsuarioController@store');

Route::get('/usuario/{id}','UsuarioController@show');

Route::get('/usuario/editar','UsuarioController@edit');
Route::get('/usuario/editar','UsuarioController@update');

Route::get('/usuario/eliminar','UsuarioController@destroy');*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info','PagesController@info');

Route::get('/prueba','PagesController@prueba');

Route::get('/contacto', 'PagesController@contacto');

//apellido? para indicar que puede o no recibirlo
Route::get('/bienvenida/{nombre}/{apellido?}','PagesController@bienvenido');
//Para mandar valores a la vista
    //->with(['nombre'=>$nombre,'apellido'=>$apellido]);

    //Compact para los mismos nombres de variables que recibiste
    //return view('pages.bienvenida',compact('nombre','apellido'));
Route::get('/equipo','PagesController@equipo');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
