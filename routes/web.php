<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([  // Séparation des routes avec un groupe middleware, afin de limiter l'accès aux pages sans être connecté
    'middleware'=>'App\Http\Middleware\Auth',
], function(){
    Route::get('/profil', 'App\Http\Controllers\ProfilController@showPage');

    Route::post('/profil', 'App\Http\Controllers\ConnexionController@modifyProfil')->name('profil.modifyProfil');

    Route::get('/modifyProfil', 'App\Http\Controllers\ProfilController@showModifPage');

    Route::post('/modifyProfil', 'App\Http\Controllers\ProfilController@confirmModif')->name('modifyProfil.confirmModif');

    Route::get('/users', 'App\Http\Controllers\AdminController@showUsers');

    Route::post('/users', 'App\Http\Controllers\ProfilController@deleteAccount')->name('users.deleteAccount');

    Route::get('/panier', 'App\Http\Controllers\PanierController@showPage');
});

// Routes menant vers des vues User

Route::get('/', 'App\Http\Controllers\GameController@showPage');

Route::get('/acceuil', 'App\Http\Controllers\AcceuilController@showPage');

Route::post('/acceuil', 'App\Http\Controllers\GameController@showGame')->name('game.showGame');

Route::get('/game/{id}', 'App\Http\Controllers\GameController@showGame');

Route::post('/game/{id}', 'App\Http\Controllers\GameController@addGameToCart')->name('game.addGameToCart');

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@showPage');

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@makeAccount')->name('inscription.makeAccount');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@showPage');

Route::post('/connexion', 'App\Http\Controllers\ConnexionController@connect')->name('connexion.connect');

Route::get('/conseils', 'App\Http\Controllers\PostController@showPage');

Route::post('/conseils', 'App\Http\Controllers\PostController@makePost')->name('conseils.makePost');

// Routes menant vers des vues Admin

Route::get('/connexionAdmin', 'App\Http\Controllers\AdminController@showPage');

Route::post('/connexionAdmin', 'App\Http\Controllers\AdminController@connect')->name('connexionAdmin.connect');

Route::get('/news', 'App\Http\Controllers\AdminController@showNews');

Route::get('/games', 'App\Http\Controllers\AdminController@showGames');

Route::post('/games', 'App\Http\Controllers\AdminController@addGame')->name('games.addGame');

Route::get('/game/{id}', 'App\Http\Controllers\AdminController@showGame')->name('gameAdmin.showGame');

Route::post('/game/{id}', 'App\Http\Controllers\AdminController@modifyGame')->name('gameAdmin.modifyGame');
