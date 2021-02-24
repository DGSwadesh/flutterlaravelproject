@extends('todos.layout')
@section('content')

<div class="text-center pt-10">
    <h1 class="text-2x1 border-b pb-4">Update this todo list</h1>
    <h2>{{$todo->title}}</h2>
<x-alert />
    <form method="post" action="{{route('todo.update',$todo->id)}}" class="py-5 border">
    @csrf
    @method('patch')
    <input type="text" name="title" value="{{$todo->title}}" class="py-3 px-2 border"/>
    <input type="submit" name="Update" class="p-2 border rounded"/>
    </form>

    <a href="/todos" class="mx-5 my-5 py-1 px-1 bg-white-400 cursor-pointer rounded text-black"> Back</a>
@endsection














