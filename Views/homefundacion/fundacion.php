<?php
  require_once("../../Models/conexion.php");
  require_once("../../Models/consultas.php");
  require_once("../../Models/seguridadFundacion.php");
  require_once("../../Controllers/mostrarInfoFundacion.php");
?>

<!DOCTYPE html>


<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>Fundación específica - TTM</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

	<!-- favicon -->
	<link href="../images/favicon.png" rel="shortcut icon">

	<!-- 
  Essential stylesheets
  =====================================-->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link href="../plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="../plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
	<link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../plugins/slick/slick.css" rel="stylesheet">
	<link href="../plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/styleDashboarNoCol.css" rel="stylesheet">

</head>

<body class="body-wrapper">

<!-- header insertado con PHP -->
	<?php
		include("nav-fundacion.php");
	?>
	
	<!--=================================
=            Single Blog            =
==================================-->
	<section class="blog single-blog section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<article class="single-post">
						<p class="text-right mb-0"><a href="fundaciones.php"><i class=" fa fa-chevron-left mr-1"></i>Volver</a></p>
						<h2 >Doggy in Home  </h2>
						<ul class="list-inline">
							<li class="list-inline-item">por <a href="user-profile.html">Admin</a></li>
							<li class="list-inline-item">Nov 22, 2016</li>
						</ul>
						<img src="../../Uploads/fundaciones/fun1.png" alt="article-01">
						<p>Adopta No Compres fue creada oficialmente en julio del año 2013 como entidad Sin
							ánimo de Lucro. Sin embargo, ya llevaba ocho años de trabajo independiente;
							nace al ver la problemática de los animales abandonados, maltratados y con la
							necesidad de cambiar la vida de todos aquellos perros y gatos que llegan a
							nosotros con la esperanza de reescribir su historia.</p>

						<p>La Fundación ejerce su labor en Bogotá y en otras zonas de Colombia que han sido
							olvidadas, tales cómo: Barranquilla, Cali, Mompox, Riohacha, Montería, Tabio,
							Funza, Malambo, Soledad, San Andrés, Providencia, Ciénaga, y todo lugar donde
							podamos ofrecer ayuda, para rescatarlos, esterilizarlos mediante nuestras
							brigadas, recuperarlos, rehabilitarlos y entregarlos en adopción responsable.
							De esa forma, se les da una segunda oportunidad a cientos de animales que han
							sido víctimas de maltrato, abandono y abuso.</p>

						<p>Nuestro objetivo final es poder encontrar un hogar para cada uno de nuestros
							rescatados. Por eso en Adopta No Compres ubicamos familias y personas
							responsables interesadas en adoptar. Adicional a esta labor nos encargamos de
							hacer el seguimiento a cada uno de los animales entregados.</p>

					</article>

				</div>
				<div class="col-lg-4">
					<div class="sidebar">
						<!-- Archive Widget -->
						<div class="widget archive">
							<!-- Widget Header -->
							<h5 class="widget-header">Eventos</h5>
							<ul class="archive-list">
								<li><a href="fundacion-events.html">Adopciones y Ferias de Adopción</a>
								</li>
								<!-- Eventos donde la fundación promueve la adopción responsable de animales rescatados y proporciona una oportunidad para que las personas encuentren un nuevo compañero. -->
								<li><a href="fundacion-events.html">Campañas de Esterilización y
										Castración</a></li>
								<!-- Programas para controlar la población de animales callejeros mediante la esterilización y castración, que suelen llevarse a cabo con la colaboración de veterinarios. -->
								<li><a href="fundacion-events.html">Eventos de Recaudación de Fondos</a>
								</li>
								<!-- Actividades como cenas benéficas, subastas, paseos o carreras para recaudar dinero y recursos para el cuidado y protección de los animales. -->
								<li><a href="fundacion-events.html">Días de Puertas Abiertas</a></li>
								<!-- Jornadas en las que la fundación abre sus instalaciones al público, permitiendo que las personas conozcan su trabajo, interactúen con los animales y aprendan sobre sus necesidades. -->
								<li><a href="fundacion-events.html">Campañas de Concientización</a></li>
								<!--  Charlas educativas, proyección de documentales y campañas en redes sociales para concientizar sobre temas como el bienestar animal, la protección de especies en peligro y la importancia de la adopción. -->
								<li><a href="fundacion-events.html">Jornadas de Vacunación</a></li>
								<!-- Eventos donde se brinda atención veterinaria básica, como vacunas y desparasitación, a animales en comunidades de bajos recursos. -->
								<li><a href="fundacion-events.html">Voluntariado en Refugios</a></li>
								<!-- Días dedicados a la participación de voluntarios en tareas de limpieza, cuidado y enriquecimiento ambiental para los animales alojados en refugios. -->
								<li><a href="fundacion-events.html">Cursos de Adiestramiento y
										Comportamiento</a></li>
								<!--  Talleres para dueños de mascotas que promuevan la comprensión y el cuidado adecuado de los animales.-->
								<li><a href="fundacion-events.html">Eventos de Rescate y Emergencia</a>
								</li>
								<!-- Intervención en situaciones de desastres naturales o rescates de animales en peligro. -->
								<li><a href="fundacion-events.html">Ferias de Salud Animal</a></li>
								<!-- Jornadas que ofrecen servicios de salud gratuitos o a bajo costo, como chequeos médicos, desparasitación y cuidados veterinarios básicos. -->
							</ul>
						</div>
						<!-- Category Widget -->
						<div class="widget category">
							<!-- Widget Header -->
							<h5 class="widget-header">Adopciones</h5>
							<ul class="category-list">
								<li><a href="fundacion-adoption.html">perros <span
											class="float-right">(2)</span></a></li>
								<li><a href="fundacion-adoption.html">gatos <span
											class="float-right">(5)</span></a></li>
								<li><a href="fundacion-adoption.html">...<span
											class="float-right">x</span></a></li>
								<li><a href="fundacion-adoption.html">...<span
											class="float-right">x</span></a></li>
								<li><a href="fundacion-adoption.html">...<span
											class="float-right">x</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--============================
=            Footer            =
=============================-->

	<?php
	include("footer-include.php")
	?>

	<!-- 
Essential Scripts
=====================================-->
	<script src="../plugins/jquery/jquery.min.js"></script>
	<script src="../plugins/bootstrap/popper.min.js"></script>
	<script src="../plugins/bootstrap/bootstrap.min.js"></script>
	<script src="../plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="../plugins/tether/js/tether.min.js"></script>
	<script src="../plugins/raty/jquery.raty-fa.js"></script>
	<script src="../plugins/slick/slick.min.js"></script>
	<script src="../plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="../plugins/google-map/map.js" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

	<script src="../js/script.js"></script>

</body>

</html>