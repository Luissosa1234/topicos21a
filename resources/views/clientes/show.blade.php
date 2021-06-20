@extends('layouts.pLogin_registros')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>CLIENTE </h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
{{-- @include('layouts/error')

    <form action="{{route("usuarios.store")}}" method="post">
        @csrf --}}
         
        
       
        <div class="form-group">
            <label for="title">Nombre</label>
            <input value="{{ $cliente->nombre}}" readonly class="form-control" type="text" name="name" id="name" >
    
            @error('title')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
    
    
        </div>


        <div class="form-group">
            <label for="correo">Correo</label>
            <input readonly class="form-control" type="text" name="correo" id="correo" value="{{ $cliente->correo}}">
        </div>


        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input readonly class="form-control" type="text" name="telefono" id="telefono" value="{{ $cliente->telefono}}">
        </div>


        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input readonly class="form-control" type="text" name="direccion" id="direccion" value="{{ $cliente->direccion}}">
        </div>

        
    
    
        <a href="{{route('clientes.index')}}">
            <button class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
          </a>
    {{-- </form> --}}


</div>
@endsection
