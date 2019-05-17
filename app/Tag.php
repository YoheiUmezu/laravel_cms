<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function posts(){
        return $this->morephByMany('App\Post', 'taggable');
    }

    public function videos(){
        return $this->morephByMany('App\Video', 'taggable');
    }
}
