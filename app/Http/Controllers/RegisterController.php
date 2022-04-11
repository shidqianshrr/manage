<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'username'=>'required',
            'password'=>'required:with:conf_password|same:conf_password',
            'conf_password' => 'required'
        ]);

        $validatedData['password']=Hash::make($validatedData['password']);
        $validatedData['conf_password']=Hash::make($validatedData['conf_password']);

        user::create($validatedData);

        $request->session()->flash('success', 'Successfully!!!');

        return redirect('/');
    }
}
