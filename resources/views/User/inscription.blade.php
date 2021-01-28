@extends('Links/layout')

@section('content')

    <form action="{{ route('inscription.makeAccount') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="inputFirstName" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input name="firstName" type="text" class="form-control" id="inputFirstName" placeholder="Nom" value="{{ old('firstName') }}" >
            </div>
        </div>

        @if($errors->has('firstName'))
            <p>Nom est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputLastName" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
                <input name="lastName" type="text" class="form-control" id="inputLastName" placeholder="Prénom" value="{{ old('lastName') }}">
            </div>
        </div>

        @if($errors->has('lastName'))
            <p>Prenom est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputBirthDate" class="col-2 col-form-label">Date de naissance</label>
            <div class="col-10">
                <input name="birthDate" class="form-control" type="date" id="inputBirthDate" value="{{ old('birthDate') }}">
            </div>
        </div>

        @if($errors->has('birthDate'))
            <p>Age est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="email@email.com" value="{{ old('email') }}">
            </div>
        </div>

        @if($errors->has('email'))
            <p>Email est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
            </div>
        </div>

        @if($errors->has('password'))
            <p>Le Mot de passe est obligatoire!</p>
        @endif

        <div class="form-group row">
            <label for="inputAdress" class="col-sm-2 col-form-label">Adresse</label>
            <div class="col-sm-10">
                <input name="adress" type="text" class="form-control" id="inputAdress" placeholder="# du [rue] à [ville], [code postal]" value="{{ old('adress') }}">
            </div>
        </div>

        @if($errors->has('adress'))
            <p>Adresse est obligatoire!</p>
        @endif

        <input type="submit" value="Créer un compte" class="btn btn-primary mb-2">
    </form>

@endsection
