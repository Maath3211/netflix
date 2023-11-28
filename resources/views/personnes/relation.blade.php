@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')

    <br>
    <br>
    <br>

    <div id="container" class="container-fluid">
        <div class="row text-center ">
            <div class="col-3">
                <img src="" class="img-fluid" id="relationPer" alt="">
            </div>
            <div class="col-6">
                <form method="POST" action="{{ route('personnes.storePersonne') }}">
                    @csrf
                    <label for="personne">Personne</label>
                    <select name="personne" id="selectRel1" class="form-select">
                        <option value="" selected>Veuillez choisir une personne</option>
                        @foreach ($personnes as $personne)
                            <option value="{{ $personne->id }}">{{ $personne->nom }}</option>
                        @endforeach
                    </select>

                    <label for="film">Film</label>
                    <select name="film" id="selectRel2" class="form-select">
                        <option value="" selected>Veuillez choisir un film</option>
                        @foreach ($films as $film)
                            <option value="{{ $film->id }}">{{ $film->titre }}</option>
                        @endforeach
                    </select>


                    <button type="submit" class="btn btn-success">Ajouter</button>
                </form>
            </div>
            <div class="col-3">
                <img src="" class="img-fluid" id="relationFilm" alt="">
            </div>
        </div>




        <script src="{{ asset('js/relation.js') }}"></script>
    @endsection
