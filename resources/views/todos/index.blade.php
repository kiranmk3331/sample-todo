@extends('layouts.master')

@section('content')

<h1>Todo</h1>

@if (count($todos) > 0)

    @foreach ($todos as $todo)
    
        <div class=" jumbotron">
        <h3><a href="todos/{{$todo->id}}">{{ $todo->text }} </a></h3>
        <span class="badge badge-danger">{{$todo->due}} </span>
        </div>
        
    @endforeach
    
@endif
    
@endsection