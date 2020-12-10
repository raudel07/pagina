<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Contacto</title>
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
                        <li class="nav-item"><a class="nav-link" href="/index">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="/usuario/menu">Menú</a></li>
                        <li class="nav-item"><a class="nav-link" href="/usuario/acercade">Acerca de</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="/usuario/blogs">Blog</a>
                        </li>
                        <li class="nav-item active"><a class="nav-link" href="/usuario/contacto">Contacto</a></li>
                        <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Perfil</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-a">
						<a class="dropdown-item" href="/usuario">Mi perfil</a>
						<a class="dropdown-item" href="/usuario/reservaciones">Reservaciones</a>
						<a class="dropdown-item" href="/usuario/servicio_domicilio">Servicio a domicilio</a>
						<a class="dropdown-item" href="/usuario/buzon">Buzón</a>
					</div>
						</li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contacto</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Contact -->
    <div class=" text-center margin">
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
    </div>
    <!-- End Contact -->

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
    <script>
        $('.map-full').mapify({
            points: [{
                lat: 40.7143528,
                lng: -74.0059731,
                marker: true,
                title: 'Marker title',
                infoWindow: 'Caffento Bistro-Café'
            }]
        });
    </script>
</body>

</html>