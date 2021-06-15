@extends('layouts.app')

@section('content')
<div class="container">
 <h2>Lista de proveedores <a href="proveedores/create"> <button type="button" class="btn btn-success float-right">Agregar proveedor</button></a> </h2> 
  <table class="table table-hover">
      <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Producto</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Acciones</th>
      </tr>
  </thead>


  </table>

</div>
@endsection

