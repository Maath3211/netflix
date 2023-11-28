@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')
    @auth



        <br><br>




        @role('admin')
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Utilisateurs</h1>
                        <a href="{{ route('usagers.create') }}"><button type="button" class="btn btn-primary">Créer un
                                utilisateur</button></a>

                        <section class="main-container">
                            <div class="box">

                                @if (count($usagers))
                                    @foreach ($usagers as $usager)
                                        <p>
                                            Email: {{ $usager->email }}<br>
                                            Nom d'usager: {{ $usager->nomUsager }}<br>
                                            Nom: {{ $usager->nom }}<br>
                                            Prénom: {{ $usager->prenom }}<br>
                                            Rôle: {{ $usager->role }}<br>
                                            <a href=""><button type="button" class="btn btn-dark">Modifier</button></a>
                                        </p>
                                    @endforeach
                                @endif
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        @endrole



        @role('normal')
        @endrole




    @endauth

@endsection
