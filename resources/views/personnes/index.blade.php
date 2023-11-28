@extends('layouts.app')
@section('title', 'Netflix')
@section('contenu')

    @auth




        <br>

        <section class="main-container">

            <label class="mt-5" for="tri">Trier par</label>
            <div id="tri_ajout">


                <?php
                if (!empty($_GET['tri'])) {
                    $tri = $_GET['tri'];
                } else {
                    $tri = 0;
                }
                ?>

                <select class="form-select me-3" name="tri" id="tri">
                    <option @if ($tri == 0) { echo selected } @endif value="0">Tous</option>
                    <option @if ($tri == 1) { echo selected } @endif value="1">Date de naissance</option>
                    <option @if ($tri == 2) { echo selected } @endif value="2">Sexe</option>
                    <option @if ($tri == 3) { echo selected } @endif value="3">Metier</option>
                </select>

                @role('admin')
                    <a href="{{ route('personnes.create') }}"><button type="button" class="btn btn-info">Ajouter</button></a>
                @endrole
            </div>

            @switch($tri)
                @case(0)
                    <br />
                    <div class="box">

                        @if (count($personnes))
                            @foreach ($personnes as $personne)
                                <p>{{ $personne->nom }}
                                    <a href={{ route('personnes.show', $personne->id) }}><img src="{{ $personne->photo }}"
                                            class="max300" alt=""></a>
                                </p>
                            @endforeach
                        @endif
                    </div>
                @break

                <!-------------------------------------------------------------->
                @case(1)
                    <p class="h1 mt-3"></p>

                    <div class="box">

                        @if (count($personnes))
                            @foreach ($personnes->sortBy('date') as $personne)
                                <p>{{ $personne->nom }}
                                    <a href="{{ route('personnes.show', $personne->id) }}"><img src="{{ $personne->photo }}"
                                            class="max300" alt=""></a>
                                </p>
                            @endforeach
                        @endif
                    </div>
                    @break

                    <!-------------------------------------------------------------->
                    @case(2)
                        <p class="h1 mt-3">Homme</p>
                        <div class="box">

                            @if (count($personnes))
                                @foreach ($personnes as $personne)
                                    @if ($personne->sexe === 'm')
                                        <p>{{ $personne->nom }}
                                            <a href="{{ route('personnes.show', $personne->id) }}"><img src="{{ $personne->photo }}"
                                                    class="max300" alt=""></a>
                                        </p>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <p class="h1 mt-3">Femme</p>
                        <div class="box">

                            @if (count($personnes))
                                @foreach ($personnes as $personne)
                                    @if ($personne->sexe === 'f')
                                        <p>{{ $personne->nom }}
                                            <a href="{{ route('personnes.show', $personne->id) }}"><img src="{{ $personne->photo }}"
                                                    class="max300" alt=""></a>
                                        </p>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    @break

                    <!-------------------------------------------------------------->
                    @case(3)
                        <h1>Acteurs</h1>
                        <div class="box">
                            @if (count($personnes))
                                @foreach ($personnes as $personne)
                                    @if ($personne->acteur == 1)
                                        <p>{{ $personne->nom }}
                                            <a href="{{ route('personnes.show', $personne->id) }}"><img src="{{ $personne->photo }}"
                                                    class="max300" alt=""></a>
                                        </p>
                                    @endif
                                @endforeach
                            @endif
                        </div>

                        <h1>Producteur</h1>
                        <div class="box">
                            @if (count($personnes))
                                @foreach ($personnes as $personne)
                                    @if ($personne->producteur == 1)
                                        <p>{{ $personne->nom }}
                                            <a href="{{ route('personnes.show', $personne->id) }}"><img src="{{ $personne->photo }}"
                                                    class="max300" alt=""></a>
                                        </p>
                                    @endif
                                @endforeach
                            @endif
                        </div>

                        <h1>Réalisateur</h1>
                        <div class="box">
                            @if (count($personnes))
                                @foreach ($personnes as $personne)
                                    @if ($personne->realisateur == 1)
                                        <p>{{ $personne->nom }}
                                            <a href="{{ route('personnes.show', $personne->id) }}"><img src="{{ $personne->photo }}"
                                                    class="max300" alt=""></a>
                                        </p>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    @break
                @endswitch






        </section>


        <script src="{{ asset('js/script.js') }}"></script>

    @endauth
@endsection
