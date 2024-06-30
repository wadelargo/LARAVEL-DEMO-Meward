<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){

        $user = User::orderBy('id')->get();

        return view('users.index',['users' => $user]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $request->validate([
            'username'      => 'required',
            'email'         => 'required|email',
            'full_name'     => 'required'
        ]);

        User::create([
            'username'      => $request->username,
            'email'         => $request->email,
            'full_name'     => $request->full_name
        ]);

        return redirect('/users')->with('message','A new user has been added');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'full_name'  => 'required',
            'email'      => 'required',
            'username'   => 'required'
        ]);

        $user->update($request->all());
        return redirect('/users')->with('message', "$user->full_name has been updated" );
    }

    public function delete(User $user) {

        $user->delete();

        return redirect('/users')->with('message', "$user->full_name has been deleted");
    }
}
