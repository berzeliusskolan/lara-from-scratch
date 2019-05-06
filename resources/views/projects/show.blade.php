@extends('layout')

@section('title','Projects')
@section('h1','Project details')
@section('content')
    <h1>Project Details</h1>

    <p class="display-4">{{$project->title}}</p>
    <p class="small">Title</p>

    <p class="lead">{{$project->description}}</p>
    <p class="small">Description</p>

    <a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Ändra</a>
@endsection
