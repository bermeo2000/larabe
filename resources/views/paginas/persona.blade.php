@extends('layao.app')
@section('titulo')
	PAGINA PERSONA
@endsection

@section('FORULARIO')
<div class="row">

<div class="col-12 col-lg-6">
<div class="card">

<form method="post"  action=" {{url('personas/store')}} ">
  @csrf
<div class="card-header">
  <h5 class="card-title mb-0">INGRSE SUS MOMBRES</h5>
   </div>
    <div class="card-body">
     <input type="text" class="form-control" name= "nombre">
      </div>

      <div class="card-header">
     <h5 class="card-title mb-0">INGRESE SUS APELLIDOS</h5>
    </div>
   <div class="card-body">
  <input type="text" class="form-control" name="apellido">
 </div>

 <div class="card-header">
  <h5 class="card-title mb-0">INGRESE CEDULA</h5>
   </div>
    <div class="card-body">
     <input type="text" class="form-control" name="cedula">
      </div>
				<div>
        <button type="submit" class="btn btn-primary">GUARDA TU INFORMACIÒN</button>
        </div>
</form>		
@endsection