@extends('layouts.master')

@section('content')
<a href="/todos" class="btn btn-primary">Go back</a>
<div class="jumbotron">
    
    <h1>{{ $todo->text }}</h1>
    <div class="badge badge-danger">{{$todo->due}} </div>
    <hr>
    <h4>{{$todo->body}}</h4>
    <br><br>
    <a href="/todos/{{$todo->id}}/edit" class="btn btn-secondary">Edit</a>

    <form action="/todos/{{$todo->id}}" method="POST" style="display:inline">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-warning" value="Delete">
    </form>


</div>
    
@endsection