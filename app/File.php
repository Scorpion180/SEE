<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'file_id','file_type','name','hashed','mime','size'
    ];
    public function file()
    {
        return $this->morphTo();
    }
}
