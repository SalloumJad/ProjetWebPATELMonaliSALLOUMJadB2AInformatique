@extends('Links/layout')

@section('content')

    <form class="form-inline" method="post" action="{{ route('modifyProfil.confirmModif') }}">
        {{csrf_field()}}

        <div class="form-group row">
            <label for="inputFirstName" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">             <!-- Ici, les label utilisent de nouveau les informations du user afin qu'il se rappelle quels étaient ses informations  -->
                <input type="text" name="firstName" class="form-control" id="inputFirstName" placeholder="{{$user->firstName}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputLastName" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
                <input type="text" name="lastName" class="form-control" id="inputLastName" placeholder="{{$user->lastName}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputBirthDate" class="col-sm-2 col-form-label">Date de naissance</label>
            <div class="col-sm-10">
                <input type="date" name="birthDate" class="form-control" id="inputLastName" placeholder="{{$user->birthDate}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="{{$user->email}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputAdress" class="col-sm-2 col-form-label">Adresse</label>
            <div class="col-sm-10">
                <input type="text" name="adress" class="form-control" id="inputAdress" placeholder="{{$user->adress}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputMoney" class="col-sm-2 col-form-label">Money</label>
            <div class="col-sm-10">
                <input type="text" name="money" class="form-control" id="inputMoney" placeholder="{{$user->money}}">
            </div>
        </div>

        <input type="submit" class="btn btn-primary mb-2" value="Confirmer le changement">

    </form>

@endsection
