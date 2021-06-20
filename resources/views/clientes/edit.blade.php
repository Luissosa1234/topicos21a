@extends('layouts.pLogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>EDITAR CLIENTE: {{ $cliente->nombre}}</h1>
        @include('layouts.session')
        
       

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

            <form action="{{route("clientes.update",$cliente->id)}}" method="post">
                @method('PUT')

             @include('clientes._form')

           </form>

           <a href="{{route('clientes.index')}}">
            <button class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
          </a>
    </div>

</div>
@endsection
