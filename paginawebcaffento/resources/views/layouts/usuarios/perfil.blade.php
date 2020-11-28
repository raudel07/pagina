@extends('layouts.usuarios.main')
@section('contenido')
<form class="content">
    <div class="fondo">
        <center>
            <img src="{{asset('/users/'.Auth::user()->img)}}" class="foto_perfil" alt="">
            <div action="" class="form">
            <h4 id="nombre">{{ Auth::user()->name }} {{ Auth::user()->ap }} {{ Auth::user()->am }}</h4>
            <h4 id="telefono">{{ Auth::user()->telefono }}</h4>
            <h4 id="correo">{{ Auth::user()->email }}</h4>
</div>
        </center>
    </div>
</form>
@endsection