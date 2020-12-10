@extends('layouts.usuarios.main')
@section('contenido')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6  img ">
                <img src="{{asset('/users/'.Auth::user()->img)}}" alt="" class="img-rounded foto_perfil">
               
                <div class="details" >
                <blockquote>
                    <h5>{{ Auth::user()->name }} {{ Auth::user()->ap }} {{ Auth::user()->am }}</h5>
                </blockquote>
                <p>
                    Correo: {{ Auth::user()->email }} <br>
                    <br>
                    Telefono: {{ Auth::user()->telefono }}<br>
                </p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection