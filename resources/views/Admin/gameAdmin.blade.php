@extends('Links/layoutAdmin')

@section('content')
    <form action="{{ route('gameAdmin.modifyGame', $id)}}" method="post" class="form-inline">
        {{csrf_field()}}
        <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-10">
                <input name="title" type="text" class="form-control" id="inputTitle" placeholder="Titre" value="{{ $game->title }}" >
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
                <input name="company" class="form-control" type="text" id="inputCompany" value="{{ $game->company }}">
            </div>
        </div>

        @if($errors->has('company'))
            <p>La companie est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="staticPrice" class="col-sm-2 col-form-label">Prix</label>
            <div class="col-sm-10">
                <input name="price" type="text" class="form-control" id="inputPrice" placeholder="Montant" value="{{ $game->price }}">
            </div>
        </div>

        @if($errors->has('price'))
            <p>Le prix est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputKey" class="col-sm-2 col-form-label">Clé de produit</label>
            <div class="col-sm-10">
                <input name="key" type="text" class="form-control" id="inputKey" placeholder="Clé" value="{{ $game->key }}">
            </div>
        </div>

        @if($errors->has('key'))
            <p>La clé est obligatoire!</p>
        @endif

        <input type="button" class="btn btn-primary mb-2" value="Modifier le jeu">

    </form>

@endsection
