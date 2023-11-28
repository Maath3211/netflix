<?php

namespace App\Http\Controllers;

use App\Models\Usager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $usagers = Usager::all();
        return view('usagers.account', compact('usagers'));
    }

    public function create()
    {
        return view('usagers.ajouter');
    }

    public function store(Request $request)
    {
        try {
            $usager = new Usager();
            $usager->email = $request->email;
            $usager->nomUsager = $request->nomUsager;
            $usager->nom = $request->nom;
            $usager->prenom = $request->prenom;
            $usager->role = $request->role;
            $usager->password = bcrypt($request->password);
            $usager->save();
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->back()->withInput()->withErrors(['error' => "Une erreur s'est produite pendant la création du compte"]);
        }
        return redirect()->route('usagers.account');
    }
}
