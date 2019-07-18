<?php
include("recursos/Conexion.php");
session_start();
include("templates/header.php");
include("templates/menuprof.php"); 

if (isset($_POST['registro'])) {
  @$run = $_POST['run'];
  @$nombre = $_POST['nombre'];
  @$apellido = $_POST['apellido'];
  @$mail = $_POST['mail'];
  @$fono = $_POST['fono'];
  @$pass = $_POST['pass'];
  @$pass2 = $_POST['pass2'];

  $sql = "INSERT INTO `usuario`(`rut_usr`, `nom_usr`, `ape_usr`, `mail_usr`, `fono_usr`, `pass_usr`, `tipo_usuario`) VALUES ('$run','$nombre','$apellido','$mail',$fono,'$pass','tip02')";
  $insert = mysqli_query($conexion, $sql) or die("<strong> FALLO EL INSERT </strong>");
}
?>
      <div class="container">
        <div class="row mt-3 justify-content-center">
          <div class="col-lg-5 col-md-5 m-3">
            <h5 class="text-center">¡Registra a tus alumnos!</h5>
            <div class="row">
              <div class="col bg-white border border-info rounded mt-3">
                <form action="portalProfe.php" method="POST">
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
                    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#advertencia">
                      Registrar Alumno
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
                            ¡Hemos añadido a un alumno! <br>
                            Comunícale su clave para que pueda acceder a nuestros servicios.
                            ¡Sigue agregando a más alumnos!
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="registro" id="registro" value="Registro">Guardar Cambios</button>
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

<?php include("templates/footer.php"); ?>