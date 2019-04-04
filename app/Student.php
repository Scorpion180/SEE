<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user(){
        return $this->belongsTo(User::Class);
    }
    public function carrer(){
        return $this->belongsTo(Carrer::Class);
    }
}
