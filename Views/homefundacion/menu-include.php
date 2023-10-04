<head>
  <link rel="stylesheet" href="../css/styleDashboarNoCol.css">
</head>

<div class="col-lg-3">
  <div class="sidebar">
    <!-- User Widget -->
    <?php
      perfil();
    ?>
    <!-- Dashboard Links -->
    <div class="widget user-dashboard-menu">
      <ul>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-solid fa-plus"></i>Registrar
          </a>
          <!-- Dropdown list -->
          <ul class="drop-down-menu">
            <li><a class="dropdown-item" href="registrar_eventos.php"><i class="fa fa-user"></i>Eventos</a></li>
            <li><a class="dropdown-item" href="registrar_mascotas.php"><i class="fa fa-home"></i>Macotas</a></li>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-solid fa-eye"></i>Ver
          </a>
          <!-- Dropdown list -->
          <ul class="drop-down-menu">
            <li><a class="dropdown-item" href="ver_eventos.php"><i class="fa fa-user"></i>Eventos</a></li>
            <li><a class="dropdown-item" href="ver_mascotas.php"><i class="fa fa-user"></i>Mascotas</a></li>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa-solid fa-file-arrow-down"></i>Reportes
          </a>
          <!-- Dropdown list -->
          <ul class="drop-down-menu">
            <li><a class="dropdown-item" href="reporte_eventos.php"><i class="fa fa-user"></i>Eventos</a></li>
            <li><a class="dropdown-item" href="reporte_mascotas.php"><i class="fa fa-user"></i>Mascotas</a></li>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<script src="https://kit.fontawesome.com/3b8b956f1a.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/jquery@3.7.0/dist/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $(".dropdown-slide").on("mouseover", function () {
      $(this).find(".drop-down-menu").fadeIn(10);
    });
    $(".dropdown-slide").on("mouseleave", function () {
      $(this).find(".drop-down-menu").faceOut(10);
    });
  });


</script>