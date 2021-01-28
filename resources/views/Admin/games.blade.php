@extends('Links/layoutAdmin')

@section('content')


    <form action="{{ route('games.addGame') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-10">
                <input name="title" type="text" class="form-control" id="inputTitle" placeholder="Titre" value="{{ old('title') }}" >
            </div>
        </div>

        @if($errors->has('title'))
            <p>Le titre est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input name="image" type="file" class="form-control" id="inputImage">
            </div>
        </div>

        @if($errors->has('image'))
            <p>L'image est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputCompany" class="col-2 col-form-label">Companie</label>
            <div class="col-10">
                <input name="company" class="form-control" type="text" id="inputCompany" value="{{ old('company') }}">
            </div>
        </div>

        @if($errors->has('company'))
            <p>La companie est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="staticPrice" class="col-sm-2 col-form-label">Prix</label>
            <div class="col-sm-10">
                <input name="price" type="text" class="form-control" id="inputPrice" placeholder="Montant" value="{{ old('price') }}">
            </div>
        </div>

        @if($errors->has('price'))
            <p>Le prix est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputKey" class="col-sm-2 col-form-label">Clé de produit</label>
            <div class="col-sm-10">
                <input name="key" type="text" class="form-control" id="inputKey" placeholder="Clé">
            </div>
        </div>

        @if($errors->has('key'))
            <p>La clé est obligatoire!</p>
        @endif

        <input type="submit" value="Enregistrer le jeu" class="btn btn-primary mb-2">
    </form>




    {{ $i = 0 }}

    <div class="container">
        <div class="row">
            <ul> {{-- Début de ligne --}}

    @foreach($games as $game) {{-- Séparation de la liste des jeux afin de les afficher de la manière que l'on veut --}}

        @if($i < 2)
                <div class="col-xs-6">
                    <a href="{{ route('gameAdmin.showGame', $game->id)  }}"><img name="image" src="{{ $game->image }}" alt="{{ $game->title }} image" width=200 height=300></a>
                    <div>
                        <label id="title">{{ $game->title }}</label>
                    </div>
                </div>
            {{ $i++ }}
        @else
            </ul> {{-- Fin de ligne après un maximum de 3 jeux affichés --}}

            <ul> {{-- Continuation sur une nouvelle ligne --}}
                <div class="col-xs-6">
                    <a href="{{ route('gameAdmin.showGame', $game->id) }}"><img name="image" src="{{ $game->image }}" alt="{{ $game->title }} image" width=200 height=300></a>
                    <label id="title">{{ $game->title }}</label>
                </div>
            {{ $i = 0 }}
        @endif

    @endforeach

            </ul>
        </div>
    </div>

@endsection
