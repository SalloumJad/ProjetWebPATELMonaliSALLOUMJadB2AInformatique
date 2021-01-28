<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function showPage(){ // Affiche la vue du panier, vide
        return view('User/panier');
    }
}
