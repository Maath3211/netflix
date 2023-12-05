@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')
    <link rel="stylesheet" href="/css/account.css">
    @auth



        <br><br>




        @role('admin')
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Utilisateurs</h1>
                        <a href="{{ route('usagers.create') }}"><button type="button" class="btn btn-primary">Créer un
                                utilisateur</button></a>





                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nom d'usager</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Rôle</th>
                                    <th scope="col">Image</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($usagers))
                                    @foreach ($usagers as $usager)
                                        <tr>
                                            <th scope="row">{{ $usager->email }}</th>
                                            <td>{{ $usager->nomUsager }}</td>
                                            <td>{{ $usager->nom }}</td>
                                            <td>{{ $usager->prenom }}</td>
                                            <td>{{ $usager->role }}</td>
                                            <td><img src="{{ $usager->image }}" alt="" width="100px"></td>
                                            <td><a href="{{ route('usagers.edit', $usager->id) }}"><button type="button"
                                                        class="btn btn-primary">Modifier</button></a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endrole



        @role('normal')
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="formbold-main-wrapper">
                            <!-- Author: FormBold Team -->
                            <!-- Learn More: https://formbold.com -->
                            <div class="formbold-form-wrapper">

                                <form action="{{ route('usagers.updateNormal', $connecte->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="formbold-form-title">
                                        <h2 class="">Votre compte</h2>
                                    </div>

                                    <div class="formbold-input-flex">
                                        <div>
                                            <label for="email" class="formbold-form-label"> Email </label>
                                            <input type="email" readonly name="email" class="formbold-form-input"
                                                value="{{ $connecte->email }}" />
                                        </div>
                                        <div>
                                            <label for="nomUsager" class="formbold-form-label">Nom d'usager</label>
                                            <input type="text" readonly name="nomUsager" class="formbold-form-input"
                                                value="{{ $connecte->nomUsager }}" />
                                        </div>

                                    </div>

                                    <div class="formbold-input-flex">
                                        <div>
                                            <label for="nom" class="formbold-form-label"> Nom </label>
                                            <input type="text" name="nom" class="formbold-form-input"
                                                value="{{ $connecte->nom }}" />
                                        </div>
                                        <div>
                                            <label for="prenom" class="formbold-form-label"> Prenom </label>
                                            <input type="text" name="prenom" class="formbold-form-input"
                                                value="{{ $connecte->prenom }}" />
                                        </div>
                                    </div>

                                    <div class="formbold-mb-3">
                                        <label for="password" class="formbold-form-label">
                                            Mot de passe
                                        </label>
                                        <input type="password" name="password" placeholder="Laisser vide pour ne pas changer"
                                            class="formbold-form-input" />
                                        <input type="text" name="role" hidden class="formbold-form-input"
                                            value="{{ $connecte->role }}" />
                                    </div>
                                    <button class="formbold-btn">Enregistrer les modifications</button>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        @endrole

        @role('kid')
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="formbold-main-wrapper">
                            <!-- Author: FormBold Team -->
                            <!-- Learn More: https://formbold.com -->
                            <div class="formbold-form-wrapper">

                                <form action="{{ route('usagers.updateNormal', $connecte->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="formbold-form-title">
                                        <h2 class="">Votre compte</h2>
                                    </div>

                                    <div class="formbold-input-flex">
                                        <div>
                                            <label for="email" class="formbold-form-label"> Email </label>
                                            <input type="email" readonly name="email" class="formbold-form-input"
                                                value="{{ $connecte->email }}" />
                                        </div>
                                        <div>
                                            <label for="nomUsager" class="formbold-form-label">Nom d'usager</label>
                                            <input type="text" readonly name="nomUsager" class="formbold-form-input"
                                                value="{{ $connecte->nomUsager }}" />
                                        </div>

                                    </div>

                                    <div class="formbold-input-flex">
                                        <div>
                                            <label for="nom" class="formbold-form-label"> Nom </label>
                                            <input type="text" name="nom" class="formbold-form-input"
                                                value="{{ $connecte->nom }}" />
                                        </div>
                                        <div>
                                            <label for="prenom" class="formbold-form-label"> Prenom </label>
                                            <input type="text" name="prenom" class="formbold-form-input"
                                                value="{{ $connecte->prenom }}" />
                                        </div>
                                    </div>

                                    <div class="formbold-mb-3">
                                        <label for="password" class="formbold-form-label">
                                            Mot de passe
                                        </label>
                                        <input type="password" name="password" placeholder="Laisser vide pour ne pas changer"
                                            class="formbold-form-input" />
                                        <input type="text" name="role" hidden class="formbold-form-input"
                                            value="{{ $connecte->role }}" />
                                    </div>
                                    <button class="formbold-btn">Enregistrer les modifications</button>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        @endrole




    @endauth

@endsection
