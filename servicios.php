<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Avanza - Orientando tu futuro</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="bg-white bg-ind">
  <header class="masthead">
    <div class="container h-100 marg">
      <div class="row justify-content-center align-items-center bg-ind">
        <div class="col-lg-9">
          <img src="img/avanzaban.png" alt="" width="80%">
          <hr class="divider my-4">
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-verdeagua rounded">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button></span>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Inicio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="somos.php">¿Quiénes Somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="app.php">Nuestra APP</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="servicios.php">Servicios</a>
            </li>
          </ul>
          <a href="" class="btn btn-light btn-sm text-dark my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal"">Iniciar Sesión</a>
          <div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesión</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="POST">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col">

                        <div class="form-group">
                          <label for="run">Rut</label>
                          <input type="text" class="form-control" id="run" placeholder="19674832-8" required="true">
                        </div>
                        <div class="form-group">
                          <label for="pass">Contraseña</label>
                          <input type="password" class="form-control" id="pass" placeholder="" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" id="iniciosesion" value="Iniciar" class="btn btn-success">
                  </div>
                </form>
              </div>
            </div>
        </div>
      </nav>
      <div class="container">
        <div class="row mt-3">
          <div class="col m-3">
            <h3 class="text-center">Nuestros Servicios</h3>
            <div class="accordion" id="accordionExample">
              <div class="card bgOth border-succes mt-2">
                <div class="card-header" id="headingOne">
                  <h2 class="">
                    <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Para Estudiantes
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    hghj
                  </div>
                </div>
              </div>
              <div class="card bgOth">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Para Colegios
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    kdjnjkdf
                  </div>
                </div>
              </div>
              <div class="card bgOth">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed text-success" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Para Instituciones de Educación Superior
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    jdhjhkd
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      include("templates/footer.php");
      ?>