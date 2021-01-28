<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game as Game;

class AcceuilController extends Controller
{
    public function showPage(){ // Fonction qui affiche la vue acceuil lorsque un utilisateur entre dans le site ou accède à la page depuis le header
        $games = Game::orderBy('created_at', 'DESC')->get();
        return view('User/acceuil',['games' => $games]);
    }
}
