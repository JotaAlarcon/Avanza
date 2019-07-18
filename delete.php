<?php
include("recursos/conexion.php");
include("templates/header.php");
include("templates/menuadm.php");
?>

<section>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col">
        <h2 class="text-center">Panel de Control - TEST</h2>
        <div class="jumbotron img-rounded bg-agua " style="margin:20px">
          <?php
          $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("Problemas con el server");
          mysqli_select_db($conexion, $basedatos) or die("Problemas en la Base de Datos");
          $query = "SELECT cod_test FROM test WHERE cod_test = '" . $_POST['id'] . "'";
          $registro = mysqli_query($conexion, $query);
          if ($registro1 = mysqli_fetch_array($registro)) {
            $query2 = "DELETE FROM test WHERE cod_test = '" . $_POST['id'] . "'";
            mysqli_query($conexion, $query2);
            ?>
            <div class="alert alert-success text-center" role="alert">
              Test eliminado correctamente. <br><br>
              <a href="crudtest.php" class="btn btn-success btn-lg">Volver</a>
            </div>
          <?php
          } else {
            ?>
            <div class="alert alert-danger text-center" role="alert">
              El test no pudo ser eliminado.
              <a href="crudtest.php" class="btn btn-success">Volver</a>
            </div>
          <?php
          }
          ?>
          
          
          
          <?php include("templates/footeradm.php"); ?>
        </div>
      </div>
    </div>
  </div>
</section>