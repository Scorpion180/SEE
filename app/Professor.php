<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'user_id', 'department_id'];
    public function User(){
        return $this->hasOne('App\User');
    }
}
