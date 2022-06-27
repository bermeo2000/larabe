<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;

class ventaController extends Controller
{
    public function inde (){
        $t=venta::all();
        return view('paginas.venta', compact('t'));
        return view ('paginas.venta');
    }
}
