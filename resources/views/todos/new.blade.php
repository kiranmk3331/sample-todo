@extends('layouts.master')

@section('content')

<h1>Create Todo</h1>

<form action="/todos" method="POST" class="form-group container jumbotron">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" name="text" required class="form-control">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" rows='15' required class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="text">Due</label>
        <input type="text" name="due" required class="form-control">
    </div>
    <button class="btn btn-info" type="submit">Create</button>
@endsection