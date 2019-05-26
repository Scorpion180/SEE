<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivered extends Model
{
    protected $fillable = ['evidence_id','student_id'];
    public function files(){
        return $this->morphMany(File::Class,'file');
    }
    public function evidence(){
        return $this->bolengsTo(Evidence::Class);
    }
    public function student(){
        return $this->bolengsTo(Student::Class);
    }
}
