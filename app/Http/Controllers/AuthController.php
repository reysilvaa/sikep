<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function test(){
        dd(Auth::user());
    }

    public function login(){
        if(Auth::check()){
            return redirect()->back();
        }
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect()->route('login');
    }
    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect()->route('home');
    }
}
