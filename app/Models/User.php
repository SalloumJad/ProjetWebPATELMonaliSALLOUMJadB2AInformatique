<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ // Les attributs du modèle de la base de donnée enregistrables.
        'firstName',
        'email',
        'password',
        'lastName',
        'adress',
        'birthDate',
        'money',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ // Les attributs de la base de donnée cachés, sécurisés.
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [ // Les attributs de la base de donnée enregistrés lors de l'envoi.
        'email_verified_at' => 'datetime',
    ];
}
