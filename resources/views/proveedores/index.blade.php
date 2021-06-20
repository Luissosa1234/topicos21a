@extends('layouts.app')

@section('content')
<div class="container">
 <h2>Lista de Proveedores <a href="proveedores/create"> <button type="button" class="btn btn-success float-right">Agregar Proveedor</button></a> </h2> 
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
    
     

      <td class="row align-items-start p-1">

      
        <a href="{{ route('proveedores.show',$proveedor->id)}}" >
          <button class="btn btn-secondary">
            Ver
          </button>
        </a>



      <a href="{{ route('proveedores.edit',$proveedor->id)}}">
        <button class="btn btn-primary ml-2">
          Actualizar
        </button>
        </a>


        <form action="{{route('proveedores.destroy', $proveedor ->id)}}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger ml-2">Eliminar</button>
        </form>
  
    </td>
  </tr>
  @endforeach
</tbody>

</table>

</div>
@endsection
