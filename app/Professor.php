<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'user_id', 'department_id'];
    public function user(){
        return $this->belongsTo(User::Class);
    }
    public function department(){
        return $this->belongsTo(Department::Class);
    }
}
