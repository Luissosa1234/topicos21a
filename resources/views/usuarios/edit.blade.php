@extends('layouts.pLogin_registros')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>EDITAR USUARIO: {{ $user->name}}</h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
@include('layouts/error')

<div class="container-fluid text-center">
<form action="{{route("usuarios.update",$user->id)}}" method="post">
   @method('PUT')
   @include('usuarios._form')
</form>

<a href="{{route('usuarios.index')}}">
    <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
  </a>
</div>

</div>
@endsection
