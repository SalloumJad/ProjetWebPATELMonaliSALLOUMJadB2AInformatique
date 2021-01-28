<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class ProfilController extends Controller
{
    public function showPage(){
        $user = User::all()->where('id', auth()->user()->id)->first();
        return view('User/profil',['user' => $user]);
    }

    public function modifyProfil(){
        $user = User::all()->where('id', auth()->user()->id)->first();
        return view('User/modifyProfil',['user' => $user]);
    }

    public function showModifPage(){
        $user = User::all()->where('id', auth()->user()->id)->first();
        return view('User/modifyProfil',['user' => $user]);
    }

    public function confirmModif(){
        $user = User::all()->where('id', auth()->user()->id)->first();
        $user->firstName = request('firstName');
        $user->lastName = request('lastName');
        $user->email = request('email');
        $user->birthDate = request('birthDate');
        $user->password = bcrypt(request('password'));
        $user->adress = request('adress');
        $user->save();

        $user = User::all()->where('id', auth()->user()->id)->first();
        return view('User/profil',['user' => $user]);
    }

    public function showUsers(){
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('User/users',['users' => $users]);
    }

    public function deleteAccount(int $id){
        User::all()->where('id', $id)->delete();

        $users = User::all();
        return view('User/users',['users' => $users]);
    }
}
