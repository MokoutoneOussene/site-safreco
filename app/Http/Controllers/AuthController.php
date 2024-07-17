<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role == "admin") {
                emotify('success', 'BIENVENUE ! Vous etes bien connecté !');
                return redirect()->route('dashboard');
            } elseif (Auth::user()->role == "client") {
                emotify('success', 'BIENVENUE ! Vous etes bien connecté !');
                return redirect()->route('home');
            } else {
                emotify('error', 'Login ou mot de passe incorrect !');
                return redirect()->route('connexion');
            }
        }
        emotify('error', 'Login ou mot de passe incorrect !');
        return redirect()->route('connexion');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
