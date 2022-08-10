<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si login OK
            session()->flash('success_message', 'Bonjour et bienvenue !');

            return redirect()->intended('/profile');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
