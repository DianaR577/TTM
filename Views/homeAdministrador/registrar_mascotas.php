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
  <title> Mascotas - Registrar Mascotas</title>

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
  include("nav-admin.php");
?>
<!--==================================
=            User Profile            =
===================================-->
<?php
  include("menu-include2.php")
?>

      <div class="col-lg-9">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">Registrar Mascotas</h3>
          <section id="main-content">
    <section id="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
            <div class="card-body">
            <div class="basic-elements">
            <form action="../../Controllers/registrarMasAdmin.php" method="POST" enctype="multipart/form-data">
        <div class="row">

            <div class="form-group col-lg-6">
                <label>Nombre</label>
                <input type="text" class="form-control" placeholder="Ej: Simba" required name="masNombre">
            </div>

            <div class="form-group col-lg-6">
                <label>Edad</label>
                <input type="text" class="form-control" placeholder="Ej: 5 años" required name="masEdad">
            </div>

            <div class="form-group col-lg-6">
                <label>Historia</label>
                <input type="text" class="form-control" placeholder="Ingresa aquí la historia de la mascota." required name="masHistoria">
            </div>

            <div class="form-group col-lg-6">
                <label>Vacunas</label>
                <input type="text" class="form-control" placeholder="Ingresa información sobre las vacunas que tiene la mascota." required name="masVacunas">
            </div>

            <div class="form-group col-lg-6">
                <label>Raza</label>
                <input type="text" class="form-control" placeholder="Ingresa la raza de la mascota." required name="masRaza">
            </div>
        
            <div class="form-group col-lg-6">
                <label>Estado de salud</label>
                <input type="text" class="form-control" placeholder="Describe el estado de salud de la mascota." required name="masEstSalud">
            </div>
            <div class="form-group col-lg-6">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" accept=".jpeg, .jpg, .png, .gif">
            </div>
        </div>
        <button type="submit" class="btn btn-main-sm btn-flat m-b-30 m-t-30">Registrar nueva mascota</button>
        
    </form>
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