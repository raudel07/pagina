<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <-- Fonts --
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <-- Styles --
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Caffento Bistro-Café</title>
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
                        <li class="nav-item active"><a class="nav-link" href="/">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="/usuario/menu">Menú</a></li>
                        <li class="nav-item"><a class="nav-link" href="/usuario/acercade">Acerca de</a></li>
                        <li class="nav-item">
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


    <!--inicio del contenido -->
    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="../img/foto1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenidos a<br>Caffento Bistro-Café </strong></h1>
                            <p class="m-b-40"> Aquí se come <b> como en tu casa...</b> pero sin tener que lavar los platos </p>
                            @if( Auth::user())
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="/usuario/reservaciones">Reservación</a></p>
                            @else
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="/registro_login">Reservación</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-left">
                <img src="../img/foto2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenidos a<br> Caffento Bistro-Café</strong></h1>
                            <p class="m-b-40"> Deliciosidad saltando en tu boca.</p>
                            @if( Auth::user())
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="/usuario/reservaciones">Reservación</a></p>
                            @else
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="/registro_login">Reservación</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-left">
                <img src="../img/foto3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenidos a<br> Caffento Bistro-Café</strong></h1>
                            <p class="m-b-40">Un estómago vacío es un mal consejero</p>
                            @if( Auth::user())
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="/usuario/reservaciones">Reservación</a></p>
                            @else
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="/registro_login">Reservación</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End slides -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1><span>Caffento Bistro-Café</span></h1>
                        <p>El lugar donde encontrarás el café a tu gusto y otras ricas bebidas frías o calientes; Baguettes, Paninis, Ensaladas, Pastas, Nachos y nuestros deliciosos postres. Ah, y pregunta por nuestros desayunos</p>
                        @if( Auth::user())
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="/usuario/reservaciones">Reservación</a>
                            @else
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="/registro_login">Reservación</a>
                            @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="../img/promocion.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <p class="lead ">
                        <b>" Goza inteligentemente de los placeres de la mesa "</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-titlemenu text-center seccion">
                        <h2><b>Menú</b></h2>
                        <p>No dejes para mañana lo que puedas comerte hoy</p>
                    </div>
                </div>
            </div>

            <div class="row inner-menu-box">

                <div class="col-12 hedermenu" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                    <div class="row nav nav-pills text-center">
                        <div class="col-12 flex-column"></div>
                        <a class="col-2 nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Todo</a>
                        <a class="col-2 nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Bebidas</a>
                        <a class="col-4 nav-link active" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Lo salado</a>
                        <a class="col-2 nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Desayunos</a>
                        <a class="col-2 nav-link" id="v-pills-postres-tab" data-toggle="pill" href="#v-pills-postres" role="tab" aria-controls="v-pills-postres" aria-selected="false">Postres</a>

                    </div>
                </div>


                <div class="col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @include('layouts.index.menubebidas')
                            @include('layouts.index.menudesayunos')
                            @include('layouts.index.menusalado')
                            @include('layouts.index.menupostres')
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            @include('layouts.index.menubebidas')
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            @include('layouts.index.menudesayunos')
                        </div>
                        <div class="tab-pane fade show active" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            @include('layouts.index.menusalado')
                        </div>
                        <div class="tab-pane fade" id="v-pills-postres" role="tabpanel" aria-labelledby="v-pills-postres-tab">
                            @include('layouts.index.menupostres')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Menu -->

    <!-- Start Gallery -->
    <div class="gallery-box">
        @include('layouts.index.galeria')
    </div>
    <!-- End Gallery -->

    <!-- Start Customer Reviews -->
    <!--	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="../img/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="../img/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="../img/images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div> -->
    <!-- End Customer Reviews -->
    <div class="map-full text-center">
        <h1 class="seccion">>> Aquí nos encontramos <<</h1> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2045.7826161198207!2d-107.91325927167706!3d30.419584067945678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8299e04ee6d4dc88!2sCaffento!5e0!3m2!1ses-419!2smx!4v1607282282795!5m2!1ses-419!2smx" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="contacto-background">
        <div class="container fon ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-titlebuzon text-center">
                        <h2><b>¿Que te parecio?</b></h2>
                        <p>Escribenos que te parecio el restaurante, tu opinión es muy importante para nosotros.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container fon2 ">

            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Correo" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Escribe aquí..." rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Enviar Mensaje</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Fin del contenido -->


    <!-- Start Contact info -->
    <div class="contact-imfo-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 arrow-right">
                    <i class="fa fa-volume-control-phone"></i>
                    <div class="overflow-hidden">
                        <h4>Teléfono</h4>
                        <p class="lead">
                            636-694-2171
                        </p>
                    </div>
                </div>
                <div class="col-md-4 arrow-right">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Correo</h4>
                        <p class="lead">
                            yolanda@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>Ubicación</h4>
                        <p class="lead">
                            Constitución Poniente #803-B, Centro, NCG, Chih, 31700.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact info -->

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
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

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
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
</body>

</html>