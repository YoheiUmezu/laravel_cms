<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function user(){
        return $this->morphTo('App\User');
    }

    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }
    
}
