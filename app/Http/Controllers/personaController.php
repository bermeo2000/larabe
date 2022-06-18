<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personaController extends Controller
{
    //
    public function index (){

        return view ('paginas.persona');
    }
}
