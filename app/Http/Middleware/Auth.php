<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     // Empêche l'accès aux pages mises dans la section middleware de web.php d'être accédées par un utilisateur ou admin non connecté.


    public function handle(Request $request, Closure $next) // Limite l'accès aux routes mises dans le groupe middleware de web.php
    {
        if(auth()->guest()){
            //flash("Vous devez être connecté afin d'accéder à cette page")->error();
            return redirect('/connexion');
        }
        return $next($request);
    }
    
}
