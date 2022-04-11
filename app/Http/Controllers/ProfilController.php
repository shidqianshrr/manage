<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data['page'] = 'Profil';
        return view('profile.index')->with($data);
    }
}
