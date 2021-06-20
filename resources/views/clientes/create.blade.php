@extends('layouts.pLogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>CLIENTE</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

            <form action="{{route("clientes.store")}}" method="post">
             
            @include('clientes._form')
         
           </form>


</div>
@endsection
