<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game as Game;

class GameController extends Controller
{
    public function showGame(int $id){  // Affiche la page du jeu lorsque l'utilisateur clique sur son image dans l'acceuil
        $game = Game::all()->where('id', $id)->first();
        return view('User/game', ['game' => $game])->with('id', $game->id);
    }

    public function addGameToCart(){    // Renvoie à la page précédente par manque d'ajout au panier
        $games = Game::orderBy('created_at', 'DESC')->get();
        return view('User/acceuil',['games' => $games]);
    }
}
