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
				<li class="nav-item active"><a class="nav-link" href="/index">Inicio</a></li>
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

					</div>
					@else
					<a class="nav-link" href="/registro_login">Inicia sesion / registrate</a>
					@endif
				</li>
			</ul>
		</div>
	</div>
</nav>