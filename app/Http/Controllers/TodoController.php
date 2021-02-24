<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Http\Request; 

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('completed','desc')->get();
        // return $todos;
        return view('todos.index', compact('todos'));
    }
    
    public function create()
    {
        return view('todos.create');
    }

    public function edit(Todo $todo)
    {
        // dd($todo->title);

        return view('todos.edit',compact('todo'));
    }

    public function store(TodoCreateRequest $request)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        // ]);
        // $rules = [
        //     'title' => 'required|max:255',
        // ];
        // $messages = [
        //     'title.max' => 'Todo message is here',
        // ];
        // $validator = Validator::make($request->all(),$rules,$messages);
        // if($validator->fails()){
        //     return redirect('todos/create')->withErrors($validator)->withInput();
        // }

        Todo::create($request->all());
        return redirect()->back()->with('message','Todo Created successfully');
    }

    public function update(TodoCreateRequest $request, Todo $todo){
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message','update!');
    }

    public function complete(Todo $todo){
        $todo->update(['completed'=> true]);
        return redirect()->back()->with('message','Task markes as completed');
    }

    public function incomplete(Todo $todo){
        $todo->update(['completed'=> false]);
        return redirect()->back()->with('message','Task markes as incomplete');
    }

}
