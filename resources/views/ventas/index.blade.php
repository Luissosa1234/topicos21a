@extends('layouts.app')

@section('content')
<div class="container">
 <h2>Lista de Ventas <a href="ventas/create"> <button type="button" class="btn btn-success float-right">Agregar Venta</button></a> </h2> 
<table class="table table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Cantidad</th>
    <th scope="col">Precio</th>
    <th scope="col">Fecha</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($ventas as $venta)
  <tr>
    <th scope="row">{{$venta->id}}</th>
    <td>{{$venta->nombre}}</td>
    <td>{{$venta->cantidad}}</td>
    <td>{{$venta->precio}}</td>
    <td> {{ $venta->created_at->format('d-m-y')}}</td>
    <td>
      <a href="{{ route('ventas.show',$venta->id)}}" class="btn btn-secondary">Ver</a>

      <a href="{{ route('ventas.edit',$venta->id)}}">
        <button class="btn btn-primary ml-2">
          Actualizar
        </button>
        </a>
            
    </td>
  </tr>
  @endforeach
</tbody>

</table>



</table>

</div>
@endsection

