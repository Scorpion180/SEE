<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email','codigo','password'];
    //public function profesores(){
      //  return $this->hasMany('profesores');
    //}
}
