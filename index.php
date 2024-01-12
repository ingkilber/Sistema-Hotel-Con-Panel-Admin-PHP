<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kilber Marcano</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->

	<style>
        /* Estilos adicionales para el botón flotante de WhatsApp */
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #25d366;
            color: #fff;
            padding: 20px;
            border-radius: 50%;
            text-align: center;
            font-size: 24px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>

<body>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Palanca de navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php"> New <span>Dawn</span>
							<p class="logo_w3l_agile_caption">Tu resort de ensueño</p>
						</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Casa</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">Acerca de</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Equipo</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Galería</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Habitaciones</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contáctenos</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h4>Nuevo Amanecer</h4>
									<h3>Sabemos lo que amas</h3>
									<p>Bienvenido a nuestros hoteles
									</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>AMANECER</h4>
									<h3>Quédate con amigos y familias</h3>
									<p>Ven y disfruta un momento precioso con nosotros</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>AMANECER</h4>
									<h3>¿quiero unas vacaciones lujosas?</h3>
									<p>Obtenga alojamiento hoy</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		<div class="thim-click-to-bottom">
			<a href="#about" class="scroll">
				<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<!-- //banner -->
	<!--//Header-->
	<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Nuevo <span>Amanecer</span></h4>
					<img src="images/1.jpg" alt=" " class="img-responsive">
					<h5>Sabemos lo que amas</h5>
					<p>Ofrecer a los huéspedes vistas únicas y encantadoras desde sus habitaciones con sus comodidades excepcionales, hace que Star Hotel sea uno de los mejores en su tipo. Pruebe nuestro menú de comida, servicios increíbles y un personal amable mientras esté aquí..</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<div id="availability-agileits">
		<div class="col-md-12 book-form-left-w3layouts">
			<a href="admin/reservation.php">
				<h2>RESERVA EL MEJOR AMANECER
				</h2>
			</a>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_banner_bottom">
				<h3><span>Experimenta una buena estadía, disfruta de fantásticas ofertas</span> Encuentra nuestra acogedora bienvenida
				</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">DORMITORIOS PRINCIPALES</h4>
							<span class="cbp-ig-category">AMANECER</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">BALCON CON VISTA AL MAR</h4>
							<span class="cbp-ig-category">AMANECER</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">GRAN <br /> CAFÉ</h4>
							<span class="cbp-ig-category">AMANECER</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">COBERTURA <br /> WIFI</h4>
							<span class="cbp-ig-category">AMANECER
							</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- /about -->
	<div class="about-wthree" id="about">
		<div class="container">
			<div class="ab-w3l-spa">
				<h3 class="title-w3-agileits title-black-wthree">Acerca de nuestro New Dawn
				</h3>
				<p class="about-para-w3ls"> Lorem Ipsum es simplemente un texto simulado de la industria de impresión y composición tipográfica. Laca tempient vestibulum blandit faucibus. Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, en imperdiet urna
				</p>
				<img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
				<div class="w3l-slider-img">
					<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
				</div>
				<div class="w3ls-info-about">
					<h4>Te encantarán todas las comodidades que ofrecemos
						!</h4>
					<p>que espero disfruta de tus vaciones con nosotros. </p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->
	<!--sevices-->
	<div class="advantages">
		<div class="container">
			<div class="advantages-main">
				<h3 class="title-w3-agileits">Nuestros servicios
				</h3>
				<div class="advantage-bottom">
					<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
						<div class="advantage-block ">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<h4>Quédate primero, paga después! </h4>
							<p>Sin embargo, en ciertas circunstancias y el deber o la obligación se producen con frecuencia que los placeres tienen a sus funciones,
								.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Habitación decorada, con aire acondicionado
							</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Balcón privado
							</p>

						</div>
					</div>
					<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
						<div class="advantage-block">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<h4>Restaurante las 24 horas
							</h4>
							<p>Sin embargo, en ciertas circunstancias y el deber o la obligación se producen con frecuencia que los placeres tienen a sus funciones,
								.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>24 horas de servicio a la habitación
							</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Servicio de conserjería las 24 horas
							</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//sevices-->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Conozca a Nuestro Equipo</h3>
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>
						<img src="images/teams1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams4.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
				<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>tusolutionweb</h4>
							<span>Gerente
							</span>
							<p>Lorem ipsum dolor sit amet, elit adipiscing del consectetur, tempor sed y vitalidad, por lo que el trabajo y dolor, algunas cosas importantes que hacer eiusmod. A través de los años por venir, equipo quis.Lorem
								.</p>
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab2">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Sarah Connor</h4>
							<span>Recepcionista
							</span>
							<p>Estamos para ser de tus vaciones las mej
								or porque savemos que te esuferzas trabajando.te ofrecemos lo mejor .</p>
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab3">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Ivan Simpson</h4>
							<span>Manager</span>
							<p>Que eresperas para disfrutar los momentos mas inolvidables de tu vida.</p>
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab4">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Marc Gutierrez</h4>
							<span>Recepcionista</span>
							<p>Porque siempre pensamos primero en nuestros clientes mesclamos comodidad con un precio economico.</p>
							<div class="social-bnr-agileits footer-icons-agileinfo">
								<ul class="social-icons3">
									<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
									<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- Gallery -->
	<section class="portfolio-w3ls" id="gallery">
		<h3 class="title-w3-agileits title-black-wthree">Nuestra galería
		</h3>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
						E</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>AMANECER
					</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</section>
	<!-- //gallery -->
	<!-- rooms & rates -->
	<div class="plans-section" id="rooms">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Habitaciones y tarifas
			</h3>
			<div class="priceing-table-main">
				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r1.jpg" alt=" " class="img-responsive" />
							<h4>Habitación de lujo
							</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span>320</h3>
								<a href="admin/reservation.php"> Reservar ahora
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r2.jpg" alt=" " class="img-responsive" />
							<h4>Habitación de lujo
							</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span>220</h3>
								<a href="admin/reservation.php">Reservar ahora
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Casa de huespedes</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span>180</h3>
								<a href="admin/reservation.php">Reservar ahora</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Habitación Indiv.</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span> 150</h3>
								<a href="admin/reservation.php">Reservar ahora
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--// rooms & rates -->
	<!-- visitors -->
	<div class="w3l-visitors-agile">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Qué otros visitantes experimentaron
			</h3>
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									Vale la pena volver

								</h4>
								<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel. </p>
								<h5>Julia Rose</h5>
								<p>Alemania</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									Vale la pena volver

								</h4>
								<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel </p>
								<h5>Jahnatan Smith</h5>
								<p>Estados Unidos
								</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									Vale la pena volver

								</h4>
								<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel . </p>
								<h5>Rosalind Cloer</h5>
								<p>Italia</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									Vale la pena volver
								</h4>
								<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel. </p>
								<h5>Amie Bublitz</h5>
								<p>Suiza</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
	<!-- visitors -->
	<!-- contact -->
	<section class="contact-w3ls" id="contact">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
				<div class="contact-agileits">
					<h4>Contáctenos
					</h4>
					<p class="contact-agile2">Inscribíte a nuestros boletines
					</p>
					<form method="post" name="sentMessage" id="contactForm">
						<div class="control-group form-group">

							<label class="contact-p1">Nombre completo
								:</label>
							<input type="text" class="form-control" name="name" id="name" required>
							<p class="help-block"></p>

						</div>
						<div class="control-group form-group">

							<label class="contact-p1">Número de teléfono
								:</label>
							<input type="tel" class="form-control" name="phone" id="phone" required>
							<p class="help-block"></p>

						</div>
						<div class="control-group form-group">

							<label class="contact-p1">Dirección de correo electrónico:</label>
							<input type="email" class="form-control" name="email" id="email" required>
							<p class="help-block"></p>

						</div>


						<input type="submit" name="sub" value="Enviar" class="btn btn-primary">
					</form>
					<?php
					if (isset($_POST['sub'])) {
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$approval = "Not Allowed";
						$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')";


						if (mysqli_query($con, $sql))
							echo "OK";
					}
					?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
				<h4>Conectate con nosotros
				</h4>
				<p class="contact-agile1"><strong>Teléfono :</strong>+54 9 11 7601-1408</p>
				<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:info@facturacionweb.site">info@facturacionweb.site</a></p>
				<p class="contact-agile1"><strong>Dirección :</strong> Buenos Aires, Argentina</p>

				<div class="social-bnr-agileits footer-icons-agileinfo">
					<ul class="social-icons3">
						<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

					</ul>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62879.681806229746!2d-84.14836462783931!3d9.935612431138155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e49edef4b3eb%3A0xc8956f3f7bdc3793!2sRadisson+San+Jose-Costa+Rica+Hotel+moderno+con+2%E2%80%A6!5e0!3m2!1ses!2ssv!4v1517008417899"></iframe>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- /contact -->
	<div class="copy">
		<p>© 2022 <a href="index.php">AMENECER</a> </p>
	</div>
	<!--/footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- contact form -->
	<script src="js/jqBootstrapValidation.js"></script>

	<!-- /contact form -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- gallery popup -->
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!--tabs-->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--//tabs-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>

	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<!-- Botón flotante de WhatsApp -->
        <a href="https://wa.me/+5491176011408?text=Quiero%20más%20información%20para%20reservar" target="_blank" class="whatsapp-btn btn btn-primary">
            <i class="glyphicon glyphicon-phone"></i>
        </a>

	<script>
        function copyToClipboard(text) {
            var textArea = document.createElement("textarea");
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert('Mensaje copiado al portapapeles. Pégalo en la ventana de chat de WhatsApp.');
        }
    </script>
	<!-- Fin Botón flotante de WhatsApp -->

</body>

</html>