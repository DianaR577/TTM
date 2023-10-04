<header>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light navigation">
          <a class="navbar-brand" href="home.php">
            <img src="../images/logo.png" alt="Logo TTM" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto main-nav">
          <li class="nav-item">
                <a class="nav-link" href="../../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php">Dashboard</a>
              </li>
              <!-- <li class="nav-item">
									<a class="nav-link" href="Views/clientSite/donation.php">Donación</a>
              </li> -->
            </ul>
          </ul>
          <ul class="navbar-nav ml-auto mt-10">
                    <li class="nav-item">
                        <a class="nav-link login-button nav-button w-1" href="perfil.php">Editar Perfil</a>
                    </li>
                    <li class="nav-item">
                        <input type="button" id="open" class="nav-link login-button nav-button w-1" value="Cerrar Sesión">
                    </li>
                </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<?php
    confirmarCierreSesion();
?>

<script src="https://unpkg.com/jquery@3.7.0/dist/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $("#open").on("click", function () {
      $("#popup").fadeIn(10);
    });

    $("#close").on("click", function () {
      $("#popup").fadeOut(10);
    });
  });
</script>