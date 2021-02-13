<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use Illuminate\Http\Request;

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


