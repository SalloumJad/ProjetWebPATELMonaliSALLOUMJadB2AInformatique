<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class ProfilController extends Controller   // Gère toutes les fonctions liées au profil utilisateur
{
    public function showPage(){ // Affiche la page du profil de l'utilisateur d'il est connecté
        $user = User::all()->where('id', auth()->user()->id)->first();
        return view('User/profil',['user' => $user]);
    }

    public function modifyProfil(){ // S'enclenche lorsque l'utilisateur clique sur le boutton du même nom
        $user = User::all()->where('id', auth()->user()->id)->first();
        return view('User/modifyProfil',['user' => $user]);
    }

    public function showModifPage(){ // Affiche la mage de modification de profil après la fonction du dessus
        $user = User::all()->where('id', auth()->user()->id)->first();
        return view('User/modifyProfil',['user' => $user]);
    }

    public function confirmModif(){ // Lance la vérification des données afin de modifier les informations de l'utilisateur
        $user = User::all()->where('id', auth()->user()->id)->first();
        $user->firstName = request('firstName');
        $user->lastName = request('lastName');
        $user->email = request('email');
        $user->birthDate = request('birthDate');
        $user->password = bcrypt(request('password'));
        $user->adress = request('adress');
        $user->money = request('money');
        $user->save();

        $user = User::all()->where('id', auth()->user()->id)->first();
        return view('User/profil',['user' => $user]);
    }
}
