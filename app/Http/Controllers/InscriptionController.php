<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class InscriptionController extends Controller
{
    public function showPage(){ // Affiche la page d'inscription
        return view('User/inscription');
    }
    
    public function makeAccount(){  // Vérifie l'entrée des données et les enregistres dans la base de données sqlite.
        request()->validate([
            'firstName' =>['required'],
            'lastName' =>['required'],
            'birthDate' =>['required'],
            'email' =>['required', 'email'],
            'password' =>['required', 'min:8'],
            'adress' =>['required'],
            'money' =>['required'],
        ]);

        $user = User::create([
            'firstName' =>request('firstName'),
            'lastName' =>request('lastName'),
            'birthDate' =>request('birthDate'),
            'email' =>request('email'),
            'password' =>bcrypt(request('password')),
            'adress' =>request('adress'),
            'money' =>request('money'),
        ]);

        //Mail::to($user->email)->send(new Register());

        return view('User/acceuil');
    }
}
