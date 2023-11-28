@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')
    <h1></h1>

    <div id="container" class="container-fluid ">
        <div class="row text-center ">

            <div class="col-2 offset-1">
                <h1></h1>
                <img src="{{ $personne->photo }}" class="img-fluid" alt="">
            </div>

            <div class="col-6">

                <h1>
                    {{ $personne->nom }}
                </h1>

                <p>
                    Date de naissance: {{ $personne->date }}
                </p>

                <p>
                    @if ($personne->sexe === 'm')
                        Homme
                    @elseif($personne->sexe === 'f')
                        Femme
                    @endif
                </p>

                <p>
                    @if ($personne->realisateur == '0' && $personne->sexe === 'm')
                        {{ $personne->nom }} n'est pas un réalisateur
                    @elseif ($personne->realisateur == '0' && $personne->sexe === 'f')
                    {{ $personne->nom }} n'est pas une realisatrice
                    @elseif($personne->realisateur == '1' && $personne->sexe === 'm')
                    {{ $personne->nom }} est un réalisateur
                    @elseif($personne->realisateur == '1' && $personne->sexe === 'f')
                    {{ $personne->nom }} est une realisatrice
                    @endif
                </p>

                <p>
                    @if ($personne->producteur == '0' && $personne->sexe === 'm')
                    {{ $personne->nom }} n'est pas un producteur
                    @elseif ($personne->producteur == '0' && $personne->sexe === 'f')
                    {{ $personne->nom }} n'est pas une productrice
                    @elseif($personne->producteur == '1' && $personne->sexe === 'm')
                    {{ $personne->nom }} est un producteur
                    @elseif($personne->producteur == '1' && $personne->sexe === 'f')
                    {{ $personne->nom }} est une productrice
                    @endif
                </p>

                <p>
                    @if ($personne->acteur == '0' && $personne->sexe === 'm')
                    {{ $personne->nom }} n'est pas un acteur
                    @elseif ($personne->acteur == '0' && $personne->sexe === 'f')
                    {{ $personne->nom }} n'est pas une actrice
                    @elseif($personne->acteur == '1' && $personne->sexe === 'm')
                    {{ $personne->nom }} est un acteur
                    @elseif($personne->acteur == '1' && $personne->sexe === 'f')
                    {{ $personne->nom }} est une actrice
                    @endif
                </p>

                @role('admin')
                <a href="{{ route('personnes.edit', $personne->id) }}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('personnes.destroy', $personne->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Êtes-vous certain de vouloir supprimer cette personne?')" class="btn btn-danger mt-1">Supprimer</button>
                </form>
                @endrole
            </div>

            <div class="col-3">
                <h1></h1>
                @if($films->count() > 0)

                @endif
                
                <h2>Filmographie</h2>
                @foreach ($personne->films as $film)
                    <h4>{{ $film->titre }}</h4>
                @endforeach
            </div>


        </div>
    </div>


@endsection
