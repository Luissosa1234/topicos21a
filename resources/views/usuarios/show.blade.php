@extends('layouts.pLogin_registros')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>USUARIO</h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
{{-- @include('layouts/error')

    <form action="{{route("usuarios.store")}}" method="post">
        @csrf --}}
    
        <div class="form-group">
            <label for="title">Nombre</label>
            <input value="{{ $user->name}}" readonly class="form-control" type="text" name="name" id="name" >
    
            @error('title')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
    
    
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input readonly class="form-control" type="text" name="email" id="email" value="{{ $user->email}}">
        </div>

        {{-- <div class="form-group">
            <label for="content" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" value="{{ $user->name}}">
        </div> --}}
    
        <div class="container-fluid text-center">
            <a href="{{route('usuarios.index')}}">
                <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
              </a>
     
        </div>
       
        

</div>
@endsection
