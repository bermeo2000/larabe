@extends('layao.app')
@section('titulo')
	PAGINA DE EDITAR EQUIPO
@endsection

@section('FORULARIO')

<div class="row justify-content-center">

<div class="col-12 col-lg-9">
<div class="card">

<form method="post"  action=" {{url('ediequipo'.$equipo->id)}} " enctype="multipart/form-data">
  @csrf
<div class="card-header">
  <h5 class="card-title mb-0">INGRESE NOMBRE DEL EQUIPO</h5>
   </div>
    <div class="card-body">
     <input type="text" class="form-control" name= "nombre">
      </div>

      <div class="card-header">
     <h5 class="card-title mb-0">INGRESE UNA IMAGEN</h5>
    </div>
   <div class="card-body">
  <input type="file" class="form-control" name="imagen">
 </div>
	<div>
        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </div>
        @endsection