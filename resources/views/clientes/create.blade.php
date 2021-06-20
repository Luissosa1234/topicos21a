@extends('layouts.plogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>AGREGAR CLIENTE</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

            <form action="{{route("clientes.store")}}" method="post">
             
            @include('clientes._form')
         
           </form>

           <a href="{{route('clientes.index')}}">
            <button class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
          </a>
          
</div>
@endsection
