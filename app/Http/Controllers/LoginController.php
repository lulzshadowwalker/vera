<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function foo()
    {
        return view('auth.register.index');
    }
}
