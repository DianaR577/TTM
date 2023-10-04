<!DOCTYPE html>

<html lang="en">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Registro usuario externo</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta required name="description" content="Agency HTML Template">
  <meta required name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta required name="author" content="Themefisher">
  <meta required name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="../images/favicon.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="../plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="../plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../plugins/slick/slick.css" rel="stylesheet">
  <link href="../plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

  <link href="../css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


  <?php 
		include("nav-clientSite.php");
	?>

  <section class="login border-top-1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 align-item-center">
          <div class="login-content border border">

            <div class="login-form">
            <h3 class="bg-gray p-4 text-center">Registro de fundación</h3>

              <form action="../../Controllers/registrarFundacionEx.php" method="POST">
                <fieldset class="p-4">
                  <div class="row">
                    <div class="form-group col-lg-6" name>
                      <label>Identificación:</label>
                      <input type="text" class="form-control" placeholder="Ej: 1234567890-1" required name="id_user">
                    </div>
              
                    <div class="form-group col-lg-6">
                      <label>Tipo de Identificación:</label>
                      <select id="tipo_doc" class="form-control" required style="width: 100%;" name="tipo_doc">
                        <option value="">Seleccion una opción</option>
                        <option value="4">NIT</option>
                        <option value="1">CC</option>
                      </select>
                    </div>
              
                    <div class="form-group col-lg-12 ">
                      <label>Nombre de la fundación:</label>
                      <input type="text" class="form-control" placeholder="Ej: Patitas Solidarias" required name="nombre">
                    </div>
              
                    <div class="form-group col-lg-6">
                      <label>Correo electrónico:</label>
                      <input type="email" class="form-control" placeholder="Ej: patitassolidarias@gmail.com" required name="email">
                    </div>
              
                    <div class="form-group col-lg-6">
                      <label>Teléfono:</label>
                      <input type="number" class="form-control" placeholder="Ej: 3154942891" required name="telefono">
                    </div>
              
                    <div class="form-group col-lg-6">
                      <label>Contraseña:</label>
                      <input type="password" class="form-control" placeholder="Ej: **********" required name="clave">
                    </div>
              
                    <div class="form-group col-lg-6">
                      <label>Confirmar contraseña:</label>
                      <input type="password" class="form-control" placeholder="Ej: **********" required name="clave2">
                    </div>
              
                  </div>
                  <button type="submit" class="btn btn-login font-weight-bold mt-4 ">Registrarse</button>
                  <a class="mt-3 d-inline-block text-primary d-block text-center" style="font-size: 16px; cursor: pointer;" href="register.php">Volver al registro de usuario</a>
                  <a class="mt-3 d-block text-primary text-center" style="font-size: 16px;" href="login.php">¿Ya tiene cuenta? Iniciar sesión</a>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="popup-important">
    <div class="popup-cont login-fundacion">
      <h3>Para la identificación de la fundación</h3>
      <p>Si la entidad está registrada tanto en la CCB (Cámara de Comercio de Bogotá) como en la DIAN (Dirección de Impuestos y Aduanas Nacionales), por favor regístrese utilizando el NIT de la fundación. En caso contrario, utilice la identificación del representante legal de la fundación."</p>
      <a class=" entendido" href="#" id="close">Entendido</a>
    </div>
  </div>
  <!--============================
=            Footer            =
=============================-->
	<!-- Footer Bottom -->
	<?php
		include("footer-include.php")
	?>

<!-- 
Scripts abrir popup
=====================================-->
<script src="https://unpkg.com/jquery@3.7.0/dist/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function () {

    $("#close").on("click", function () {
      $("#popup-important").fadeOut(100);
    });
  });
</script>

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

  <script src="../js/script.js"></script>


</body>

</html>