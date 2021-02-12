<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site extends Controller
{
    public function home(){
        return view('home');
    }
    public function contato(){
        return view('contato');
    }
    public function cidades(){
        return view('cidades');
    }
    public function links(){
        return view('links');
    }
    public function sobre(){
        return view('sobre');
    }
}
