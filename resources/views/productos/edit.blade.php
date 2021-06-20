@extends('layouts.pLogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>ACTUALIZAR PRODUCTO: {{ $producto->nombre}}</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

        <form action="{{route("productos.update",$producto->id)}}" method="post">
                @method('PUT')
    
         @include('productos._form')
 
        
           </form>
           <a href="{{route('productos.index')}}">
            <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
          </a>

</div>
@endsection
