@extends('layout')

@section('title','/projects/edit')
@section('h1','Edit Project')
@section('content')
    <div class="row">
        <h1>Edit Project</h1>
    </div>
    <div class="row">
        <form action="/projects/{{$project->id}}" method="post">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">

            </div>
            <div class="form-group">
                <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                           value="{{$project->descriptions}}">

            </div>
            <input type="submit" class="btn btn-primary" value="Spara ändringar">
        </form>
    </div>
@endsection
