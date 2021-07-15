<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SalutController extends Controller
{
    public function salut(){
        return view('salut');
    }
    public function name($nom,$age){
        return view('name',['nom'=> $nom, 'age' => $age]);
    }
}
