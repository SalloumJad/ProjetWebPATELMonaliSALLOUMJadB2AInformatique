<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function showPage(){
        return view('User/connexion');
    }

    public function connect(){
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
