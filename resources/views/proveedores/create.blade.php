@extends('layouts.pLogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>Proveedores</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

            <form action="{{route("proveedores.store")}}" method="post">
             @csrf
    
          <div class="form-group">
            <label for="nombre">Nombre</label>
          <input class="form-control" type="text" name="nombre" id="nombre">
          </div>

          <div class="form-group">
            <label for="correo">Correo</label>
          <input class="form-control" type="text" name="correo" id="correo">
          </div>

          <div class="form-group">
            <label for="telefono">Telefono</label>
          <input class="form-control" type="text" name="telefono" id="telefono">
          </div>

          <div class="form-group">
            <label for="direccion">Direccion</label>
          <input class="form-control" type="text" name="direccion" id="direccion">
          </div>
   
        
    
          <input type="submit" value="Enviar">
           </form>


</div>
@endsection
