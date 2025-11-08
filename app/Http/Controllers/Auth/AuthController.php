<?php

namespace App\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() { return view('auth.login'); }
    public function register() { return view('auth.register'); }

    public function authenticate(Request $request)
    {
        // validate credentials and attempt login
    }

    public function store(Request $request)
    {
        // validate registration and create account
    }

    public function logout()
    {
        // perform logout and redirect
    }
}
