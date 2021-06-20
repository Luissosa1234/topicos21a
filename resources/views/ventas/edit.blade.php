@extends('layouts.pLogin_registros')





@section('content')

   <div class="container">

    <div class="container-fluid text-center ">
      
       
       <h1>ACTUALIZAR VENTA: {{ $venta->name}}  </h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

             <form action="{{route("ventas.update",$venta->id)}}" method="post">
                @method('PUT')
            
              @include('ventas._form')
          

               
           </form>
           <a href="{{route('ventas.index')}}">
            <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
          </a>
     
        </div>
      
</div>
@endsection
