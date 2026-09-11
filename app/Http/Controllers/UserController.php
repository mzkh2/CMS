<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:255',
        ]);
        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => bcrypt($validate['password']),
        ]);
        Auth::login($user);
        return redirect('/doctors');
    }
    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);
        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect('/doctors');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/register');
    }
}

