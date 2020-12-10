@extends('layouts.usuarios.main')
@section('contenido')
<form class="cont_res" action="">
    <div id="todo">
            <h2 id="tit_res">Envianos tu orden</h2>
            <input id="mesa-res" type="text" name="mesa" placeholder="prodcutos">
            <a href="#modal" id="esc_mesa" >Escoger producto</a>
            <input id="camp-res" type="text" name="direccion" placeholder="Direccion">
            <textarea id="men_res" name="mensaje" placeholder="Escribe algua referencia de tu domicilio..."></textarea>
            <input type="button" value="Enviar" id="boton_res">
    </div>
</form>
@endsection