@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')

    <br>
    <br>
    <br>

    <div id="container" class="container-fluid">
        @csrf
        <div class="row text-center ">
            <div class="col-6 offset-3 ">
                <form method="POST" action="{{ route('personnes.store') }}">
                    @csrf
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" placeholder="Nom" name="nom" value="{{ old('nom') }}">
                    <label for="date">Date de naissance</label>
                    <input type="date" class="form-control" placeholder="Date de naissance" name="date">
                    <label for="sexe">Sexe</label>
                    <select name="sexe" id="select" class="form-select">
                        <option value="m">Homme</option>
                        <option value="f">Femme</option>
                    </select>
                    <label for="photo">Lien de la photo</label>
                    <input type="text" class="form-control" placeholder="Photo" name="photo" value="{{ old('photo') }}">

                    <div class="d-flex flex-row justify-content-center mt-1">
                        <input class="form-check-input " name="realisateur" type="checkbox" value="1" id="realisateur">
                        <label for="realisateur">Réalisateur</label>
                    </div>

                    <div class="d-flex flex-row justify-content-center mt-1">
                        <input class="form-check-input" name="producteur" type="checkbox" value="1" id="producteur">
                        <label for="producteur">Producteur</label>
                    </div>

                    <div class="d-flex flex-row justify-content-center mt-1">
                        <input class="form-check-input" name="acteur" type="checkbox" value="1" id="acteur">
                        <label for="acteur">Acteur</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>






            </div>
        </div>
    </div>





@endsection
