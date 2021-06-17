@extends('layouts.app')

@section('content')
<div class="container">
 <h2>Lista de Proveedores <a href="usuarios/create"> <button type="button" class="btn btn-success float-right">Agregar Proveedor</button></a> </h2> 
<table class="table table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Correo</th>
    <th scope="col">Telefono</th>
    <th scope="col">Dirección</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($proveedores as $proveedor)
  <tr>
    <th scope="row">{{$proveedor->id}}</th>
    <td>{{$proveedor->nombre}}</td>
    <td>{{$proveedor->correo}}</td>
    <td>{{$proveedor->telefono}}</td>
    <td>{{$proveedor->direccion}}</td>
    <td>
      <button type="button" class="btn btn-primary">Editar</button>
      <button type="button" class="btn btn-danger">Eliminar</button>
    </td>
  </tr>
  @endforeach
</tbody>

</table>

</div>
@endsection
