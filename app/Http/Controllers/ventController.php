<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;

class ventController extends Controller
{
    public function guardar(Request $request){
        $venta=new venta();
$venta->nombre=$request->nombre;
$venta->precio=$request->precio;
$venta->cantidad=$request->cantidad;
$venta->save();
return back();
    }

    public function vent($id){
        $t=venta::all();
        $venta=venta::find($id);
        return view('paginas.ediventa', compact('t'),compact('venta'));

    }



    public function ediventa(Request $request, $id){
     $venta=venta::find($id);
     $venta->nombre=$request->nombre;
     $venta->precio=$request->precio;
     $venta->cantidad=$request->cantidad;
     $venta->save();
     return redirect('venta');
}
}
