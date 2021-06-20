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
    


    {{-- BOTONES --}}
      <td class="row align-items-start p-1">
        
        

        <a href="{{ route('clientes.show',$cliente->id)}}" >
          <button class="btn btn-secondary">
            Ver
          </button>
        </a>

        <a href="{{ route('clientes.edit',$cliente->id)}}">
          <button class="btn btn-primary ml-2">
            Actualizar
          </button>
          </a>

          <form action="{{route('clientes.destroy', $cliente ->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger ml-2">Eliminar</button>
          </form>
    
      </td>
    </td>
  </tr>
  @endforeach
</tbody>

</table>
@endsection