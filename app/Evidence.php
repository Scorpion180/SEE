<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $table = 'evidences';
    protected $fillable = [
        'group_id','name','due_date','description'
    ];
    public function files(){
        return $this->morphMany(File::Class,'file');
    }
    public function delivereds(){
        return $this->hasMany(Delivered::class);
    }
}
