<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function professor(){
        return $this->belogsTo(Professor::Class);
    }
}
