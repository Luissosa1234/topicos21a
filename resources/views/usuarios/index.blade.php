@extends('layouts.app')

@section('content')
<div class="container p-3 rounded" style="background-color: white ">
  
 <h2>Lista de Usuarios <a href="usuarios/create"> <button type="button" style="width: 150px;" class="btn btn-outline-success float-right">Agregar usuario</button></a> </h2> 
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


    {{-- botones --}}
    <td class="row align-items-start p-1">

      
      <a href="{{ route('usuarios.show',$user->id)}}" >
        <button style="width: 100px;"  class="btn btn-outline-secondary ml-2">
          Ver
        </button>
      </a>
        

      <a href="{{ route('usuarios.edit',$user->id)}}">
        <button class="btn btn-outline-primary ml-2">
          Actualizar
        </button>
        </a>
            
      

      <form action="{{route('usuarios.destroy', $user ->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-outline-danger ml-2">Eliminar</button>
      </form>


    </td>
  </tr>
  @endforeach
</tbody>

</table>

</div>
@endsection
