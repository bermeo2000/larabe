<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class personaController extends Controller
{
    //
    public function index (){
        $r=persona::all();
        return view('paginas.persona', compact('r'));
        return view ('paginas.persona');
    }
}
