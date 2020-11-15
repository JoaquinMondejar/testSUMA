	<!DOCTYPE html>
	<html>
	<head>
		<title>Prueba</title>

		<!-- Start Bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>
		<!-- End Bootstrap-->
		<!-- FontAwesome CDN-->
		<script src="https://kit.fontawesome.com/7ea1b52715.js" crossorigin="anonymous"></script>

		<!-- FontAwesome CDN -->

		<!-- Start Google Fonts-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&display=swap" rel="stylesheet">
		<!-- End Google Fonts-->

		<!-- Files CSS and JS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!--Start Weather Icons-->
		<link rel="stylesheet" type="text/css" href="css/weather-icons-master/css/weather-icons.css">
		<link rel="stylesheet" type="text/css" href="css/weather-icons-master/css/weather-icons-wind.css">

		<!--End Weather Icons-->
		<script type="text/javascript" src="js/jscode.js"></script>
		<script type="text/javascript" src="js/apiJs.js"></script>
		<!-- Files CSS and JS-->

	</head>
	<body>

		<div class="wrapper">
			<div id="backshadow"></div>
			<!--Start Navbar-->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<div class="row">
						<div class="col-3 offset-5"><img src="img/images/logo.png" class="ml-4"></div>
					</div>
				</div>
			</nav>

			<!--End Navbar-->


			<!-- Start sidebar -->
			<div id="downloadOption">
				<div class="p-3 text-center">
					<i class="fas fa-file-download fa-5x text-white"></i>
					<p class="mt-2" style="margin:0;"><a href="#" class="orangeTxt">¡Descárgala ya!</a></p>
				</div>
			</div>


			<div id="contentDowloadOption">

				<div class="container-fluid">
					<div class="row">
						<div class="col-12 text-right">
							<button type="button" class="close" id="closeSide">
								<span aria-hidden="true" style="font-size: 40px; color:#003d9e;">&times;</span>
							</button>

						</div>
					</div>
					<div class="row">
						<div class="col-12 text-right">
							<p>Close</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="typeText">App Área Clientes en tu móvil</h1>
							<br>
							<h6 class="typeText">Tods tus gestiones, dónde y cuando quieras</h6>
							<br>
							<h4 style="color: #ffa200;font-weight: bolder;">¡Descárgala ahora!</h4>
							<br>



						</div>

					</div>
					<div class="row">
						<div class="col-6 text-center">
							<img src="img/images/app-store.png">

						</div>
						<div class="col-6 text-center">

							<img src="img/images/google-play.png">

						</div>

					</div>	
					<div class="row mt-4">
						<div class="col-12 text-center"><img src="img/images/imagenmovilcaptura.png"></div>
					</div>
				</div>
			</div>
			<!-- End sidebar-->

			<!--Start body-->
			<div class="container-fluid mb-3">
				<!-- Start First block Information-->
				<div class="row fstBlock p-5">
					<div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

					<div class="col-xl-4 col-lg-4 col-md-11 col-sm-11 text-left">
						<h6 class="typeText"><img src="img/images/superpacks.png"> Superpacks</h6>
						<h1 class="typeText">Servicios y energía en una única cuota mensual</h1>
						<h6 class="typeText">Ahorra hasta <u>168€/año</u> en luz y gas.</h6>
						<br>
						<button class="button orngBtns"><span class="typeText text-white p-4">Descubrir</span></button>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-11 col-sm-11 text-center"><img class="mt-5" src="img/images/main-image-circle-old.png"></div>

					<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 text-left">
						<h5 class="typeText">Entra en el área de clientes</h5>

						<h6 class="typeText w-100 mt-3">Email</h6>
						<input class="w-100" type="email">

						<h6 class="typeText w-100 mt-3">Contraseña</h6>
						<input class="w-100" type="password">

						<div class="text-center">
							<br>
							<button class="button orngBtns pl-4 pr-4"><span class="typeText text-white">Entra</span></button>
							<button class="button whiteBtns pl-2 pr-2"><span class="typeText">Regístrate</span></button>
						</div>

						<p class="mt-3"><a class="orangeTxt" href="#">Has olvidado tu contraseña? ></a></p>

					</div>
					<div class="col-xl-2 col-lg-0 col-md-0 col-sm-0"></div>
				</div>
				<!-- End First block Information-->



				<!-- Start Second block Information-->
				<div class="row scndBlock p-5">
					<div class="col-xl-1 offset-xl-2 col-lg-2 col-md-3 col-sm-4 text-center">
						<img src="img/images/laptop.png">
					</div>
					<div class="col-xl-3 col-lg-4 col-md-3 col-sm-2">
						<h6 class="typeText" style="display: inline;">
							¿Qué necesitas para registrarte?<br><a style="display: inline;" class="orangeTxt" href="#">Te ayudamos ></a>
						</h6>
					</div>


					<div class="col-xl-1 col-lg-2 col-md-3 col-sm-4 text-center">
						<img src="img/images/mobile.png">
					</div>
					<div class="col-xl-5 col-lg-4 col-md-3 col-sm-2">
						<h6 class="typeText" style="display: inline;">
							Descarga la app móvil<br><a style="display: inline;" class="orangeTxt" href="#">Descárgala ahora ></a>
						</h6>
					</div>
				</div>
				<!--End Second Block Information-->

				<!-- Start Third Block Information-->
				<div class="row thrdBlock p-5">
					<div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-5 offset-md-1">
						<h6 class="typeText"><img src="img/images/caldera-ico.png"> Pack Caldera NiNi</h6>
						<h1 class="typeText">¿Necesitas una caldera nueva?</h1>
						<h6 class="typeText">Renueva tu caldera con una cuota fija al mes y finánciala hasta en 5 años.</h6>

						<p><img height="140px" src="img/images/precio_mes_es.png"></p>

						<br>
						<button class="button orngBtns"><span class="typeText text-white p-4">Solicitar Online</span></button>
						<button class="button whiteBtns"><span class="typeText pl-2 pr-2"><img class="mr-2" src="img/images/phone.png">900 83 43 26</span></button>
					</div>
					<div></div>
					<div class="col-xl-6 col-lg-5 col-md-5 text-center"><img height="450" width="480" src="img/images/caldera-main.png"></div>
				</div>
				<!-- End Third Block Information-->

				<!-- Start Fourth Block Information-->
				<div id="carouselExampleIndicators" class="carousel slide row frthBlock p-5" data-ride="carousel">
					<div class="col-12">
						<h1 class="typeText text-center">Te recomendamos</h1>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					</ol>
					<div class="carousel-inner text-center">
						<div class="carousel-item active text-center">
							<div class="row">
								<div class="col-3 offset-2 text-center">
									<h4 class="typeText">Tarjeta Naturgy</h4>
									<img src="img/images/tarjeta.png">
									<h6 class="typeText">Descubre la tarjeta gratuita de naturgy, acumula Euros Naturgy que puedes canjear en descuentos en factura, aplaza facturas, consigue bonificaciones, ¡y mucho más!</h6>
									<button class="button orngBtns mt-4"><span class="typeText text-white p-4">Saber más</span></button>
								</div>
								<div class="col-2"></div>
								<div class="col-3 text-center">
									<h4 class="typeText">Descuentos en factura</h4>
									<img src="img/images/descuentos.png">
									<h6 class="typeText">Consigue un reembolso de hasta un 10% del valord e tu reserva con Booking. Desde tu Área Clientes podrás acceder a "Mis Promociones" y entrar a Booking con tu usuario. Haz tu reserva y conseguiras un reembolso.</h6>
									<button class="button orngBtns mt-3"><span class="typeText text-white p-4">Saber más</span></button>
								</div>
							</div>
						</div>

						<div class="carousel-item">
							<div class="section__content">
								<h4 class="typeText">El tiempo en Barcelona</h2>
								<div class="weather__block typeText" id="temperatura"></div>
								<div class="weather__block typeText" id="iconoApi"></div>
							</div>
						</div>

					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!-- End Fourth Block Information-->

				<!-- Start Fifth Block Information-->
				<div class="row fifthBlock p-5">
					<div class="col-2 offset-2">
						<h6 class="typeText text-left">Productos destacados</h6>
						<ul style="list-style-type:none; padding-left: 0px;">
							<li>Superpacks</li>
							<li>Tarifa EcoEasy</li>
							<li>Tarifa Mes</li>
							<li>Autoconsumo placas solares</li>
							<li>Puntos de recarga inteligentes</li>
							<li>Termostato inteligente</li>
						</ul>
					</div>

					<div class="col-2">
						<h6 class="typeText text-left">Ventajas Naturgy</h6>
						<ul style="list-style-type:none; padding-left: 0px;">
							<li>Reserva en Booking.com</li>
							<li>Servicio de vídeoasistencia médica</li>
							<li>Tarjeta Naturgy</li>
							<li>Facilidades de pago</li>
							<li>Recomienda a un amigo</li>
						</ul>
					</div>

					<div class="col-2">
						<h6 class="typeText text-left">Te ayudamos</h6>
						<ul style="list-style-type:none; padding-left: 0px;">
							<li>Conoce Área Clientes</li>
							<li>Servicio Protección de Facturas</li>
							<li>Más tarifas Naturgy</li>
							<li>Política de reclamaciones</li>
							<li>Consejos de ciberseguridad</li>
							<li>App Servicios</li>
							<li>App móvil Clientes</li>
						</ul>
						<img src="img/images/app-store.png">
						<img src="img/images/google-play.png">
					</div>

					<div class="col-2">
						<h6 class="typeText text-left">Ahorro y eficiencia</h6>
						<ul style="list-style-type:none; padding-left: 0px;">
							<li>Climatización eficiente</li>
							<li>Iluminación eficiente</li>
							<li>Seguridad en tus instalaciones</li>
							<li>Consejos de ahorro energético</li>
						</ul>
					</div>

					<div class="col-12 text-center mt-5">
						<ul id="social">
							<li><img height="20px" width="20px" src="img/images/rrss-instagram.svg"></li>
							<li><img height="20px" width="20px" src="img/images/rrss-facebook.svg"></li>
							<li><img height="20px" width="20px" src="img/images/rrss-twitter.svg"></li>
						</ul>
					</div>

					<div class="col-12 text-center mt-2">
						<ul class="listHor">
							<li>Conócenos | </li>
							<li>Accesibilidad | </li>
							<li>Nota Legal | </li>
							<li>Política de Cookies | </li>
							<li>Contacto | </li>
							<li><u>Atención al cliente: 900 100 251</u></li>
						</ul>
					</div>

					<div class="col-12 text-center mt-2">
						<ul class="listHor">
							<li>© Naturgy | </li>
							<li>Avenida San Luis, 77 28033 Madrid </li>

						</ul>
					</div>

				</div>

				<!-- End Fifth Block Informatino-->







			</div>

			<!--End Body-->



		</div>

	</body>
	</html>