<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:8",
        ]);
    
        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route("home"));
        }
        return redirect(route("login"))->with("error", "Error! Login failed...");
    }
    
    function register()
    {
        return view("auth.register");
    }

    function registerPost(Request $request)
    {
        $request->validate([
            "username" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:8",
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()){
            return redirect(route("login"))->with("success","Sign up successful! Redirecting to login page...");
        }
        return redirect(route("register"))->with("error","Error! failed to create account...");
    }
}
