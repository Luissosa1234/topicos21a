@extends('layouts.app')

@section('content')
<div class="container">

  <h2>Lista de Clientes <a href="clientes/create"> <button type="button" class="btn btn-success float-right">Agregar Cliente</button></a> </h2> 
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
@foreach ($clientes as $cliente)
  <tr>
    <th scope="row">{{$cliente->id}}</th>
    <td>{{$cliente->nombre}}</td>
    <td>{{$cliente->correo}}</td>
    <td>{{$cliente->telefono}}</td>
    <td>{{$cliente->direccion}}</td>
    <td>
      <td>
        <a href="{{ route('clientes.show',$cliente->id)}}" class="btn btn-primary">Ver</a>
        {{-- <a href="{{ route('usuarios.edit',$user->id)}}" class="btn btn-primary">Actualizar</a> --}}
      </td>
    </td>
  </tr>
  @endforeach
</tbody>

</table>
@endsection