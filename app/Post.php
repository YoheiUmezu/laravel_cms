<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Post extends Model
{
    
    use SoftDelete;

    //protected $table ='posts';//テーブルにアクセス
    //protected $primarykey = 'post_id';

    protected $fillable = [//コンマとか必要な時に変える
        'title',
        'content'];

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
        }

    public function tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }


}





