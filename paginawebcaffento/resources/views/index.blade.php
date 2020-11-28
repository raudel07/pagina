<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="../css/estilosindex.css">
  <link href="{{ asset('/dash/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/dash/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <title>Index</title>
</head>

<body>
  <header>
    <div class="logo logo_main">
      <img src="../img/logo.jpg" class="logomain" alt="">
    </div>
    <div class="navv">
      <div class="wrap nav-wrap">
        <nav>
          <ul>
            <li><div class="logo logo_small"> <img src="../img/logo.jpg" class="logomain2" alt=""> </div></li>
            <li><a href="/index">Inicio</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="/usuario/reservaciones">Reservaciones</a></li>
            <li><a href="/usuario/servicio_domicilio">Servicio a domicilio</a></li>
            <li><a href="/usuario/buzon">Aclaracion / Comentario</a></li>
            <li>
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class=" mr-3 d-none d-lg-inline text-white-600 small color"> {{ Auth::user()->name }} </span>
                <img class="img-profile rounded-circle" width="50px" height="50px" src="{{asset('/users/'.Auth::user()->img)}}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/usuario">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
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
  <main>
    <i class="fas fa-bars btn_menu"></i>

    <div class="container">
      <h1>hola mundo</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse officiis architecto minima quos dolorem fugiat laudantium ratione id omnis, deserunt pariatur voluptates velit. Labore ipsum, quas ea at asperiores maxime!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptas nostrum blanditiis mollitia repellendus molestiae, iusto ex deleniti temporibus reiciendis autem repudiandae vero velit facere quam commodi impedit dolorum officia.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum ducimus placeat quibusdam ex earum quod dolorem, doloribus voluptate eligendi eaque reprehenderit dolorum tempora quas, maiores eum fugit, illum enim exercitationem?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse officiis architecto minima quos dolorem fugiat laudantium ratione id omnis, deserunt pariatur voluptates velit. Labore ipsum, quas ea at asperiores maxime!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptas nostrum blanditiis mollitia repellendus molestiae, iusto ex deleniti temporibus reiciendis autem repudiandae vero velit facere quam commodi impedit dolorum officia.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum ducimus placeat quibusdam ex earum quod dolorem, doloribus voluptate eligendi eaque reprehenderit dolorum tempora quas, maiores eum fugit, illum enim exercitationem?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse officiis architecto minima quos dolorem fugiat laudantium ratione id omnis, deserunt pariatur voluptates velit. Labore ipsum, quas ea at asperiores maxime!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptas nostrum blanditiis mollitia repellendus molestiae, iusto ex deleniti temporibus reiciendis autem repudiandae vero velit facere quam commodi impedit dolorum officia.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum ducimus placeat quibusdam ex earum quod dolorem, doloribus voluptate eligendi eaque reprehenderit dolorum tempora quas, maiores eum fugit, illum enim exercitationem?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse officiis architecto minima quos dolorem fugiat laudantium ratione id omnis, deserunt pariatur voluptates velit. Labore ipsum, quas ea at asperiores maxime!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptas nostrum blanditiis mollitia repellendus molestiae, iusto ex deleniti temporibus reiciendis autem repudiandae vero velit facere quam commodi impedit dolorum officia.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum ducimus placeat quibusdam ex earum quod dolorem, doloribus voluptate eligendi eaque reprehenderit dolorum tempora quas, maiores eum fugit, illum enim exercitationem?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse officiis architecto minima quos dolorem fugiat laudantium ratione id omnis, deserunt pariatur voluptates velit. Labore ipsum, quas ea at asperiores maxime!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptas nostrum blanditiis mollitia repellendus molestiae, iusto ex deleniti temporibus reiciendis autem repudiandae vero velit facere quam commodi impedit dolorum officia.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum ducimus placeat quibusdam ex earum quod dolorem, doloribus voluptate eligendi eaque reprehenderit dolorum tempora quas, maiores eum fugit, illum enim exercitationem?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse officiis architecto minima quos dolorem fugiat laudantium ratione id omnis, deserunt pariatur voluptates velit. Labore ipsum, quas ea at asperiores maxime!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptas nostrum blanditiis mollitia repellendus molestiae, iusto ex deleniti temporibus reiciendis autem repudiandae vero velit facere quam commodi impedit dolorum officia.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum ducimus placeat quibusdam ex earum quod dolorem, doloribus voluptate eligendi eaque reprehenderit dolorum tempora quas, maiores eum fugit, illum enim exercitationem?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse officiis architecto minima quos dolorem fugiat laudantium ratione id omnis, deserunt pariatur voluptates velit. Labore ipsum, quas ea at asperiores maxime!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptas nostrum blanditiis mollitia repellendus molestiae, iusto ex deleniti temporibus reiciendis autem repudiandae vero velit facere quam commodi impedit dolorum officia.</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum ducimus placeat quibusdam ex earum quod dolorem, doloribus voluptate eligendi eaque reprehenderit dolorum tempora quas, maiores eum fugit, illum enim exercitationem?</p>
    </div>
  </main>
  <script src="{{asset('https://code.jquery.com/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('../js/scripts.js')}}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('/dash/js/sb-admin-2.min.js')}}"></script>
   <!-- Bootstrap core JavaScript-->
   <script src="{{ asset('/dash/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('/dash/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('/dash/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

</body>

</html>