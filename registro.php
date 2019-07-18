<!DOCTYPE html>
<html lang="en">
<?php
?>

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
<?php
include("recursos/Conexion.php");
if (isset($_POST['registro'])) {
  @$run = $_POST['run'];
  @$nombre = $_POST['nombre'];
  @$apellido = $_POST['apellido'];
  @$mail = $_POST['mail'];
  @$fono = $_POST['fono'];
  @$pass = $_POST['pass'];
  @$pass2 = $_POST['pass2'];

  $sql = "INSERT INTO `usuario`(`rut_usr`, `nom_usr`, `ape_usr`, `mail_usr`, `fono_usr`, `pass_usr`, `tipo_usuario`) VALUES ('$run','$nombre','$apellido','$mail',$fono,'$pass','tip03')";
  $insert = mysqli_query($conexion, $sql) or die("<strong> FALLO EL INSERT </strong>");
  $mensaje = "<div class='alert alert-success'><strong>Usuario Registrado</strong></div>";
}



?>

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
      </nav>



      <div class="container">
        <div class="row mt-3 justify-content-center">
          <div class="col-lg-5 col-md-5 m-3">
            <h5 class="text-center">¡Si eres profesor, te invitamos a ser parte de nuestra plataforma
              para que puedas utilizarla en tu curso y orientar a tus alumnos!</h5>
            <div class="row">
              <div class="col bg-white border border-info rounded mt-3">
                <form action="registro.php" method="POST">
                  <div class="form-group mt-3">
                    <label for="run">Rut: </label>
                    <input type="text" class="form-control" id="run" name="run" required placeholder="12345678-9" onchange="valRun()">
                    <div id="msg"></div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Maria" onchange="valNom()">
                    <div id="name"></div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="apellido">Apellido: </label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Diaz" onchange="">
                    <div id="msg3"></div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="mail">Mail: </label>
                    <input type="email" class="form-control" id="mail" name="mail" required placeholder="mail@tucorreo.com" onchange="valMail()">
                    <div id="msgm"></div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="fono">Teléfono: </label>
                    <input type="text" class="form-control" id="fono" name="fono" required placeholder="98765432" onchange="">
                    <div id="msg5"></div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="pass">Password: </label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                  </div>
                  <div class="form-group mt-3">
                    <label for="run">Repetir Password: </label>
                    <input type="password" class="form-control" id="pass2" name="pass2" required>
                    <div id="msg6"></div>
                  </div>
                  <div class="text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#advertencia">
                      Registrar Docente
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="advertencia" tabindex="-1" role="dialog" aria-labelledby="advertenciaLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="advertenciaLabel">¡Aviso!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ¡Muchas gracias por unirte! <br>
                            Pronto llegará la confirmación de tu registro.
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="registro" id="registro" value="Registro">Guardar Cambios</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      include("templates/footer.php");
      ?>