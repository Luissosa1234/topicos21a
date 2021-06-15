@extends('layouts.app')

@section('content')
<div class="container">
 <h2>Lista de Productos <a href="productos/create"> <button type="button" class="btn btn-success float-right">Agregar producto</button></a> </h2> 
<table class="table table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Proveedor</th>
    <th scope="col">Precio unitario</th>
    <th scope="col">Disponibilidad</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>


</table>

</div>
@endsection

