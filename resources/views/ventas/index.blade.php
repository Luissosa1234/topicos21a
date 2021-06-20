@extends('layouts.app')

@section('content')
<div class="container p-3 rounded" style="background-color: white ">
 <h2>Lista de Ventas <a href="ventas/create"> <button type="button" style="width: 150px;" class="btn  btn-outline-success float-right">Agregar Venta</button></a> </h2> 
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
      

        {{-- botones --}}
    <td class="row align-items-start p-1">

      
      <a href="{{ route('ventas.show',$venta->id)}}" >
        <button class="btn btn-outline-secondary">
          Ver
        </button>
      </a>
        

      <a href="{{ route('ventas.edit',$venta->id)}}">
        <button class="btn btn-outline-primary ml-2">
          Actualizar
        </button>
        </a>


        <form action="{{route('ventas.destroy', $venta ->id)}}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-outline-danger ml-2">Eliminar</button>
        </form>
  
            
    </td>
  </tr>
  @endforeach
</tbody>

</table>



</table>

</div>
@endsection

