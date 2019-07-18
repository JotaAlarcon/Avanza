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
            <li class="nav-item active">
              <a class="nav-link" href="somos.php">¿Quiénes Somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="app.php">Nuestra APP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registro de Docentes</a>
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
                          <input type="text" class="form-control" id="run" placeholder="19674832-8" required onchange="valRun();"> 
                          <div id="msg"></div>
                        </div>
                        <div class="form-group">
                          <label for="pass">Contraseña</label>
                          <input type="password" class="form-control" id="pass" placeholder="*******" required onchange="valPass();">
                          <div id="msg2"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" value="Iniciar" id="iniciarsesion" class="btn btn-success">
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
    </nav>
    <div class="container">
      <div class="row mt-3  rounded slideCar text-center">
        <div class="col-lg-6 col-md-6">
          <h4 class="mt-3">¿Quiénes Somos?</h4>
          <p>Somos un equipo de estudiantes de Ingeniería en Informática que buscan realizar
            un proyecto enfocado en lo que consideramos más importante en nuestras etapas de vida, la educación. </p>
          <div class="row">
            <div class="col-lg-4 mt-3">
              <img class="rounded-circle border border-white" src="img/jota.jpeg" width="100px" alt="">
              <h5>Jhonnatan Alarcón</h5>
            </div>
            <div class="col-lg-4 mt-3">
              <img class="rounded-circle border border-white" src="img/roa.jpeg" width="100px" alt="">
              <h5>Paulo Roa</h5>
            </div>
            <div class="col-lg-4 mt-3">
              <img class="rounded-circle border border-white" src="img/pau.jpeg" width="100px" alt="">
              <h5>Paulina Uribe</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <h4 class="mt-3">¿Qué es AVANZA?</h4>
          <p>Avanza es un proyecto enfocado en la orientación vocacional de los
            estudiantes de enseñanza media que están ad-portas de egresar y escoger una carrera universitaria. </p>
          <p>El proyecto avanza, no sólo busca mitigar la deserción en primer año de universidad, sino
            también generar estadísticas a largo plazo para la medición de gustos e intereses laborales por generaciones. </p>
        </div>
      </div>

    </div>
  <?php
  include("templates/footer.php");
  ?>