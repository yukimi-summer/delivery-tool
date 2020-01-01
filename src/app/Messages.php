<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public function balloons()
    {
        return $this->hasMany('App\Balloons');
    }
}
