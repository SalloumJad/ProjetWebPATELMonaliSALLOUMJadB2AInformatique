@extends('Links/layout')

@section('content')

    @foreach($posts as $post)
        <ul>
            <div class="col-xs-6">
                <label name="title" class="col-sm-2 col-form-label">{{$post->title}}</label>
            </div>
        </ul>
    @endforeach
    
    <form action="{{ route('conseils.makePost') }}" method="post">
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
            <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input name="description" type="text" class="form-control" id="inputDesc" placeholder="Description" value="{{ old('description') }}">
            </div>
        </div>

        @if($errors->has('description'))
            <p>Description est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputImage" class="col-2 col-form-label">Image</label>
            <div class="col-10">
                <input name="image" type="file" id="inputImage">
            </div>
        </div>

        @if($errors->has('image'))
            <p>Age est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputGameName" class="col-sm-2 col-form-label">Nom du jeu</label>
            <div class="col-sm-10">
                <input name="gameName" type="text" class="form-control" id="inputGameName" placeholder="Nom du jeu" value="{{ old('gameName') }}">
            </div>
        </div>

        @if($errors->has('gameName'))
            <p>Le nom du jeu est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputPrice" class="col-sm-2 col-form-label">Prix</label>
            <div class="col-sm-10">
                <input name="price" type="text" class="form-control" id="inputPrice" placeholder="Prix" value="{{ old('price') }}">
            </div>
        </div>

        @if($errors->has('price'))
            <p>Le prix est obligatoire!</p>
        @endif

        <input type="submit" value="Créer un article" class="btn btn-primary mb-2">
    </form>
@endsection
