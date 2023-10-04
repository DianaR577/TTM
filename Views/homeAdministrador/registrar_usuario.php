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
    <title>Administrador - Registrar Usuario</title>

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
                        <h3 class="widget-header">Registro de usuario</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="basic-elements">
                                            
                                            <form action="../../Controllers/registrarUserAdmin.php" method="POST" enctype="multipart/form-data">
                                                
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label>Identificación:</label>
                                                        <input type="text" class="form-control" placeholder="Ej:80749473" required name="id_user">
                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label>Tipo de Identificación:</label>
                                                        <select required name="tipo_doc" id="" class="form-control">
                                                            <option value="">Seleccion una opcion</option>
                                                            <option value="1">CC</option>
                                                            <option value="2">CE</option>
                                                            <option value="3">PASAPORTE</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label>Nombre:</label>
                                                        <input type="text" class="form-control" placeholder="Ej:Luis" required name="nombre">
                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label>Apellido:</label>
                                                        <input type="text" class="form-control" placeholder="Ej:Gomez" required name="apellido">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Correo electrónico:</label>
                                                        <input type="email" class="form-control" placeholder="Ej:ejemplo@gmail.com" required name="email">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Teléfono</label>
                                                        <input type="number" class="form-control" placeholder="Ej:3154942891" required name="telefono">
                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label>Rol:</label>
                                                        <select required name="rol" id="" class="form-control">
                                                            <option value="">Selecciona una opcion</option>
                                                            <option value="1">Administrador</option>
                                                            <option value="3">Cliente</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label>Estado:</label>
                                                        <select required name="estado" id="" class="form-control">
                                                            <option value="">Selecciona una opcion</option>
                                                            <option value="1">Activo</option>
                                                            <option value="2">Pendiente</option>
                                                            <option value="3">Bloqueado</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <label>Foto de Usuario:</label>
                                                        <input type="file" class="form-control" name="foto" accept=".jpeg, .jpg, .png, .gif">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-main-sm btn-flat  mt-3 w-100">
                                                    Registrar usuario
                                                </button>

                                            </form>
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