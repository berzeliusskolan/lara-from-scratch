@extends('layout')

@section('title','Home')

@section('content')
<h1>Welcome</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id ipsa iure odit provident? Assumenda at
    deserunt distinctio eaque, error id illo nemo nisi quam quasi ratione reiciendis reprehenderit voluptate?</p>
<ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
@endsection
