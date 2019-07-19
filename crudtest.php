<?php
include("recursos/conexion.php");
session_start();
include("templates/header.php");
include("templates/menuadm.php");



?>



<hr>
<section>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="text-center">Panel de Control - TEST</h2>
        <div class="jumbotron img-rounded bg-agua" style="margin:20px">
          <h3 class="text-center">Tabla de Test en Sistema </h3>
          <div class="text-center m-3">
            <a href="editartest.php" type="button" value="Editar" class="btn btn-success">Agregar Preguntas a un Test</a>
          </div>

          <form action="vertest.php" method="GET">
            <table class="table table-striped">
              <thead class="thead-green">
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">ID</th>
                  <th scope="col">Título</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Gestionar</th>
                </tr>
              </thead>
              <tbody>

                <?php

                $consulta = "SELECT * FROM test";

                $resultado = mysqli_query($conexion, $consulta) or die("<strong>ALGO SALIÓ MAL CON LA CONSULTA </strong>");
                while ($fila = mysqli_fetch_array($resultado)) {
                  $tip = $fila['tipo_test'];
                  switch ($tip) {
                    case "tipt01":
                      $tipo = "Vocacional";
                      break;
                    case "tipt02":
                      $tipo = "Personalidad";
                      break;
                    case "tipt03":
                      $tipo = "Interes Profesional";
                  }
                  ?>
                  <tr>
                    <th scope="row"><?php echo $tipo ?></th>
                    <td><?php echo $fila['cod_test'] ?></td>
                    <td><?php echo $fila['nom_test'] ?></td>
                    <td><?php echo $fila['desc_test'] ?></td>
                    <td>
                    <td>
                      <input type="hidden" name="codtesst" value="<?php echo $fila['cod_test'] ?>"><button type="submit" id="ver" name="ver" value="<?php echo $fila['cod_test'] ?>" class="btn btn-info">Ver</button>
                      <input type="button" value="On/Off" class="btn btn-dark">
                      <input type="submit" name="eliminar" value="Eliminar" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Advertencia!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>¿Esta seguro que desea eliminar este Test?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                              <!--<input type="submit" name="eliminar" class="btn btn-danger" value="Confirmar">-->
                              <button type="button" class="btn btn-danger">Eliminar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php }
                mysqli_close($conexion);
                ?>
              </tbody>
            </table>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>
<?php include("templates/footeradm.php"); ?>