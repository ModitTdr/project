<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function login(){
        return view('UserHandling.login');
    }
    public function register() {
        return view('UserHandling.register');
    }

    public function store(Request $request){
        // dd($request);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create($validated);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication successful
            return back()->withSuccess('Registered Success');
        }else{
            return back()->withErrors('Registration Failed');
        }

    }
    public function alluser(){
        $all = User::all();
        return view('viewuser',compact('all'));
    }
    public function view(){
        $users = User::all();
        return view('viewuser',compact('users'));
    }
    public function delete(User $id){
        $id->delete();
        return redirect()->back();  
    }
}
