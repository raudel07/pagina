@extends('layouts.usuarios.main')
@section('contenido')
<form class="cont_res" action="/usuario/buzon" method="post">
@csrf
    <div id="todo">
            <h2 id="tit_res">Buzon</h2>
            @if($message = Session::get('ErrorInsert'))
                    <div class="col-12 alert alert-danger alert-dismissable fade show" role="alert">
                        <h5>Errores:</h5>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </div>
                    @endif
            @if($message = Session::get('Listo'))
            <div class="col-12 alert alert-success alert-dismissable fade show" role="alert">
                <span>{{$message}}</span>
            </div>
            @endif
            <input id="camp-res" type="text" name="titulo" value="{{old('titulo')}}" placeholder="Titulo">
            <textarea id="men_res" name="mensaje" value="{{old('mensaje')}}" placeholder="Mandanos tu opinion..."></textarea>
            <input type="submit" value="Enviar" id="boton_res">
    </div>
</form>
@endsection