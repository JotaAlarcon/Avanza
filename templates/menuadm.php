<div class="container">
  <div class="row pt-3">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-verdeagua rounded">
        <a class="navbar-brand" href="#">Avanza</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="inicio.php">Inicio </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Administrar Tests
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="creartest.php">Crear Test</a>
                <a class="dropdown-item" href="crudtest.php">Gestionar Test</a>                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Administrar Usuarios</a>
            </li>
          </ul>

          <a href="index.html" onclick="cerrarSesion()" class="btn btn-warning btn-sm text-dark my-2 my-sm-0" type="submit">Cerrar Sesión</a>

        </div>
      </nav>
    </div>

  </div>