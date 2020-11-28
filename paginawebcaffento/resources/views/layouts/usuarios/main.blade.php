<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo_perfil_usuario.css">
    <link rel="stylesheet" href="../css/estilosmodal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Perfil de usuario</title>
     <!-- Custom fonts for this template-->
  <link href="{{ asset('/dash/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- Custom styles for this template-->
 <!--  <link href="{{ asset('/dash/css/sb-admin-2.min.css') }}" rel="stylesheet"> -->

</head>

<body>
    <input type="checkbox" name="" id="check">
    @include('layouts.usuarios.header')
    @include('layouts.usuarios.sidebar')
    @yield('contenido')
    <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Salir</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">¿Decea cerrar la sesión?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-primary" type="submit">Salir</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('/dash/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('/dash/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('/dash/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('/dash/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('/dash/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('/dash/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{ asset('/dash/js/demo/chart-pie-demo.js')}}"></script>
</body>

</html>