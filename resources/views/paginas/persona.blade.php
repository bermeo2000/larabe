@extends('layao.app')
@section('titulo')
	PAGINA PERSONA
@endsection

@section('FORULARIO')
<div class="row">

<div class="col-12 col-lg-9">
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

<main class="content">
	<div class="container-fluid">

		<div class="header">
		
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">LISTADO DE DATOS GUARDADAS</h5>
				
					</div>
					<div class="card-body">
						<table id="datatables-buttons" class="table table-striped border border-info" style="width:100%">
							<thead>
								<tr>
									<th>NOMBRE</th>
									<th>APELLIDO</th>
                  <th> CEDULA</th>
									<th>ACCIONES</th>
								
								</tr>
							</thead>
							<tbody>
		
                @foreach ($r as  $item)
                <tr>
                  <td>{{$item->nombre}}</td>
                  <td>{{$item->apellido}}</td>
                  <td>{{$item->cedula}}</td>
                  <td><a href={{url('personal'.$item->id)}}><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                    <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                  </td>
                
                </tr>
              @endforeach
						
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>
@endsection


