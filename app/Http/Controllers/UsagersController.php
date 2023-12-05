<?php

namespace App\Http\Controllers;

use App\Models\Usager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

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
        $connecte = Usager::Find(Auth::id());
        $usagers = Usager::all();
        return view('usagers.account', compact('usagers', 'connecte'));
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
            $uploadedFile  =  $request->file('image');
            $nomFichierUnique  =  '/img/usagers/' . str_replace('  ',  '_',  $usager->nom)  .  '-'  .  uniqid()  .  '.'  .  $uploadedFile->extension();

            try {
                $request->image->move(public_path('img/usagers'),  $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException  $e) {
                Log::error("Erreur  lors  du  téléversement  du  fichier.  ",  [$e]);
            }

            $usager->image  =  $nomFichierUnique;
            $usager->save();
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->back()->withInput()->withErrors(['error' => "Une erreur s'est produite pendant la création du compte"]);
        }
        return redirect()->route('usagers.account');
    }

    public function edit(string $id)
    {
        $usager = Usager::find($id);
        return view('usagers.modifier', compact('usager'));
    }

    public function update(Request $request, string $id)
    {
        $usager = Usager::find($id);
        if ($request->email) {
            $usager->email = $request->email;
        }
        if ($request->nomUsager) {
            $usager->nomUsager = $request->nomUsager;
        }
        if ($request->nom) {
            $usager->nom = $request->nom;
        }
        if ($request->prenom) {
            $usager->prenom = $request->prenom;
        }
        if ($request->role) {
            $usager->role = $request->role;
        }
        if (!$request->password) {
            unset($request['password']);
        } else {
            $usager->password = bcrypt($request->password);
        }
        if ($request->image) {
            $uploadedFile  =  $request->file('image');
            $nomFichierUnique  =  '/img/usagers/' . str_replace('  ',  '_',  $usager->nom)  .  '-'  .  uniqid()  .  '.'  .  $uploadedFile->extension();

            try {
                $request->image->move(public_path('img/usagers'),  $nomFichierUnique);
                File::delete(public_path() . $usager->image);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException  $e) {
                Log::error("Erreur  lors  du  téléversement  du  fichier.  ",  [$e]);
            }

            $usager->image  =  $nomFichierUnique;
        }
        $usager->save();
        return redirect()->route('usagers.account');
    }
    public function updateNormal(Request $request, string $id)
    {
        $usager = Usager::find($id);
        if ($request->nom) {
            $usager->nom = $request->nom;
        }
        if ($request->prenom) {
            $usager->prenom = $request->prenom;
        }
        if (!$request->password) {
            unset($request['password']);
        } else {
            $usager->password = bcrypt($request->password);
        }
        $usager->save();
        return redirect()->route('usagers.account');
    }

    public function destroy(string $id)
    {
        $usager = Usager::find($id);
        File::delete(public_path() . $usager->image);
        $usager->delete();
        return redirect()->route('usagers.account');
    }
}
