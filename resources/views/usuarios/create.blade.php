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
        @csrf
    
        <div class="form-group">
            <label for="title">Nombre</label>
            <input class="form-control" type="text" name="name" id="name">
    
            @error('title')
            <small class="text-danger">{{ $message }}</small>    
            @enderror
    
    
        </div>
        <div class="form-group">
            <label for="url_clean">Correo</label>
            <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
        </div>
    
    
    
        <input type="submit" value="Enviar">
    </form>


</div>
@endsection
