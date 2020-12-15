<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Site Metas -->
   <title>Blogs</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Site Icons -->
   <link rel="shortcut icon" href="../img/images/favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" href="../img/images/apple-touch-icon.png">
   <link rel="stylesheet" href="{{ asset('/css/estilosindex.css') }}">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

   <!-- Site CSS -->
   <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('/css/superslides.css') }}">
   <link rel="stylesheet" href="{{ asset('/css/baguetteBox.min.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('/css/responsive.css')}}">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{ asset('/css/custom.css')}}">

   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{asset('/css/style2.css')}}">

   <!-- fevicon -->
   <link rel="icon" href="../img/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('/css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
   <link rel="stylesoeet" href="{{asset('/css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   <!-- Start header -->
   <header class="top-navbar">
      <nav class="navbar navbar-expand-lg navbar-light ">
         <div class="container">
            <a class="navbar-brand" href="index.html">
               <img id="logoo" src="../img/logo.jpg" width="147px" height="80px" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item "><a class="nav-link" href="/">Inicio</a></li>
                  <li class="nav-item"><a class="nav-link" href="/usuario/menu">Menú</a></li>
                  <li class="nav-item"><a class="nav-link" href="/usuario/acercade">Acerca de</a></li>
                  <li class="nav-item active">
                     <a class="nav-link" href="/usuario/blogs">Blog</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/usuario/contacto">Contacto</a></li>
                  <li class="nav-item dropdown">
                     @if( Auth::user())
                     <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Perfil</a>
                     <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <a class="dropdown-item" href="/usuario">Mi perfil</a>
                        <a class="dropdown-item" href="/usuario/reservaciones">Reservaciones</a>
                        <a class="dropdown-item" href="/usuario/servicio_domicilio">Servicio a domicilio</a>
                        <a class="dropdown-item" href="/usuario/buzon">Buzón</a>
                        <a class="dropdown-item" class=" logut_btn" data-toggle="modal" data-target="#logoutModal" href="">Cerrar sesion</a>
                     </div>
                     @else
                     <a class="nav-link" href="/registro_login">Inicia sesion / registrate</a>
                     @endif
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </header>
   <!-- End header -->
   <!-- blog section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-sm-12">
               <div class="about_img"><img src="../img/images/img-8.png"></div>
               <div class="like_icon"><img src="../img/images/like-icon.png"></div>
               <p class="post_text">Post By : 09/06/2019</p>
               <h2 class="most_text">Lago azul más impresionante con río de <br> nieve</h2>
               <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
               <div class="social_icon_main">
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="../img/images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="../img/images/instagram-icon.png"></a></li>
                     </ul>
                  </div>
                  <div class="read_bt"><a href="#">Leer más</a></div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-12">
               <div class="about_main">
                  <h1 class="follow_text">CONECTAR & SEGUIR</h1>
                  <div class="follow_icon">
                     <ul>
                        <li><a href="#"><img src="../img/images/fb-icon-1.png"></a></li>
                        <li><a href="#"><img src="../img/images/instagram-icon-1.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- blog section end -->

   <!-- footer section start -->
   <div class="footer_section layout_padding margin_top_90">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <h3>Sobre nosotros</h3>
               <p>Esta dependencia ofrece diferentes platillos y bebidas, como distintos cafés fríos y calientes que es lo que más destaca en el negocio, este está dirigido a reuniones familiares, citas personales, reuniones con amigos, entre otros.</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
               <ul class="list-inline f-social">
                  <li class="list-inline-item"><a href="https://www.facebook.com/Caffento/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               </ul>
            </div>
            <div class="col-lg-4 col-md-6">
               <h3>Horario</h3>
               <p><span class="text-color">Lunes: </span>Cerrado</p>
               <p><span class="text-color">Martes:</span> 9:AM - 11PM</p>
               <p><span class="text-color">Miércoles:</span> 9:AM - 11PM</p>
               <p><span class="text-color">Jueves :</span> 9:AM - 11PM</p>
               <p><span class="text-color">Viernes :</span> 9:AM - 11PM</p>
               <p><span class="text-color">Sabado :</span> 9:AM - 11PM</p>
               <p><span class="text-color">Domingo :</span> 9:AM - 11PM</p>
            </div>
         </div>
      </div>
      <!-- footer section end -->
          <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title colorletra" id="exampleModalLabel">Salir</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body colorletra">¿Decea cerrar la sesión?</div>
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

      <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

      <!-- ALL JS FILES -->
      <script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
      <script src="{{asset('/js/popper.min.js')}}"></script>
      <script src="{{asset('/js/bootstrap.min.js')}}"></script>
      <!-- ALL PLUGINS -->
      <script src="{{asset('/js/jquery.superslides.min.js')}}"></script>
      <script src="{{asset('/js/images-loded.min.js')}}"></script>
      <script src="{{asset('/js/isotope.min.js')}}"></script>
      <script src="{{asset('/js/baguetteBox.min.js')}}"></script>
      <script src="{{asset('/js/form-validator.min.js')}}"></script>
      <script src="{{asset('/js/contact-form-script.js')}}"></script>
      <script src="{{asset('/js/custom.js')}}"></script>

      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <!-- javascript -->
      <script src="{{asset('/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
</body>

</html>