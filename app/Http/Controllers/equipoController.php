<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;

class equipoController extends Controller
{
    //
  
    public function indexe (){
        $s=equipo::all();
        return view('paginas.equipo', compact('s'));
        return view ('paginas.equipo');
      
    }
}
