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

Route::get('/', 'App\Http\Controllers\AcceuilController@showPage');

Route::get('/acceuil', 'App\Http\Controllers\AcceuilController@showPage');

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@showPage');

Route::post('/inscription', 'App\Http\Controllers\InscriptionController@makeAccount')->name('inscription.makeAccount');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@showPage');

Route::post('/connexion', 'App\Http\Controllers\ConnexionController@connect')->name('connexion.connect');

Route::get('/profil', 'App\Http\Controllers\ProfilController@showPage');

Route::post('/profil', 'App\Http\Controllers\ConnexionController@modifyProfil')->name('profil.modifyProfil');

Route::get('/modifyProfil', 'App\Http\Controllers\ProfilController@showModifPage');

Route::post('/modifyProfil', 'App\Http\Controllers\ProfilController@confirmModif')->name('modifyProfil.confirmModif');

Route::get('/users', 'App\Http\Controllers\ProfilController@showUsers');

Route::post('/users', 'App\Http\Controllers\ProfilController@deleteAccount')->name('users.deleteAccount');

Route::get('/conseils', 'App\Http\Controllers\PostController@showPage');

Route::post('/conseils', 'App\Http\Controllers\PostController@makePost')->name('conseils.makePost');
