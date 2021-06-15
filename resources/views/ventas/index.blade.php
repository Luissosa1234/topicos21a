@extends('layouts.app')

@section('content')
<div class="container">
 <h2>Lista de ventas <a href="ventas/create"> <button type="button" class="btn btn-success float-right">Agregar proveedor</button></a> </h2> 
<table class="table table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Fecha</th>
    <th scope="col">productos</th>
    <th scope="col">Folio de compra</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>


</table>

</div>
@endsection

