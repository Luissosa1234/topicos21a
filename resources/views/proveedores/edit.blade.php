@extends('layouts.pLogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>CLIENTE</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

            <form action="{{route("proveedores.update",$proveedor->id)}}" method="post">
                @method('PUT')

            @include('proveedores._form')
         
           </form>


</div>
@endsection
