@extends('layouts.pLogin_registros')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>PRODUCTO</h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
{{-- @include('layouts/error')

    <form action="{{route("usuarios.store")}}" method="post">
        @csrf --}}
    
        <div class="form-group">
            <label for="title">Nombre</label>
            <input value="{{ $producto->nombre}}" readonly class="form-control" type="text" name="name" id="name" >
    
            @error('title')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
    
    
        </div>


        <div class="form-group">
            <label for="precio">Precio</label>
            <input readonly class="form-control" type="text" name="precio" id="precio" value="{{ $producto->precio}}">
        </div>


        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input readonly class="form-control" type="text" name="cantidad" id="cantidad" value="{{ $producto->cantidad}}">
        </div>


        <div class="form-group">
            <label for="departamento">Departamento</label>
            <input readonly class="form-control" type="text" name="departamento" id="departamento" value="{{ $producto->departamento}}">
        </div>

        <div class="form-group">
            <label for="descrpcion">Descripcion</label>
            <input readonly class="form-control" type="text" name="descrpcion" id="descrpcion" value="{{ $producto->descripcion}}">
        </div>

        <div class="form-group">
            <label for="fecha">Fecha de ingreso</label>
            <input readonly class="form-control" type="text" name="fecha" id="fecha" value="{{ $producto->created_at->format('d-m-y')}}">
        </div>

        <div class="form-group">
            <label for="actualizacion">Fecha Actualizacion</label>
            <input readonly class="form-control" type="text" name="actualizacion" id="actualizacion" value="{{ $producto->updated_at->format('d-m-y')}}">
        </div>

        <div class="container-fluid text-center">
            <a href="{{route('productos.index')}}">
                <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
              </a>
     
        </div>
       
    {{-- </form> --}}


</div>
@endsection
