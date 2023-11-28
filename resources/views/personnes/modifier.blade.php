@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')

    <br>
    <br>
    <br>

    <div id="container" class="container-fluid">
        <div class="row text-center ">
            <div class="col-6 offset-3 ">
                <form action="{{ route('personnes.patch', $personne->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" placeholder="Nom" name="nom" value="{{ $personne->nom }}">
                    <label for="date">Date de naissance</label>
                    <input type="date" class="form-control" placeholder="Date de naissance" name="date" value="{{$personne->date}}">
                    <label for="sexe">Sexe</label>
                    <select name="sexe" id="select" class="form-select">
                        <option @if($personne->sexe === 'm') selected @endif value="m">Homme</option>
                        <option @if($personne->sexe === 'f') selected @endif value="f">Femme</option>
                    </select>
                    <label for="photo">Lien de la photo</label>
                    <input type="text" class="form-control" placeholder="Photo" name="photo" value="{{ $personne->photo }}">

                    <div class="d-flex flex-row justify-content-center mt-1">
                        <input class="form-check-input " name="realisateur" @if($personne->realisateur == 1) checked @endif type="checkbox" value="1" id="realisateur">
                        <label for="realisateur">Réalisateur</label>
                    </div>

                    <div class="d-flex flex-row justify-content-center mt-1">
                        <input class="form-check-input" name="producteur" @if($personne->producteur == 1) checked @endif type="checkbox" value="1" id="producteur">
                        <label for="producteur">Producteur</label>
                    </div>

                    <div class="d-flex flex-row justify-content-center mt-1">
                        <input class="form-check-input" name="acteur" @if($personne->acteur == 1) checked @endif type="checkbox" value="1" id="acteur">
                        <label for="acteur">Acteur</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>






            </div>
        </div>
    </div>





@endsection
