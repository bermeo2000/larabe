<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class personController extends Controller
{
    //
    public function guardar(Request $request){
        $persona=new persona();
$persona->nombre=$request->nombre;
$persona->apellido=$request->apellido;
$persona->cedula=$request->cedula;
$persona->save();
return back();
    }

    public function personal($id){
        $r=persona::all();
        $persona=persona::find($id);
        return view('paginas.edipersona', compact('r'),compact('persona'));

    }



    public function edipersona(Request $request, $id){
     $persona=persona::find($id);
     $persona->nombre=$request->nombre;
     $persona->apellido=$request->apellido;
     $persona->cedula=$request->cedula;
     $persona->save();
     return redirect('persona');
}

}
