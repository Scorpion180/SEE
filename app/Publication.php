<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title', 'description','group_id'
    ];
    public function files(){
        return $this->morphMany(File::Class,'file');
    }
}
