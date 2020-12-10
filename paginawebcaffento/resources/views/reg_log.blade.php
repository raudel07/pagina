<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_log_reg.css">
    <title>Login/Registro</title>
</head>

<body>

    <div class="container">
        <div class="form-box">
            <div class="button-box">
                <div id="elegir"></div>
                <button type="button" class="toggle-btn" onclick="login()">Iniciar Sesion</button>
                <button type="button" class="toggle-btn" onclick="registrar()">Registrarte</button>
            </div>
            <form id="login" class="input-group" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="errores">
                    @if($message = Session::get('Listo'))
                    <div class="col-12 alert alert-success alert-dismissiable fade show" role="alert">
                        <h5>Mensaje:</h5>
                        <span>{{$message}}</span>
                    </div>
                    @endif
                </div>
                <img id="logologin" src="../img/logo.jpg" width="150px" height="70px" alt="">
                <!--Email-->
                <input class="input-field"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input class="input-field" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Contraseña">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <button type="submit" class="submit-btn" id="acceder">Acceder</button>
            </form>

            <form action="/admin/usuarios" method="post" id="registrar" class="input-group">
                @csrf
                <div class="errores">
                    @if($message = Session::get('ErrorInsert'))
                    <div class="col-12 alert alert-danger alert-dismissiable fade show" role="alert">
                        <h5>Errores:</h5>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="input-field form-control" name="nombre" placeholder="Nombre(s)" value="{{old('nombre')}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-field" name="ap" placeholder="Apellido paterno" value="{{old('ap')}}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-field" name="am" placeholder="Apellido materno" value="{{old('am')}}">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="input-field" name="telefono" placeholder="Número de telefono" value="{{old('telefono')}}">
                    </div>
                    <div class="form-group">
                        <input type="email" class="input-field" name="email" placeholder="Correo" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-field" name="pass1" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-field" name="pass2" placeholder="Confirmar contraseña">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="submit-btn">Registrar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("registrar");
        var z = document.getElementById("elegir");

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }

        function registrar() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "120px";
        }

        @if($message = Session::get('ErrorInsert'))
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "120px";
        @endif
    </script>
</body>

</html>