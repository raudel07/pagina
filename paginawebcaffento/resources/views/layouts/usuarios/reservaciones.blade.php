@extends('layouts.usuarios.main')
@section('contenido')
<div class="cont_res">
    <form action="/usuario/reservaciones" method="post">
        @csrf
        <div id="todo">
            <h2 id="tit_res">Hacer reservacion</h2>
            @if($message = Session::get('Listo'))
            <div class="col-12 alert alert-success alert-dismissable fade show" role="alert">
                <span>{{$message}}</span>
            </div>
            @endif
            <div class="numpersonas">
                <div id="numpersonas">
                    <h6 class="color" id="num_personas">Número de personas: </h6>
                </div>
                <div>
                    <div>
                        <h6 class="color2">
                            @if($message = Session::get('ErrorInsert'))
                            @foreach($errors->all() as $error)
                            {{$error}}
                            @endforeach
                            @endif
                        </h6>
                    </div>
                    <select id="num_personas" name="num_personas" placeholder="Numero personas" value="{{old('num_personas')}}">
                        <option disabled selected>Número personas</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                    </select>
                </div>
            </div>
            <div class="numpersonas">
                <!--<input type="hidden" name="id_usuario"> -->

                <div>
                    <input id="camp-res" type="date" name="fecha" placeholder="Fecha" value="{{old('fecha')}}" required>
                </div>
                <div>
                    <input id="camp-ress" type="time" name="hora" placeholder="Hora" max="23:00" min="09:00" value="{{old('hora')}}" required>
                </div>

            </div>
            <input class="mesaa" id="num_mesa" name="num_mesa" type="text" placeholder="Mesa" readonly value="{{old('num_mesa')}}" required>
            <a href="#modal" id="esc_mesa">Escoger mesa</a>
            <input id="motivo" type="text" name="motivo" placeholder="Motivo" value="{{old('motivo')}}" required>
            <textarea id="men_res" name="descripcion" placeholder="Escriba aqui alguna petición..." value="{{old('descripcion')}}"></textarea>
            <input type="submit" value="Enviar" id="boton_res">
        </div>
    </form>
    <div class="container-all" id="modal">
        <div class="ventana">
        
            <form class="img1">
                <h1 id="p1">Piso 1</h1>
                @foreach ($reservations as $reservation)

                @if($reservation->fecha =='fecha' && $reservation->num_mesa == 'Mesa 1')
                <div>
                    <a href="#"><input href="#" type="button" class="m1" id="mesauno" name=mesauno value="Mesa 1" onclick="mesa1();" disabled="true"></a>
                </div>
                @else
                <div>
                    <a href="#"><input href="#" type="button" class="m1" id="mesauno" name=mesauno value="Mesa 1" onclick="mesa1();" ></a>
                </div>
                @endif
                <div>
                    <a href="#"><input href="#" type="button" class="m2" id="mesados" value="Mesa 2" onclick="mesa2();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m3" id="mesatres" value="Mesa 3" onclick="mesa3();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m4" id="mesacuatro" value="Mesa 4" onclick="mesa4();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m5" id="mesacinco" value="Mesa 5" onclick="mesa5();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m6" id="mesaseis" value="Mesa 6" onclick="mesa6();"></a>
                </div>
                @endforeach
            </form>
            <div class="img2">
                <h1 id="p2">Piso 2</h1>
                <div>
                    <a href="#"><input href="#" type="button" class="m1" id="mesaveintiuno" value="Mesa 21" onclick="mesa21();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m2" id="mesaveintidos" value="Mesa 22" onclick="mesa22();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m3" id="mesaveintitres" value="Mesa 23" onclick="mesa23();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m4" id="mesaveinticuatro" value="Mesa 24" onclick="mesa24();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m5" id="mesaveinticinco" value="Mesa 25" onclick="mesa25();"></a>
                </div>
                <div>
                    <a href="#"><input href="#" type="button" class="m6" id="mesaveintiseis" value="Mesa 26" onclick="mesa26();"></a>
                </div>
            </div>
            <a href="#" class="btncerrar">X</a>
        </div>
    </div>
</div>

<script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("fecha")[0].setAttribute('min', today);

    function mesa1() {
        var valor = document.getElementById("mesauno").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa2() {
        var valor = document.getElementById("mesados").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa3() {
        var valor = document.getElementById("mesatres").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa4() {
        var valor = document.getElementById("mesacuatro").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa5() {
        var valor = document.getElementById("mesacinco").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa6() {
        var valor = document.getElementById("mesaseis").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa21() {
        var valor = document.getElementById("mesaveintiuno").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa22() {
        var valor = document.getElementById("mesaveintidos").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa23() {
        var valor = document.getElementById("mesaveintitres").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa24() {
        var valor = document.getElementById("mesaveinticuatro").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa25() {
        var valor = document.getElementById("mesaveinticinco").value;
        document.getElementById("num_mesa").value = valor;
    }

    function mesa26() {
        var valor = document.getElementById("mesaveintiseis").value;
        document.getElementById("num_mesa").value = valor;
    }
</script>

@endsection