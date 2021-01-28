@extends('Links/layoutAdmin')

@section('content')

    <form class="form-inline" method="post" action="{{ route('users.deleteAccount') }}">

        @foreach($users as $user)
            <ul>
                <div class="col-xs-6">
                    <label name="email" class="col-sm-2 col-form-label">{{$user->email}}</label>
                    <input type="submit" class="btn btn-primary mb-2" value="Supprimer le profil">
                </div>
            </ul>
        @endforeach
    </form>

@endsection
