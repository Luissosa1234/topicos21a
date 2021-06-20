@extends('layouts.app')

@section('content')
<div class="container">
  
 <h2>Lista de Usuarios <a href="usuarios/create"> <button type="button" class="btn btn-success float-right">Agregar usuario</button></a> </h2> 
<table class="table table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Correo</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($users as $user)
  <tr>
    <th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>
      <a href="{{ route('usuarios.show',$user->id)}}" class="btn btn-primary">Ver</a>
      <a href="{{ route('usuarios.edit',$user->id)}}" class="btn btn-primary">Actualizar</a>
    </td>
  </tr>
  @endforeach
</tbody>

</table>

</div>
@endsection
