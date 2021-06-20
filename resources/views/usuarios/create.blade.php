@extends('layouts.pLogin_registros')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>USUARIOS</h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
@include('layouts/error')

<form action="{{route("usuarios.store")}}" method="post">
    
   @include('usuarios._form')
</form>

</div>
@endsection
