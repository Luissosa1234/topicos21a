@extends('layouts.app')

@section('content')
<div class="container">
 <h2>Lista de Productos <a href="productos/create"> <button type="button" class="btn btn-success float-right">Agregar Producto</button></a> </h2> 
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
    <td>
      
      <a href="{{ route('productos.show',$producto->id)}}" class="btn btn-secondary">Ver</a>

      <a href="{{ route('productos.edit',$producto->id)}}">
        <button class="btn btn-primary ml-2">
          Actualizar
        </button>
        </a>


    </td>
    </tr>
     @endforeach
     </tbody>
    </table>
 </div>

@endsection