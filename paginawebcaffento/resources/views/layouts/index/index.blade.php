@extends('layouts.index.main')
@section('contenido')
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
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="/usuario/reservaciones">Reservación</a></p>
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
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="/usuario/reservaciones">Reservación</a></p>
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
                    <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
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
@endsection