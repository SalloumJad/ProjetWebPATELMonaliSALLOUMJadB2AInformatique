<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Admin as Admin;
use App\Models\Game as Game;

class AdminController extends Controller    // Regroupe toutes les fonctions en rapport avec la vue administrateur.
{
    public function showPage(){             // Ouvre la vue de connexion
        return view('Admin/connexionAdmin');
    }

    public function connect(){  // Enclenche la vérification de connection dans la vue connexion de Admin
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
            return redirect('/news');
        }
    }

    public function showNews(){ // Ouvre la vue du newsboard
        return view('Admin/news');
    }

    public function showUsers(){    // Ouvre la vue des users et envoie à la vue la liste de tous les utilisateurs
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('Admin/users',['users' => $users]);
    }

    public function showGames(){    // Ouvre la vue des jeux et envoie à la vue la liste de tous les jeux
        $games = Game::orderBy('created_at', 'DESC')->get();
        return view('Admin/games',['games' => $games]);
    }

    public function addGame(){  // Fonction qui ajoute le jeu entré dans le form à la base de données.
        request()->validate([
            'title' =>['required'],
            'price' =>['required'],
            'company' =>['required'],
            'image' =>['required'],
            'key' =>['required'],
        ]);

        $game = Game::create([
            'title' =>request('title'),
            'price' =>request('price'),
            'company' =>request('company'),
            'image' =>request('image'),
            'key' =>request('key'),
        ]);
        
        $games = Game::orderBy('created_at', 'DESC')->get();
        return view('Admin/games',['games' => $games]);
    }

    public function showGame(int $id){  // Affiche la vue du jeu losque l'administrateur clique sur l'image correspondante
        $game = Game::all()->where('id', $id)->first();
        return view('Admin/gameAdmin', ['game' => $game])->with('id', $game->id);
    }

    public function modifyGame(){   // Fonction qui modifie les données du jeu sélectionné avec les données entrées dans le form
        $id = $_GET['id'];

        $game = Game::all()->where('id', $id)->first();
        $game->title = request('title');
        $game->price = request('price');
        $game->company = request('company');
        $game->image = request('image');
        $game->key = request('key');
        $game->save();

        $game = Game::all()->where('id', $id)->first();
        return view('Admin/games',['games' => $games]);
    }
}
