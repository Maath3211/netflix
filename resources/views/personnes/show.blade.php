@auth
    @extends('layouts.app')
    @section('title', 'Netflix')
@section('contenu')
    <link rel="stylesheet" href="/css/show.css">


    <div id="container" class="container-fluid ">
        <div class="row text-center ">
            <br>
            <div class="col-2 offset-1">
                <a href="{{ route('personnes.index') }}" class="btn btn-info">Retour</a>
            </div>
        </div>

            <div class="row text-center ">
                <div class="col-4 offset-4">
                    
                    @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

                </div>
            </div>
            
        <div class="row text-center ">
            <div class="col-2 offset-2">
                <h1></h1>
                <img src="{{ $personne->photo }}" id="img" alt="">
            </div>

            <div class="col-4 p-0 ">
                <br>
                <h1 class="display-4 text-primary">
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
                    <span class="text-danger">{{ $personne->nom }} n'est pas un réalisateur &#10060;</span>
                    @elseif ($personne->realisateur == '0' && $personne->sexe === 'f')
                    <span class="text-danger">{{ $personne->nom }} n'est pas une realisatrice &#10060;</span>
                    @elseif($personne->realisateur == '1' && $personne->sexe === 'm')
                    <span class="text-success">{{ $personne->nom }} est un réalisateur &#x2705;</span>
                    @elseif($personne->realisateur == '1' && $personne->sexe === 'f')
                    <span class="text-success">{{ $personne->nom }} est une realisatrice &#x2705;</span>
                    @endif
                </p>

                <p>
                    @if ($personne->producteur == '0' && $personne->sexe === 'm')
                    <span class="text-success">{{ $personne->nom }} n'est pas un producteur &#10060;</span>
                    @elseif ($personne->producteur == '0' && $personne->sexe === 'f')
                    <span class="text-success">{{ $personne->nom }} n'est pas une productrice &#10060;</span>
                    @elseif($personne->producteur == '1' && $personne->sexe === 'm')
                    <span class="text-success">{{ $personne->nom }} est un producteur &#x2705;</span>
                    @elseif($personne->producteur == '1' && $personne->sexe === 'f')
                    <span class="text-success">{{ $personne->nom }} est une productrice &#x2705;</span>
                    @endif
                </p>

                <p>
                    @if ($personne->acteur == '0' && $personne->sexe === 'm')
                    <span class="text-success">{{ $personne->nom }} n'est pas un acteur &#10060;</span>
                    @elseif ($personne->acteur == '0' && $personne->sexe === 'f')
                    <span class="text-success">{{ $personne->nom }} n'est pas une actrice &#10060;</span>
                    @elseif($personne->acteur == '1' && $personne->sexe === 'm')
                    <span class="text-success">{{ $personne->nom }} est un acteur &#x2705;</span>
                    @elseif($personne->acteur == '1' && $personne->sexe === 'f')
                    <span class="text-success">{{ $personne->nom }} est une actrice &#x2705;</span>
                    @endif
                </p>

                @role('admin')
                    <a href="{{ route('personnes.edit', $personne->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('personnes.destroy', $personne->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('Êtes-vous certain de vouloir supprimer {{ $personne->nom }}?')"
                            class="btn btn-danger mt-1">Supprimer</button>
                    </form>
                @endrole
            </div>

            <div class="col-2 p-0">
                <h1></h1>
                <h2 id="test">Filmographie</h2>
                @foreach ($personne->films as $film)
                @role('admin')
                <form action="{{ route('relation.destroy', [$personne->id, $film->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            onclick="return confirm('Êtes-vous certain de vouloir supprimer la relation?')"
                            class="btn btn-danger mt-1"> 
                    @endrole 
                    <h4> &#10153; {{ $film->titre }}</h4> 
                    @role('admin')</button></form>@endrole
                @endforeach
            </div>


        </div>
    </div>


@endsection
@endauth
