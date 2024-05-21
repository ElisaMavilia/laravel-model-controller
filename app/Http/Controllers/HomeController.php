<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class HomeController extends Controller
{
    public function index() //va chiamato index per le best practices e svolge la stessa funzione che svolgeva la route
    {
        
        return view('home');
    }

}