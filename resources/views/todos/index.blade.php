@extends('todos.layout')
@section('content')
    <div class="flex justify-between border-b pb-4 px-3">
        <h1 class="text-2x1">All your todos</h1>
        <a href="/todos/create" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">
            <span class="fa fa-plus text-green-400 px-1"></span>
        </a>
    </div>
    <x-alert />
    <ul class="my-5">
        @foreach ($todos as $todo)
            <li class="flex justify-center py-2">
                @include('todos.complete_blade')

            </li>
        @endforeach
    </ul>
@endsection
