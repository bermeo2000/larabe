@extends('layao.app')
@section('titulo')
	PAGINA DE EDITAR VENTA
@endsection

@section('FORULARIO')
<div class="row">

<div class="col-12 col-lg-6">
<div class="card">

<form method="post"  action=" {{url('ediventa'.$venta->id)}}  "enctype="multipart/form-data">
  @csrf
<div class="card-header">
  <h5 class="card-title mb-0">INGRSE NOMBRE</h5>
   </div>
    <div class="card-body">
     <input type="text" class="form-control" name= "nombre">
      </div>

      <div class="card-header">
     <h5 class="card-title mb-0">INGRESE PRECIO</h5>
    </div>
   <div class="card-body">
  <input type="text" class="form-control" name="precio">
 </div>

 <div class="card-header">
  <h5 class="card-title mb-0">INGRESE CANTIDAD</h5>
   </div>
    <div class="card-body">
     <input type="text" class="form-control" name="cantidad">
      </div>
				<div>
        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </div>
</form>	



@endsection