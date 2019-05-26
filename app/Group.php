<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Group extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'subject_id','schedule_id','day_id','classroom_id','professor_id'
    ];
    public function professor(){
        return $this->belongsTo(Professor::Class);
    }
    public function subject(){
        return $this->belongsTo(Subject::Class);
    }
    public function schedule(){
        return $this->belongsTo(Schedule::Class);
    }
    public function day(){
        return $this->belongsTo(Day::Class);
    }
    public function classroom(){
        return $this->belongsTo(Classroom::Class);
    }
    public function evidence(){
        return $this->hasMany(Evidence::Class);
    }
    public function publication(){
        return $this->hasMany(Publication::Class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::Class);
    }
}
