<?php


use App\Post; //importを忘れずに　App配下のpost.php
use App\Country;
use App\User;
use App\Photo;
use App\Tag;


//Routes::get('/post/{id}', 'PostsController@index');

//Route::resource('posts', 'PostController');

//Route::get('/contact', 'PostController@contact');

//Route::get('post/{id}/{name}/{password}', 'PostController@show_post');

//Route::get('/', function(){
  //  return view('welcome');

/*
|-----------------------------------------------------
|Application Routes
|-----------------------------------------------------
|
*/


// Route::get('/insert',function(){
//     DB::insert('INSERT into posts(title, content) values(?,?)', ['Laravel is awsome !', 'Laravel is the best thing that has happened to PHP !!']);
// });

/*
|-----------------------------------------------------
|ELOQUENT
|-----------------------------------------------------
|
*/

// Route::get('/find', function(){//テーブルからretrieve

//     $posts = Post::all();//postの内容を持ってくる

//     foreach($posts as $posts) {
//         return $post->title; //titleのところを持ってくる
//     }



// });

// Route::get('/find', function(){//テーブルからretrieve

//     $posts = Post::find(1);//postのidの内容を持ってくる

//     return $post->title;

    

// });


// Route::get('/findwhere', function(){//テーブルからretrieve

//     $posts = Post::where('id',2)->orderBy('id', 'desc')->take(1)->get();

//     return  $posts;

// });

// //Route::get('/findmore', function(){
//    // $posts = Post::findOrFail(1);
//    // return $posts;



//     //$posts = Post::where('users_count', '<', 50)->firstOrFail();
// //});

// Route::get('/basicinsert', function(){
//     $post = new Post;

//     $post->title = 'New Eloquent title insert';
//     $post->content = 'Wow eloquent is really cool, look at this content';

//     $post->save;

// });

// Route::get('/basicinsert', function(){
//     $post = new Post;

//     $post->title = 'New Eloquent title insert';
//     $post->content = 'wow eloquent is really cool, look at this content';

//     $post=>save();
// });



// Route::get('/basicinsert', function(){ //update
//      $post = new Post::find(1);

//      $post->title = 'New Eloquent title insert 2';
//      $post->content = 'wow eloquent is really cool, look at this content 2';

//      $post->save();
//  });

// Route::get('/create', function(){
//     Post::create(['title'=>'the create method', 'content'=>'WOW I am learning a lot.']);
// });

// Route::get('/delete',function(){
//     $post = Post::find(2);
//     $post->delete();
// });

// Route::get('/delete2', function(){
//     Post::destroy([4,5]);

    
// });

// Route::get('/softdelete',function(){

//     //Post::create(['title'=>'the create method', 'content'=>'WowI\'am learning a lot with Edwin']);
//     Post::find(1)->deleted;

// });

// Route::get('/readsoftdelete',function(){
// //    $post = Post::find(1);
// //    return $post;

//     //  $post = Post::withTrashed()->WHERE('id', 0)->get();
//     // return $post;
// });

// Route::get('/restore',function(){
//     Post::withTrashed()->where('is_admin',0)->restore;
// });

// Route::get('/forcedelete',function(){
//     Post::withTrashed->where('id_admin', 0)->forceDelete();
// });

/*
|-----------------------------------------------------
|ELOQUENT Relationships
|-----------------------------------------------------
|
*/

//onn to one relationship　１つのidから１つの情報を呼び出す

// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post->title;//postテーブルの各要素にアクセスできる
// });

// Route::get('/useer/{id}/post', function($id){
//     return Post::find($id)->user->name;
// });


//one to many １つのidから複数の情報を呼び出す　foreach使う
// Route::get('/post', function(){
//     $user = User::find(1);

  
//     foreach($user->posts as $post){
//     echo $post->title. "<br>";
//     //returnは使わない（使うと１つしか情報が帰ってこない）
//     }
// });

//many to many relationship

// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id)->roles()->orderBy('id','desc')->get();
//     return $user;

//     // foreach($user->roles as $role){
//     //     return $role->name;
//     // }
// })

//Accessing to the intermediate table/pivot(lookup)

Route::get('user/pivot', function(){
    user::find(1);

    foreach($user->roles as $role){
        return $role->pivot->created_at;
    }

Route::get('user/country',function(){
    $country = Country::find(4);//country_id

    foreach($country->posts as $post){
        return $post->title;//postの内容が帰ってくる
    }

    //Polymorphic Relation
    //例えば写真を投稿した人も、それにコメントした人も写真を投稿できるようにしたいときに使う
    
    Route::get('user/photos', function(){
        $user = User::find(1);

        foreach($user->photos as $photo){
        return $photo->path;

        }

    });

    Route::get('post/{id}/photos', function(){
        $post = Post::find(1);

        foreach($post->photos as $photo){
        //return $photo->path;
        echo $photo->path ."<br>";
        }

    

    });

    //postからphotoを探す
    Route::get('photo/{id}/post', function($id){
        $photo = Photo::findOrFail($id);//デバックに有効　findOrFail
        return $photo->imagiable;
    });


    //Polymograhic Many To Many
    // Route::get('/post/tag', function(){
    //     $post = Post::find(1);

    //     foreach($post->tags as $tag){
    //         echo $tag->name;
    //     }
    // });

    Route::get('/tag/post', function(){
        $Tag::find(2);
        foreach($tag->posts as $post){
            echo $post->title;
        }
    });
    
    
    



});



});











?>










