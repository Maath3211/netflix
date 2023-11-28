<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
        return $film;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getLink($id)
    {
        $film = Film::findOrFail($id);
        return response()->json(['link' => $film->pochetteURL]);
    }
}
