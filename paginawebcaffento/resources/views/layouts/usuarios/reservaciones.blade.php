@extends('layouts.usuarios.main')
@section('contenido')
<div class="cont_res">
    <form action="/usuario/reservaciones" method="post">
        <div id="todo">
            <h2 id="tit_res">Hacer reservacion</h2>
            <input id="mesaa" id="num_mesa" type="text" name="numeromesa" placeholder="Mesa" value="">
            <a href="#modal" id="esc_mesa">Escoger mesa</a>
            <input id="num_personas" type="number" name="num_personas" placeholder="Numero de personas" value="{{old('num_personas')}}">
            <input id="camp-res" type="date" name="fecha" placeholder="Fecha" value="{{old('fecha')}}">
            <input id="camp-ress" type="time" name="hora" placeholder="Hora" value="{{old('hora')}}">
            <input id="motivo" type="text" name="motivo" placeholder="Motivo" value="{{old('motivo')}}">
            <textarea id="men_res" name="mensaje" placeholder="Escriba aqui alguna petición..." value="{{old('mensaje')}}"></textarea>
            <input type="submit" value="Enviar" id="boton_res">
        </div>
    </form>
    <div class="container-all" id="modal">
        <div class="ventana">
            <div class="img1">
                <h1 id="p1">Piso 1</h1>
                <button type="submit" class="m1" name="mesa" value="1">Mesa 1</button>
                <button class="m2" name="mesa" value="2">Mesa 2</button>
                <button class="m3" name="mesa" value="3">Mesa 3</button>
                <button class="m4" name="mesa" value="4">Mesa 4</button>

                <button class="m5" id="mesa" value="5">Mesa 5</button>
                <button class="m6" name="mesa" value="6">Mesa 6</button>
            </div>
            <div class="img2">
                <h1 id="p2">Piso 2</h1>
            </div>
            <a href="#" class="btncerrar">X</a>
        </div>
    </div>
</div>
<script>
var boton = document.getElementById('mesa');
var resultado = document.getElementById('num_mesa');

   boton.onclick = function(e){
     resultado.value +=  this.value;
}
</script>

@endsection