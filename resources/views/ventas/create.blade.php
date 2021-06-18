@extends('layouts.pLogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>Ventas</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

            <form action="{{route("ventas.store")}}" method="post">
             @csrf
    
          <div class="form-group">
            <label for="nombre">Producto</label>
          <input class="form-control" type="text" name="nombre" id="nombre">
          </div>

          <div class="form-group">
            <label for="cantidad">Cantidad</label>
          <input class="form-control" type="text" name="cantidad" id="cantidad">
          </div>

          <div class="form-group">
            <label for="precio">Precio</label>
          <input class="form-control" type="text" name="precio" id="precio">
          </div>

       
        
    
          <input type="submit" value="Enviar">
           </form>


</div>
@endsection
