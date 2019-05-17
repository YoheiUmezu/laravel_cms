<?php

@extends('layouts.php')

@extends('content')


@include()

<h1>Contact Page</h1>
@if (count($people))//@ifを使う
    <ul>

    @foreach($people as $person)

        <li>{{$person}}</li>

    @endforeach

@endif

@stop

?>


