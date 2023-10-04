<header>
  <div class="container-fluid header-container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light navigation">
          <a class="navbar-brand" href="../../index.php">
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
                <a class="nav-link nav-item" href="fundaciones.php">Fundaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mascotas.php">Mascotas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="events.php">Eventos</a>
              </li>
              <!-- <li class="nav-item">
									<a class="nav-link" href="Views/clientSite/donation.php">Donación</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="aboutUs.php">Acerca de Nosotros</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-10">
              <li class="nav-item">
                <a class="nav-link login-button" href="login.php">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link login-button nav-button" href="register.php">Registrarse</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<script>
  navbar = document.querySelector(".navbar-nav").querySelectorAll("li.nav-item");
  console.log(navbar);

  navbar.forEach(element => {
    element.addEventListener("click", function(){
      navbar.forEach(nav=>nav.classList.remove('activa'))

      this.classList.add('activa')
    })
  });
</script>