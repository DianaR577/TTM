<?php

require_once("../../Models/conexion.php");
require_once("../../Models/consultas.php");
require_once("../../Models/seguridadAdministrador.php");
require_once("../../Controllers/mostrarInfoAdmin.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Administrador - Administradores Resgistrados</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="../images/favicon.png" rel="shortcut icon">

  <!-- Link  stylesheet dashboard -->
  <link href="../dashboard/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
  <!-- <link href="../css/styleDashboarNoCol.css" rel="stylesheet"> -->


  
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
  include("nav-admin.php");
?>
  <!--==================================
=            User Profile            =
===================================-->

  <section class="dashboard section">
    <!-- Container Start -->
    <div class="container-fluid">
      <!-- Row Start -->
      <div class="row">
        <?php
            include("menu-include.php")//col-lg-3
        ?>
          <div class="col-lg-9">
          <!-- Recently Favorited -->
          <div class="widget dashboard-container my-adslist">
            <h3 class="widget-header">Administradores registrados</h3>
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr class="text-left">
                            <th>Foto</th>
                            <th>Identificación</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                                cargarAdministradores();
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
    </div>
  </section>




  <!--============================
=            Footer            =
=============================-->

  <?php
		include("footer-include.php")
	?>

  <!-- 
Font awesome
=====================================-->
<script src="https://kit.fontawesome.com/3b8b956f1a.js" crossorigin="anonymous"></script>



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