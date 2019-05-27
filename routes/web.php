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
Route::get('profesor/main', 'ProfessorController@main_page');
Route::get('profesor/groups/{id}', 'groupController@indexProfessor')->name('indexGroups');
Route::resource('profesor','ProfessorController');
Route::resource('department','DepartmentController');
Route::get('student/groups/{id}', 'groupController@indexStudent')->name('indexStudentGroups');
Route::resource('student','studentController');
Route::get('profesor/groups/show/{id}', 'groupController@professorShow')->name('showGroup');
Route::get('student/groups/show/{id}', 'groupController@studentShow')->name('showStudentGroup');
Route::get('student/groups/register/{id}', 'groupController@studentRegister')->name('studentReg');
Route::resource('group','groupController');
Route::get('evidence/create/{group_id}','evidenceController@create')->name('createEvidence');
Route::resource('evidence','evidenceController',['except' => ['create']]);
Route::get('publication/create/{group_id}','publicationController@create')->name('addPublication');
Route::resource('publication','publicationController',['except' => ['create']]);
Route::resource('file','fileController');
Route::get('/info','PagesController@info');
//Route::get('mail','app\Mail\DeliveredEvidence');
Route::get('evidence/submit/{evidence_id}/{user_id}','deliveredController@create')->name('submitEvidence');
Route::resource('delivered','deliveredController',['except' => ['create']]);

Route::get('/contacto', 'PagesController@contacto');

Route::get('/home', 'PagesController@home')->name('home');

Auth::routes();
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
