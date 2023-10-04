<?php
  require_once("../../Models/conexion.php");
  require_once("../../Models/consultas.php");
  require_once("../../Models/seguridadClient.php");
  require_once("../../Controllers/mostrarInfoClient.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Mascotas - Registrar Usuario</title>

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
  include("nav-cliente.php");
?>
<!--==================================
=            User Profile            =
===================================-->

      <div class="col-lg-9">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">Mascotas</h3>
          <section id="main-content">
    <section id="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-hover">
                 <thead>
                     <tr>
                         <th>Foto</th>
                         <th>Nombre</th>
                         <th>Edad</th>
                         <th>Raza</th>
                         <th>Vacunas</th>
                         <th>Estado de salud</th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php 
                    cargarMascotas();
                     ?>
                </tbody>
            </table>
            </div>
            </div>
            </div>
        </div>
      </div>

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
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

<script src="../js/script.js"></script>

</body>

</html>