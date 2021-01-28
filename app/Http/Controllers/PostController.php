<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class PostController extends Controller
{
    public function showPage(){
        return view('User/conseils', auth()->user()->posts());
    }

    public function makePost(){
        
        request()->validate([
            'title' => ['required'],
            'description' =>['required'],
            'image' => ['required'],
            'price' => ['required'],
            'gameName' => ['required'],
        ]);

      
        auth()->user()->posts()->create([
            'title' => request('title'),
            'description'=>request('description'),
            'image' => request('image'),
            'price' => request('price'),
            'gameName' => request('gameName'),
        ]);


        return view('User/conseils', auth()->user()->posts());
    }
}
