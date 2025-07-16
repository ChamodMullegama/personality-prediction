<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControllerr extends Controller
{

    public function showLogin()
    {
        return view('Pages.Auth.login');
    }

    public function showRegister()
    {
        return view('Pages.Auth.register');
    }
}
