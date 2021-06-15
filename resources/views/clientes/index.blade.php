@extends('layouts.app')

@section('content')
<div class="container">
 <h2>Lista de Clientes <a href="clientes/create"> <button type="button" class="btn btn-success float-right">Agregar cliente</button></a> </h2> 
<table class="table table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Correo</th>
    <th scope="col">Edad</th>
    <th scope="col">sexo</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>


</table>

</div>
@endsection
