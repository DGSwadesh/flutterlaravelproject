<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

// use App\Http\Controllers\User;

class UserController extends Controller
{
    public function index()
    {
        // DB:: insert('insert into users (name,email,password)
        // values (?,?,?)',['Dibyendu', 'ghoshdibyendu@gmail.com','password']);

        // $user = DB::select('select * from users');
        // return $user;
        // DB::update('update users set name = ? where id = 1',['dg']);
        // DB::delete('delete from users where id = 1');
        // $user = DB::select('select * from users');
        // return $user;

        // $user = new User();
        // // dd($user);
        // $user = new User();
        // $user -> name = 'karan Ghosh';
        // $user -> email = 'ghoshdffddbyendduy@dgmail.com';
        // $user -> password = 'password';
        // $user -> save();

        // User::where('id', 4) -> update(['name' => 'dghosh']);
        $user = User::all();
        // User::where('id', 3)->delete();  
        return $user;

        // return view('home');
    }
}

