@extends('todos.layout')
@section('content')

<div class="text-center pt-10">
    <h1>What next you want to do</h1>
<x-alert />
    <form method="post" action="/todos/create" class="py-5 border">
    @csrf
    <input type="text" name="title" class="py-3 px-2 border"/>
    <input type="submit" name="Create" class="p-2 border rounded"/>
    </form>

    <a href="/todos" class="mx-5 my-5 py-1 px-1 bg-white-400 cursor-pointer rounded text-black"> Back</a>
@endsection






