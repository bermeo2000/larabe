<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;


class equiController extends Controller
{
    //
public function guardar(Request $request){
        $equipo=new equipo();
        $equipo->nombre=$request->nombre;
        $equipo->imagen=$request->imagen;
        $equipo->save();
        return back();
    }

public function equip($id){
        $s=equipo::all();
        $equipo=equipo::find($id);
        return view('paginas.ediequipo', compact('s'),compact('equipo'));

    }

    public function ediequipo(Request $request, $id){
     $equipo=equipo::find($id);
     $equipo->nombre=$request->nombre;
     $equipo->imagen=$request->imagen;
     $equipo->save();
     return redirect('equipo');
    }
        
}

