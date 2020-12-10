<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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
		@include('layouts.index.header')
	</header>
	<!-- End header -->


	<!--inicio del contenido -->
	@yield('contenido')
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