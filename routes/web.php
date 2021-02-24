<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
// use Illuminate\Http\Request;

Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos/create', [TodoController::class, 'store']);
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);
Route::patch('/todos/{todo}/update', [TodoController::class, 'update'])->name('todo.update');
Route::put('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todo.completed');
Route::delete('/todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', ['UserController@index'])->name('index');
// Route::get(['as'=>'user','user'=>'UserController@index']);
// Route::get('/user', 'UserController@index');
Route::get('/user', [UserController::class,'index']);

Route::post('/upload',[UserController::class,'uploadeAvater']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


