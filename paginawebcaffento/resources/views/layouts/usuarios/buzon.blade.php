@extends('layouts.usuarios.main')
@section('contenido')
<form class="cont_res" action="">
    <div id="todo">
            <h2 id="tit_res">Buzon</h2>
            <input id="camp-res" type="text" name="titulo" placeholder="Titulo">
            <textarea id="men_res" name="mensaje" placeholder="Escribenos alguna queja, aclaracion o felicitacion..."></textarea>
            <input type="button" value="Enviar" id="boton_res">
    </div>
</form>
@endsection