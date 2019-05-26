<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\Hash;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','code','username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    public function getNameUpperAttribute()
    {
        return strtoupper($this->name);
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function professor(){
        return $this->hasOne(Professor::Class);
    }
    public function student(){
        return $this->hasOne(Student::Class);
    }
    public function admin(){
        return $this->hasOne(Admin::Class);
    }
}
