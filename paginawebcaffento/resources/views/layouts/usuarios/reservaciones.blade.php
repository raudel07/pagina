@extends('layouts.usuarios.main')
@section('contenido')
<form class="cont_res" action="">
    <div id="todo">
            <h2 id="tit_res">Hacer reservacion</h2>
            <input id="mesa" type="text" name="mesa" placeholder="Mesa">
            <a href="#modal" id="esc_mesa" >Escojer mesa</a>
            <input id="num_personas" type="number" name="num_personas" placeholder="Numero de personas">
            <input id="camp-res" type="date" name="fecha" placeholder="Fecha">
            <input id="camp-ress" type="time" name="hora" placeholder="Hora">
            <input id="motivo" type="text" name="motivo" placeholder="Motivo">
            <textarea id="men_res" name="mensaje" placeholder="Escriba aqui alguna petición..."></textarea>
            <input type="button" value="Enviar" id="boton_res">
    </div>
    <div class="container-all" id="modal">
        <div class="ventana">
            <div class="img"></div>
            <div class="container-text">
                <h1>Ingredientes</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <a href="#" class="btncerrar">X</a>
        </div>
    </div>
</form>
@endsection