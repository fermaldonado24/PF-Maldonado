<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Toyota Yaris GR</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="css/toyota.css">
	<script src="https://kit.fontawesome.com/b54defd64c.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
           new WOW().init();
		});
	</script>
	<style type="text/css">
		html, body {
			font-family: 'Toyota Type';
		}
		.main_logo {
			width: 150px;
		}
		.black {
			background-color: #000000;
			min-height: 80px;
		}
		.black2 {
			background-color: #000000;
			min-height: 180px;
		}
		.social {
			list-style: none;
		}
		.social li {
			padding: 0px 0.5em;
			float: left;
		}
		.social li:last-child {
			padding-left: 1.5em;
		}
		.social li a {
			font-size: 1.2em;
			color: #fff;
			transition: 0.6s;
		}
		.social li a:hover {
			color: #D22D27;
		}
		.video {
			width: 100%;
			display: block;
			height: calc(100vh - 80px);
		}

		.video iframe {
			width: 100%;
			height: 100%;
		}

		.ytp-title-link {
			display: none;
		}
		.firulete_rojo {
			background-color: #D22D27;
			display: block;
			height: 20px;
			width: 100%;
		}
		.texto_1 {
			font-family: 'Toyota Type Book';
			font-size: 2em;
			text-transform: uppercase;
			color: #fff;
			margin-top: 25%;
		}
		@media (min-width: 768px) {
			.vh100 {
				min-height: 100%;
				height: 100vh;
			}
			.galleryb {
				bottom: 0;
				position: absolute;
			}
			.bg2 .cell {
				display: table-cell;
				width: 100%;
				height: 100%;
				vertical-align: middle;
			}
			.bg2 h1 {
				color: #fff;
				font-weight: bold;
				font-size: 3em;
				text-align: center;
				text-transform: uppercase;
				letter-spacing: 5px;
			}
		}

		.bg1 {
			position: absolute;
			margin-top: -10%;
		}

		.rel {
			position: relative;
		}

		@media (max-width: 767px) {
			.vh100 {
				min-height: 100px;
			}			
			.social {
				padding: 0px;
			}
			.social li:last-child {
				padding-left: 1em;
			}
			.bg1 {
				position: relative;
				margin-top: 0%;
				width: 100%;
			}
			.gallery1 {
				width: 100% !important;
				padding: 0;
			}
			.top20 {
				margin-top: 0px !important;
			}
			.texto_1 {
				text-align: center;
				margin-top: 0 !important;
			}
			.galleryb {
				position: relative;
			}
			.bg2 .cell {
				display: table-cell;
				width: 100%;
				height: 100%;
				vertical-align: middle;
			}
			.bg2 h1 {
				color: #fff;
				font-weight: bold;
				font-size: 2em;
				text-align: center;
				text-transform: uppercase;
				letter-spacing: 5px;
			}
		}

		.gallery1 {
			width: 75%;
			background: #fff;
			padding: 1em;
		}

		.gallery1 img:first-child {
			margin-top: 0em;
		}

		.gallery1 img {
			width: 100%;
			margin-top: 1em;
		}

		.top20 {
			margin-top: 50%;
		}

		.desc {
			margin-top: 10%;
			font-size: 16px;
			color: #000;
			min-height: 350px;
		}

		.desc h1 {
			font-size: 16px;
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 5px;
		}

		.bg2 {
			height: 420px;
			background: url('img/bg2.png') no-repeat;
			background-size: cover;
			display: table;
		}

		#form input[type=text] {
			background-color: #e1e1e1;
			color: #a1a1a1;
			padding: 10px 15px;
			border: none;
			border-radius: 0;
			letter-spacing: 2px;
			font-size: 14px;
		}

		#form textarea {
			background-color: #e1e1e1;
			color: #a1a1a1;
			padding: 10px 15px;
			border: none;
			border-radius: 0;
			letter-spacing: 2px;
			resize: none;
			height: 180px;
			font-size: 14px;
		}

		#form input[type=submit] {
			padding: 10px 35px;
			color: #fff;
			background: #D32726;
			border-radius: 0;
			border: none;
			text-transform: uppercase;
			font-size: 14px;
		}

		#form h1 {
			font-size: 16px;
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 4px;
		}
		@media (min-width: 768px) {
			#form input[type=submit] {
				position: absolute;
				bottom: -15px;
				right: 50px;
			}
			.fluid_logo {
				width: 180px;
			}
		}
		@media (max-width: 767px) {
			#form input[type=submit] {
				float: right;
				margin-top: 10px;
			}
			.fluid_logo {
				width: 100%;
			}
		}

		.firulete_bottom {
			position: absolute;
			display: block;
			height: 20px;
			width: 100%;
			background-color: #D32726;
			bottom: -10px;
		}

		ul.direcciones {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		ul.direcciones li {
			font-size: 12px;
			color: #fff;
		}

		ul.specs {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		ul.specs li {
			line-height: 18px;
			padding-left: 1em;
			text-indent: -15px;
			padding-top: 5px;
		}

		ul.specs li::before {
			content: "-";
			padding-right: 8px;
			color: #000;
		}

		._360c {
			color: #D22D27;
			text-decoration: none;
			text-transform: uppercase;
		}

		._360c div {
			display: inline-block;
			padding: 10px 35px;
			color: #fff;
			background: #D32726;
			border-radius: 0;
			border: none;
			text-transform: uppercase;
			font-size: 14px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 black">
				<div class="row">
					<div class="d-flex col-4 col-md-6 pt-2 justify-content-center">
						<img class="main_logo" src="img/yarisgr-logo.svg" />
					</div>
					<div class="d-flex col-8 col-md-6 pt-4 justify-content-center">
						<ul class="social">
							<li>
								<a href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-youtube"></i></a>
							</li>
							<li><img src="img/toyota-logo.svg" /></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 px-0">
				<div class="d-none d-md-block video wow animate__animated animate__fadeIn">
					<iframe src="https://www.youtube.com/embed/3npBKZb3pog?controls=0&show_info=0" title="Yaris GR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
				</div>
				<div class="d-flex d-md-none">
					<iframe class="w-100" src="https://www.youtube.com/embed/3npBKZb3pog?controls=0&show_info=0" title="Yaris GR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
				</div>
				<div class="pt-3 pb-3 d-flex justify-content-center d-md-none">
					<a class="text-center _360c justify-content-center" href="https://www.youtube.com/watch?v=3npBKZb3pog" target="_blank">
						<div>VIVI LA EXPERIENCIA 360</div>
					</a>
				</div>
			</div>
			<div class="col-12 px-0 vh100 black">
				<div class="row mx-0">
					<div class="col-12 col-md-8 offset-md-2">
						<div class="row">
							<div class="px-0 col-12 col-md-6">
								<div class="texto_1 pt-5 pb-5 px-md-0 wow animate__animated animate__fadeInUp">
									Para los fanáticos<br />
									de las emociones,<br />
									nacido del wrc.
								</div>
							</div>
							<div class="px-0 col-12 col-md-6">
								<div class="firulete_rojo"></div>
								<img class="w-100 pt-md-5 wow animate__animated animate__fadeInRight" src="img/car1.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 px-0">
				<div class="row mx-0">
					<div class="px-0 col-12 col-md-8 offset-md-2 rel">
						<img class="bg1 w-100 wow animate__animated animate__fadeInUp" src="img/bg1.png" />
					</div>
					<div class="px-0 col-12 col-md-8 offset-md-2 rel">
						<div class="row mx-0 top20">
							<div class="col-12 col-md-8 desc wow animate__animated animate__fadeInLeft">
								<h1>Especificaciones</h1>
								<ul class="specs">
								<li>Motor: 1.6L, 3 cil, Turbo, 12v, Inyección Directa, Start-Stop</li>
								<li>Potencia: 265 CV – 6.500 RPM</li>
								<li>Torque: 360 Nm – 3.000 a 4.600 RPM</li>
								<li>Transmisión: Manual de 6 velocidades, con iMT</li>
								<li>Tracción: 4x4 – 3 modos: Normal / Sport / Track</li>
								<li>Frenos de disco: Ventilados delanteros 2 pinzas </li>
								<li>Dimensiones: (La x An x Al): 3.995 x 1.805 x 1.455 mm</li>
								<li>Peso neto: 1.280 kg | Relación peso-potencia  de 4.9 kg x CV</li>
								</ul>
								<h1 class="pt-3">PERFORMANCE</h1>
								<ul class="specs">
								<li>Velocidad máxima autolimitada: 230 km/h</li>
								<li>Aceleración 0 – 100 km/h: 5.5 seg.</li>
								</ul>
							</div>
							<div class="pt-1 px-0 col-12 col-md-4 justify-content-center">
								<div class="col-12 px-0">
									<div class="gallery1">
										<img class="wow animate__animated animate__flipInY" data-wow-delay="0.1s" src="img/gallery1.png" />
										<img class="wow animate__animated animate__flipInY" data-wow-delay="0.2s" src="img/gallery2.png" />
										<img class="wow animate__animated animate__flipInY" data-wow-delay="0.3s" src="img/gallery3.png" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 px-0 bg2">
				<div class="cell">
					<h1 class="wow animate__animated animate__fadeInLeft">Innovación, directo</h1>
					<h1 class="wow animate__animated animate__fadeInRight">desde las pistas de carreras</h1>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2 pt-5">
				<div class="row">
					<div class="col-12 col-md-7 rel">
						<img src="img/gr-logo-title.svg" class="img-fluid wow animate__animated animate__fadeInUp">
						<div class="wow animate__animated animate__fadeInLeft desc mt-5">
							<h1>CIRCUIT PACK:</h1>
							<ul class="specs">
							<li>Neumáticos deportivos especiales:</li>
							<li>Michelin Sport Pilot 4S 225/40 R18 con llantas forjadas</li>
							<li>Control Activo de Sonido</li>
							<li>Pinzas de frenos rojas + Logos GR</li>
							<li>Suspensión deportiva GR High Performance</li>
							<li>Dirección asistida con regulación más deportiva</li>
							<li>Tapizado gamuza + cuero con costuras rojas</li>
							<li>Diferenciales delanteros y traseros Torsen</li>
							<li>Ventilación especial de frenos delanteros</li>
							<li>Apoyacabezas integrados</li>
							</ul>
						</div>

						<div class="row pt-5 galleryb">
							<div class="col-12 col-md-4 mt-2 mt-md-0">
								<img data-wow-delay="0.1s" class="wow animate__animated animate__flipInY w-100 img-fluid" src="img/gallery1b.png">
							</div>
							<div class="col-12 col-md-4 mt-2 mt-md-0">
								<img data-wow-delay="0.2s" class="wow animate__animated animate__flipInY w-100 img-fluid" src="img/gallery2b.png">
							</div>
							<div class="col-12 col-md-4 mt-2 mt-md-0">
								<img data-wow-delay="0.2s" class="wow animate__animated animate__flipInY w-100 img-fluid" src="img/gallery3b.png">
							</div>
						</div>
					</div>
					<div class="col-5 d-none d-md-block">
						<img class="w-100 wow animate__animated animate__fadeInRight" src="img/car2.png">
					</div>
				</div>
			</div>
			<div class="col-12 col-md-8 offset-md-2 mt-2 pt-5 ">
				<form id="form" method="post" action="">
					<div class="row px-0 wow animate__animated animate__fadeIn">
						<div class="col-12 mt-2">
							<h1>Contactanos</h1>
						</div>
						<div class="col-12 mt-3">
							<input type="text" class="form-control" name="nombre" placeholder="NOMBRE COMPLETO">
						</div>
						<div class="col-12 mt-2">
							<input type="text" class="form-control" name="email" placeholder="E-MAIL">
						</div>
						<div class="col-12 mt-2">
							<input type="text" class="form-control" name="telefono" placeholder="TELÉFONO">
						</div>
						<div class="col-12 mt-2 rel">
							<textarea class="form-control" name="mensaje" placeholder="MENSAJE"></textarea>
							<input type="submit" name="send" value="Enviar" class="send">
						</div>
					</div>
				</form>
			</div>
			<div class="pt-5 mt-3 col-12 col-md-8 offset-md-2 px-0 rel">
				<div class="d-none d-md-block firulete_bottom"></div>
			</div>
			<div class="col-12 black2 px-0 pb-3">
				<div class="row mx-0">
					<div class="col-12 col-md-8 offset-md-2 black2">
						<div class="row mx-0">
							<div class="pt-5 px-0 col-6 d-flex">
								<img class="fluid_logo" src="img/curcio-capital.svg"><br />
							</div>
							<div class="pt-5 px-0 col-6 d-flex justify-content-end">
								<img class="fluid_logo" src="img/toyota-ajax-logo.svg">
							</div>
							<div class="pt-3 col-12">
								<ul class="direcciones">
									<li><b>Montevideo</b> | Av. Rondeau 1751 | T 2924 0918 - 2682 6161 | info@ayaxonline.com</li>
									<li><b>Punta del Este</b> | Av. Pendragosa Sierra esq. Julio Herrera y Reissig | T 2929 3221 | infopunta@ayaxonline.com</li>
									<li><b>toyota.com.uy</b> y red nacional de concesionarios</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>