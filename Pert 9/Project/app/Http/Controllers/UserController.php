<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    // public function index() {
    //     $users = DB::table('users')
    //     ->get();

    //     dd($users);
    // }

    public function index() {
        $users = User::query()->first()->get();

        return view('users.index',[
            'users' => $users,
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request){
        // $validated = $request->validate([
        //     'name' => ['required', 'min:3', 'max:255', 'string'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required', 'min:8'],
        // ]);

        // User::create($validated);

        User::create($request->validate([
            'name' => ['required', 'min:3', 'max:255','string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]));

        return redirect('/users');
    }

    public function show(User $user){

        return view('users/show',[
            'user' => $user,
        ]);
    }
}
