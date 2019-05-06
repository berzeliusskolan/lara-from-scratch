@extends('layout')

@section('title','/projects/edit')
@section('h1','Edit Project')
@section('content')
    <div class="row">
        <h1>Create Project</h1>
    </div>
    <div class="row">
        <form action="/projects" method="post">
            {{ method_field('POST') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" class="form-control" id="title" name="title" >

            </div>
            <div class="form-group">
                <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                           value="">

            </div>
            <input type="submit" class="btn btn-primary" value="Skapa">
        </form>
    </div>
@endsection
