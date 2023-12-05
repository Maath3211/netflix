@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')
    <link rel="stylesheet" href="/css/account.css">

    @auth

        @role('admin')
            <div class="container">
                <div class="row ">
                    <div class="col-6 offset-3">

                        <div class="formbold-main-wrapper">
                            <!-- Author: FormBold Team -->
                            <!-- Learn More: https://formbold.com -->
                            <div class="formbold-form-wrapper">

                                <form action="{{ route('usagers.update', $usager->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="formbold-form-title">
                                        <h2 class="text-center">{{ $usager->nomUsager }}</h2>
                                    </div>

                                    <div class="formbold-input-flex">
                                        <div>
                                            <label for="email" class="formbold-form-label"> Email </label>
                                            <input type="email" name="email" class="formbold-form-input"
                                                value="{{ $usager->email }}" />
                                        </div>
                                        <div>
                                            <label for="nomUsager" class="formbold-form-label">Nom d'usager</label>
                                            <input type="text" name="nomUsager" class="formbold-form-input"
                                                value="{{ $usager->nomUsager }}" />
                                        </div>

                                    </div>

                                    <div class="formbold-input-flex">
                                        <div>
                                            <label for="nom" class="formbold-form-label"> Nom </label>
                                            <input type="text" name="nom" class="formbold-form-input"
                                                value="{{ $usager->nom }}" />
                                        </div>
                                        <div>
                                            <label for="prenom" class="formbold-form-label"> Prenom </label>
                                            <input type="text" name="prenom" class="formbold-form-input"
                                                value="{{ $usager->prenom }}" />
                                        </div>
                                    </div>

                                    <div class="formbold-mb-3">
                                        <label for="password" class="formbold-form-label">
                                            Mot de passe
                                        </label>
                                        <input type="password" name="password" placeholder="Laisser vide pour ne pas changer"
                                            class="formbold-form-input" />
                                        <div class="formbold-mb-5">

                                            <label for="role" class="formbold-form-label">
                                                Rôle
                                            </label>

                                            <div class="formbold-radio-flex">
                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="role"
                                                            @if ($usager->role == 'admin') checked @endif id="role"
                                                            value="admin" />
                                                        Admin
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>

                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="role"
                                                            @if ($usager->role == 'normal') checked @endif id="role"
                                                            value="normal" />
                                                        Normal
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>

                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="role"
                                                            @if ($usager->role == 'kid') checked @endif id="role"
                                                            value="kid" />
                                                        Kid
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>

                                                <div class="form-group">
                                                    <label for="imageID">Sélectionner l'image</label>
                                                    <input type="file" class="form-control-file" id="imageID" name="image">
                                                </div>

                                                <button class="formbold-btn">Enregistrer les modifications</button>
                                </form>
                                <form action="{{ route('usagers.destroy', $usager->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Êtes-vous certain de vouloir supprimer cette personne?')"
                                        class="btn btn-danger mt-1">Supprimer</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endrole
    @endauth

@endsection
