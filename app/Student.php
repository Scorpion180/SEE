<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'carrer_id'];
    public function user(){
        return $this->belongsTo(User::Class);
    }
    public function carrer(){
        return $this->belongsTo(Carrer::Class);
    }
    public function groups(){
        return $this->belongsToMany(Group::Class);
    }
}
