@extends('Links/layout')

@section('content')

    <form action="{{ route('game.addGameToCart', $id)}}" method="post" class="form-inline">
        {{csrf_field()}}

        <div class="form-group mb-2">
            <label name="title" class="sr-only">{{ $game->title }} </label>
        </div>

        <div class="form-group mb-2">
            <img name="image" src="{{ $game->image }}" alt="{{ $game->title }} image" width=200 height=300>
        </div>

        <div class="form-group mb-2">
            <label name="company" class="sr-only">Companie: {{ $game->company }} </label>
        </div>

        <div class="form-group mb-2">
            <label name="rating" class="sr-only">Note des utilisateurs: {{ $game->rating }} </label>
        </div>

        <div class="form-group mb-2">
            <label name="sells" class="sr-only">Nombre de ventes: {{ $game->sells }} </label>
        </div>

        <div class="form-group mb-2">
            <label name="price" class="sr-only">Prix: {{ $game->price }} </label>
        </div>

        <a href="/acceuil"><input type="button" class="btn btn-primary mb-2" value="Ajouter au panier"></a>

    </form>

@endsection
