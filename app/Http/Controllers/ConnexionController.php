<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function showPage(){ // Affiche la vue de la page de connexion
        return view('User/connexion');
    }

    public function connect(){  // Lance la vérification de la connexion
        request()->validate([
            'email' =>['required', 'email'],
            'password' =>['required', 'min:8'],
        ]);

        $result = auth()->attempt([
            'email' =>request('email'),
            'password' =>request('password'),
        ]);

        if($result){   
            //flash('Connction réussie!')->success();
            return redirect('/profil');
        }
    }
}
