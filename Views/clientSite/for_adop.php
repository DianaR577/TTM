<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>Mascota - TTM</title>

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

</head>

<body class="body-wrapper">

<!-- header insertado con PHP -->
	<?php
		include("nav-include.php");
	?>
	
	<!--=================================
=            Single Blog            =
==================================-->
<section class="hero-area-f">
    <div class="form">
            <div class="text-center" id="adop">
                <h1>¡Adopta una mascota!</h1>
                <p>Llena el siguiente formulario y tendrás la oportunidad de adoptar un amigo!</p>
            </div>
            <form class="formulario cuestionario">
                <p class="preguntas">
                    1. ¿Qué edad tienes?
                </p>
                    <div class="preguntas">
                        <input class="grupo_numero" type="number" id="edad" placeholder="Ingresa tu edad" required>
                    </div>
                <p class="radio_descripcion">
                    2. ¿Has tenido mascotas anteriormente?
                </p>
                    <div class="preguntas">
                        <input type="radio" id="opcion" name="opciones" value="OPCION" required>
                        <label for="radio">Sí</label>
                        <input type="radio" id="opcion" name="opciones" value="OPCION" required>
                        <label for="radio">No</label>
                    </div>
                <p class="preguntas">
                    3. ¿Actualmente tienes mascotas?
                </p>
                    <div class="preguntas">
                        <input type="radio" id="opcion0" name="opciones1" value="OPCION0" required>
                        <label for="radio">Sí</label>
                        <input type="radio" id="opcion0" name="opciones1" value="OPCION0" required>
                        <label for="radio">No</label>
                    </div>
                <p class="preguntas">
                    4. ¿Cuántas?
                </p>
                <input type="text" id="opcion1" name="opcion1">
                <p class="preguntas">
                    5. ¿Cuál es su situación laboral o fuentes de ingreso actualmente?
                </p>
                    <input type="text" id="opcion2" name="opcion2">
                <p class="preguntas">
                    6. ¿Cuenta con casa propia o renta?
                </p>
                    <input type="text" id="opcion3" name="opcion3">
                <p class="preguntas">
                    7. Si se muda de casa, de ciudad o de país en el futuro, ¿qué sucedera con su mascota?
                </p>
                    <input type="text" id="opcion4" name="opcion4">
                <p class="preguntas">
                    8. ¿Hay niños en casa? Por favor, describa sus edades.
                </p>
                    <input type="text" id="opcion5" name="opcion5">
                <p class="preguntas">
                    9. ¿La mascota tendrá acceso a cualquier lugar de la casa?
                </p>
                    <div class="preguntas">
                        <input type="radio" id="opcion6" name="opciones6" value="OPCION6" required>
                        <label for="radio">Sí</label>
                        <input type="radio" id="opcion6" name="opciones6" value="OPCION6" required>
                        <label for="radio">No</label>
                    </div>
                <p class="preguntas">
                    10. ¿Cuál es la razón por la cual quiere adoptar a la mascota?
                </p>
                    <input type="text" id="opcion7" name="opcion7">
                <p class="preguntas">
                    11. ¿Cuántas horas al día estará sola en casa la mascota?
                </p>
                    <input type="text" id="opcion8" name="opcion8">
                <p class="preguntas">
                    12. Si tiene que salir de emergencia de su ciudad, ¿con quién dejaría a su nuevo amigo?
                </p>
                    <input type="text" id="opcion9" name="opcion9">
                <p class="preguntas">
                    13. ¿Está de acuerdo que se le haga una visita previa a la mascota en su dirección de residencia?
                </p>
                    <div class="preguntas">
                        <input type="radio" id="opcion10" name="opciones10" value="OPCION10" required>
                        <label for="radio">Sí</label>
                        <input type="radio" id="opcion10" name="opciones10" value="OPCION10" required>
                        <label for="radio">No</label>
                    </div>
            </form>
            <button type="submit" class="btn btn-form font-weight-bold mt-3 cuestionario">Enviar</button>
            <button type="submit" class="btn btn-form font-weight-bold mt-3 cuestionario">Cancelar</button>
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