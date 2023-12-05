@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')

    @auth
        <br><br>
        <div class="container">
            <div class="row text-center">
                <div class="col-6 offset-3">
                    <p class="h1">Utilisateurs</p>
                </div>
            </div>

            <div class="row">
                <div class="col-3 offset-3">

                    <form action="{{ route('usagers.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email"
                            value="{{ old('email') }}">

                        <label for="mdp">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                        <!-- <label for="mdpConf">Confirmation de Mot de passe</label>
                                <input type="password" class="form-control" placeholder="Mot de passe" name="mdpConf">-->

                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="nomUsager"
                            value="{{ old('username') }}">

                            <div class="form-group">
                                <label for="imageID">Sélectionner l'image</label>
                                <input type="file" class="form-control-file" id="imageID" name="image">
                            </div>
                </div>

                <div class="col-3">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" placeholder="Nom" name="nom" value="{{ old('nom') }}">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" placeholder="Prénom" name="prenom" value="{{ old('prenom') }}">

                    <label for="role">Rôle</label>
                    <select name="role" class="form-select">
                        <option selected disabled>Rôle</option>
                        <option value="admin">Admin</option>
                        <option value="normal">Normal</option>
                        <option value="kid">Enfant</option>
                    </select>

                    

                    <br>

                    <div class="row text-center">
                        <div class="col-6 offset-3">
                            <button type="submit" class="btn btn-success">Créer</button>
                        </div>
                    </div>


                    </form>



                </div>
            </div>
        </div>



    @endauth

@endsection
