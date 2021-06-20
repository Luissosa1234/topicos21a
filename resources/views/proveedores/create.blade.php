@extends('layouts.pLogin_registros')







@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>AGREGAR CLIENTE</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

            <form action="{{route("proveedores.store")}}" method="post">
             
            @include('proveedores._form')
         
           </form>

           <a href="{{route('proveedores.index')}}">
            <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
          </a>
</div>
@endsection