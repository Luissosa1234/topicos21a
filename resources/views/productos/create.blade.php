@extends('layouts.plogin_registros')






@section('content')

<div class="container">

    <div class="container-fluid text-center">
        <h1>Ventas</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

          <form action="{{route("productos.store")}}" method="post">
             @csrf
    
          
         @include('productos._form')

       
        
             <input type="submit" value="Enviar">
          <input type="submit" value="Enviar">
           </form>


</div>
@endsection
