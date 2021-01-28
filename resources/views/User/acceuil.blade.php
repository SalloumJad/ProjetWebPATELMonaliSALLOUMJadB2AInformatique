@extends('Links/layout')

@section('content')

    {{ $i = 0 }}

    <div class="container">
        <div class="row">
            <ul> {{-- Début de ligne --}}

    @foreach($games as $game) {{-- Séparation de la liste des jeux afin de les afficher de la manière que l'on veut --}}

        @if($i < 2)
                <div class="col-xs-6">
                    <a href="{{ route('game.showGame', $game->id)  }}"><img name="image" src="{{ $game->image }}" alt="{{ $game->title }} image" width=200 height=300></a>
                    <div>
                        <label id="title">{{ $game->title }}</label>
                    </div>
                </div>
            {{ $i++ }}
        @else
            </ul> {{-- Fin de ligne après un maximum de 3 jeux affichés --}}

            <ul> {{-- Continuation sur une nouvelle ligne --}}
                <div class="col-xs-6">
                    <a href="{{ route('game.showGame', $game->id) }}"><img name="image" src="{{ $game->image }}" alt="{{ $game->title }} image" width=200 height=300></a>
                    <label id="title">{{ $game->title }}</label>
                </div>
            {{ $i = 0 }}
        @endif

    @endforeach

            </ul>
        </div>
    </div>

@endsection
