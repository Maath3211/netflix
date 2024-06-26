<?php

namespace App\Http\Controllers;

use App\Http\Requests\acteurRequest;
use App\Http\Requests\personneRequest;
use App\Models\Film;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;


class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnes = Personne::all();
        return view('personnes.index', compact('personnes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personnes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(personneRequest $request)
    {
        try {
            $personne = new Personne($request->all());
            $uploadedFile  =  $request->file('photo');
            $nomFichierUnique  =  '/img/personnes/' . str_replace('  ',  '_',  $personne->nom)  .  '-'  .  uniqid()  .  '.'  .  $uploadedFile->extension();

            try {
                $request->photo->move(public_path('img/personnes'),  $nomFichierUnique);
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException  $e) {
                Log::error("Erreur  lors  du  téléversement  du  fichier.  ",  [$e]);
            }

            $personne->photo  =  $nomFichierUnique;
            $personne->save();
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->back()->withInput()->withErrors(['error' => "Une erreur s'est produite pendant l'ajout de la personne"]);
        }
        return redirect()->route('personnes.index')->with('success','L\'ajout à été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $films = Film::where('realisateur_id', $id)->get();
        $personne = Personne::find($id);
        return view('personnes.show', compact('personne', 'films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $films = Film::all();
        $personne = Personne::find($id);
        return view('personnes.modifier', compact('personne', 'films'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $personne = Personne::find($id);
        $personne->nom = $request->nom;
        $personne->date = $request->date;
        $personne->sexe = $request->sexe;
        $personne->realisateur = $request->realisateur == 1 ? $request->realisateur : 0;
        $personne->producteur = $request->producteur == 1 ? $request->producteur : 0;
        $personne->acteur = $request->acteur == 1 ? $request->acteur : 0;

        if ($request->photo) {
            if (request()->hasFile('photo')) {
                $uploadedFile  =  $request->file('photo');
                $nomFichierUnique   =   '/img/personnes/' . str_replace('   ',   '_',   $personne->nom)   .   '-'   .   uniqid()   .   '.'   .   $uploadedFile->extension();
                try {
                    $request->photo->move(public_path('img/personnes'),  $nomFichierUnique);
                    File::delete(public_path() . $personne->photo);
                } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException  $e) {
                    Log::error("Erreur  lors  du  téléversement  du  fichier.  ",  [$e]);
                }

                $personne->photo  =  $nomFichierUnique;
            } else {
                die('No file uploaded');
            }
        }

        $personne->save();
        return redirect()->route('personnes.index')->with('success','La modification à été enregistré');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $personne = Personne::findOrFail($id);
            //$personne->films()->detach();
            $personne->delete();
            return redirect()->route('personnes.index')->with('success', 'Personne supprimée');
        } catch (\Exception $e) {
            Log::debug($e);
            return redirect()->route('personnes.index')->withErrors(['La suppression a échoué' . $e->getMessage()]);
        }
    }

    


    public function storePersonne(Request $request)
    {
        try {

            $personne = Personne::findOrFail($request->personne);
            $film = Film::findOrFail($request->film);

            if ($film->acteurs->contains($personne)) {
                return redirect()->route('personnes.index')->withErrors(["L'acteur est déjà dans le film"]);
            } else {
                $film->acteurs()->attach($personne);
            }
            $film->save();
            return redirect()->route("personnes.index")->with("success", "Relation ajouté");
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route("personnes.index")->withErrors(["Relation Bogue!" . $e->getMessage()]);
        }
    }

    public function getLink($id)
    {
        $personne = Personne::findOrFail($id);
        return response()->json(['link' => $personne->photo]);
    }
    public function relation()
    {
        $personnes = Personne::all();
        $films = Film::all();
        return view('personnes.relation', compact('personnes', 'films'));
    }

    public function suppRelation($personneId, $filmId)
    {
        $personne = Personne::find($personneId);
        $personne->films()->detach($filmId);

        return redirect()->route('personnes.show', $personneId)->with('success', 'Film détaché avec succès.');
    }
}
