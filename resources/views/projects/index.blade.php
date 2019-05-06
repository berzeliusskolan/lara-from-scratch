@extends('layout')

@section('title','Projects')
@section('h1','Projects')
@section('content')
    <h1>List of Projects</h1>
    <div class="list-group">

    @foreach($projects as $item)
        <a class="list-group-item list-group-item-action" href="/projects/{{$item->id}}">{{ $item->title }}</a>
        @endforeach
    </div>
@endsection
