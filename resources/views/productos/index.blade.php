@extends('layouts.app')

@section('content')
<div class="container p-3 rounded" style="background-color: white ">
 <h2>Lista de Productos <a href="productos/create"> <button type="button" style="width: 150px;" class="btn btn-outline-success float-right">Agregar Producto</button></a> </h2> 
<table class="table table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Precio</th>
    <th scope="col">Cantidad</th>
    <th scope="col">Departamento</th>
    <th scope="col">Descripción</th>
    <th scope="col">Registro</th>
    <th scope="col">Actualizacion</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($productos as $producto)
  <tr>
    <th scope="row">{{$producto->id}}</th>
    <td>{{$producto->nombre}}</td>
    <td>{{$producto->precio}} $</td>
    <td>{{$producto->cantidad}}</td>
    <td>{{$producto->departamento}}</td>
    <td>{{$producto->descripcion}}</td>
    <td> {{ $producto->created_at->format('d-m-y')}}</td>
    <td> {{ $producto->updated_at->format('d-m-y')}}</td>


    <td class="row align-items-start p-1">
      
     


      
      <a href="{{ route('productos.show',$producto->id)}}" >
        <button class="btn btn-outline-secondary">
          Ver
        </button>
      </a>



      <a href="{{ route('productos.edit',$producto->id)}}">
        <button class="btn btn-outline-primary ml-2">
          Actualizar
        </button>
        </a>

        
        <form action="{{route('productos.destroy', $producto ->id)}}" method="post">
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