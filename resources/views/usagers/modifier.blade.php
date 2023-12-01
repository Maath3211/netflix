@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')

    @auth
        <br><br>
        <div class="container">
            <div class="row text-center">
                <div class="col-6 offset-3">
                    <p class="h1"> {{ $usager->nomUsager }} </p>
                </div>
            </div>

            <div class="row">
                <div class="col-3 offset-3">
                    <form action="{{ route('usagers.patch', $usager->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <label for="email">Email</label>
                        <input readonly type="text" class="form-control" placeholder="Email" name="email"
                            value="{{ $usager->email }}">

                        <label for="mdp">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                        <!-- <label for="mdpConf">Confirmation de Mot de passe</label>
                                <input type="password" class="form-control" placeholder="Mot de passe" name="mdpConf">-->

                        <label for="nomUsager">Nom d'utilisateur</label>
                        <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="nomUsager"
                            value="{{ $usager->nomUsager }}">
                </div>

                <div class="col-3">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" placeholder="Nom" name="nom" value="{{ $usager->nom }}">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" placeholder="Prénom" name="prenom" value="{{ $usager->prenom }}">

                    <label for="role">Rôle</label>
                    <select name="role" class="form-select">
                        <option disabled>Rôle</option>
                        <option @if($usager->role === 'admin') selected @endif value="admin">Admin</option>
                        <option @if($usager->role === 'normal') selected @endif value="normal">Normal</option>
                        <option @if($usager->role === 'kid') selected @endif value="kid">Enfant</option>
                    </select>
                    <br>
                </div>

                    <div class="row text-center">
                        <div class="col-6 offset-3">
                            <button type="submit" class="btn btn-success">Modifier</button>
                       


                    </form>
                    <form action="{{ route('usagers.destroy', $usager->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Êtes-vous certain de vouloir supprimer ce compte?')" class="btn btn-danger mt-1">Supprimer</button>
                    </form>
                </div>
            </div>
                </div>
            </div>
        </div>
    @endauth

@endsection
