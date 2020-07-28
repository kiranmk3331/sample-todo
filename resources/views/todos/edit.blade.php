@extends('layouts.master')

@section('content')

<div class="container">
    <h1 class="text-center">Edit</h1>
    <h2>{{$todo->text}}</h2>
    <hr>
    <form class="jumbotron" action="/todos/{{$todo->id}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" name="text" value="{{$todo->text}}" required class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" rows='10' required class="form-control">{{$todo->body}}</textarea>

        </div>
        <div class="form-group">
            <label for="text">Due</label>
            <input type="text" name="due" value="{{$todo->due}}" required class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Update Details</button>
    </form>
    
@endsection