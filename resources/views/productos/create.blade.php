@extends('layouts.plogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>AGREGAR PRODUCTO</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

          <form action="{{route("productos.store")}}" method="post">
             @csrf
    
          
         @include('productos._form')

           </form>
           <a href="{{route('productos.index')}}">
            <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
          </a>

</div>
@endsection
