<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class personController extends Controller
{
    //
    public function save(Request $request){
        $persona=new persona();
$persona->nombre=$request->nombre;
$persona->apellido=$request->apellido;
$persona->cedula=$request->cedula;
$persona->save();
return back();
    }
}
