@extends('Links/layout')

@section('content')

    <form action="{{ route('profil.modifyProfil') }}" method="post" class="form-inline">
        {{csrf_field()}}

        <div class="form-group mb-2">
            <label name="email" class="sr-only">Email: {{ $user->email }} </label>
        </div>

        <div class="form-group mb-2">
            <label name="password" class="sr-only">Mot de passe: {{ $user->password }} </label>
        </div>

        <div class="form-group mb-2">
            <label name="firstName" class="sr-only">Prénom: {{ $user->firstName }} </label>
        </div>

        <div class="form-group mb-2">
            <label name="lastName" class="sr-only">Nom: {{ $user->lastName }} </label>
        </div>

        <div class="form-group mb-2">
            <label name="adress" class="sr-only">Adresse: {{ $user->adress }} </label>
        </div>

        <a href="/modifyProfil"><input type="button" class="btn btn-primary mb-2" value="Modifier le profil"></a>

    </form>

@endsection
