@extends('layouts.pLogin_registros')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>VENTA</h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
{{-- @include('layouts/error')

    <form action="{{route("usuarios.store")}}" method="post">
        @csrf --}}
    
        <div class="form-group">
            <label for="title">Nombre</label>
            <input value="{{ $ventas->nombre}}" readonly class="form-control" type="text" name="name" id="name" >
    
            @error('title')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
    
    
        </div>


        <div class="form-group">
            <label for="correo">Cantidad</label>
            <input readonly class="form-control" type="text" name="correo" id="correo" value="{{ $ventas->cantidad}}">
        </div>


        <div class="form-group">
            <label for="telefono">Precio</label>
            <input readonly class="form-control" type="text" name="telefono" id="telefono" value="{{ $ventas->precio}}">
        </div>


        <div class="form-group">
            <label for="direccion">Fecha</label>
            <input readonly class="form-control" type="text" name="direccion" id="direccion" value="{{ $ventas->created_at->format('d-m-y')}}">
        </div>

        
        <div class="container-fluid text-center">
            <a href="{{route('ventas.index')}}">
                <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
              </a>
     
        </div>
       
   


</div>
@endsection
