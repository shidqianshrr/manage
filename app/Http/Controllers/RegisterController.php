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
            'password'=>'required|min:6|max:25',
            'phone'=>'required',
            'country'=>'required',
            'city'=>'required',
            'postcode'=>'required',
            'address'=>'required',
        ]);

        $validatedData['password']=Hash::make($validatedData['password']);

        user::create($validatedData);

        $request->session()->flash('success', 'Successfully!!!');

        return redirect('/');
    }
}
