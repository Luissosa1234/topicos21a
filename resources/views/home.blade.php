@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header ">{{ __('PAGINA DE INICIO') }}</div>
              
                <div class="card-body display-1     ">
    <img  src="https://i.pinimg.com/originals/dc/ab/b7/dcabb7fbb2f763d680d20a3d228cc6f9.jpg" alt="picachu" class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenid@ ') }}{{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
