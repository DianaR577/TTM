<!DOCTYPE html>

<html lang="en">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Inicio de sesión TTM</title>

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

  <section class="login py-5 border-top-1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 align-item-center">
          <div class="border">
            <h3 class="bg-gray p-4 text-center">Inicio de sesión</h3>
            <form action="../../Controllers/iniciarSesion.php" method="POST">
              <fieldset class="p-4">
                <label>Correo electrónico:</label>
                <input class="form-control mb-3" type="text" placeholder="Ej:ejemplo@gmail.com" name="email">
                <label>Contraseña:</label>
                <input class="form-control mb-3" type="password" placeholder="Ej:**********" name="clave">
                <button type="submit" class="btn btn-login font-weight-bold mt-3">
                  Iniciar
                </button>
                <a class="mt-3 d-block text-primary text-center" href="reset_password.php">¿Olvidó su contraseña?
                </a>
                <a class="mt-3 d-block text-primary text-center" href="register.php">¿No tienes cuenta? Registrate</a>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--============================
=            Footer            =
=============================-->
  <!-- Footer Bottom -->
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

  <script src="../js/script.js"></script>
</body>

</html>