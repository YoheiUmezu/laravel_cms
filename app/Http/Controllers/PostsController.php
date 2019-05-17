<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return "It's working the number is" . $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "I am the method that creates stuff";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "This is the show method" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function contact(){

        $people = ['Edwin', 'Jose', 'James', 'Peter', 'Maria'];
        //array

        $people = [];

        return view('contact', compact('people'));
        //return view('page/contact'); もしも他のフォルダに同名のファイルがあれば指定しないといけない
    }

    public function sho_post($id, $name, $password){
        //return view('post')->with('id','$id');//データを渡してる。最初のidはURL post.blade.phpで <h1>Post {{$id}}</h1>で表示される

        return view('post', compact('id','name', 'password'));//show_post()内の引数を複数指定出来る　　
        //Route::get('post/{id}/{name}/{password}', 'PostController@show_post');　　<h1>Post {{$id}} {{$name}} {{$password}}</h1>
        //各/に入れたい値を入力する
    }
}
