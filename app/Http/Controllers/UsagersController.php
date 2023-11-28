<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsagersController extends Controller
{
    
    public function index()
    {
        return view('usagers.index');
    }

    public function login(Request $request)
    {
        $reussi = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($reussi) {
            return redirect()->route('personnes.index')->with('message', 'Connexion réussie');
        } else {
            return redirect()->route('login')->withErrors(['error' => "Information invalides"]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('personnes.index')->with('message', 'Déconnexion réussie');
    }

    public function account()
    {
        return view('usagers.account');
    }
}
