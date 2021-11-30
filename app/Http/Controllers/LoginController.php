<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $security = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        if (Auth::attempt($security)) {
            $request->session()->regenerate();
            return redirect()->intended('welcome');
        }

        return back()->with('error', 'Email atau Password salah');
    }
}