<?php
require_once "recursos/conexion.php";
include('templates/header.php');
include('templates/menuadm.php');
session_start();
?>
<?php
@$codtest = $_GET['ver'];
$consulta = "SELECT * FROM test WHERE cod_test = '$codtest'";
$resultado = mysqli_query($conexion, $consulta) or die("<strong>ALGO SALIÓ MAL CON LA CONSULTA </strong>");
$fila = mysqli_fetch_array($resultado);

?>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="jumbotron bg-agua">
                <h1 class="display-5"><?php echo $fila['nom_test'] ?></h1>
                <p class="lead">ID del tipo: <strong><?php echo $fila['tipo_test'] ?></strong></p>
                <hr class="my-2">
                <p><?php echo $fila['desc_test'] ?></p>
                <hr>

                <?php
                $consulta2 = "SELECT * FROM pregunta WHERE fk_test = '$codtest'";
                $resultado2 = mysqli_query($conexion, $consulta2) or die("<strong>ALGO SALIÓ MAL CON LA CONSULTA </strong>");
                //$fila2 = mysqli_fetch_array($resultado2);
                while ($fila2 = mysqli_fetch_array($resultado2)) {

                $consulta3 = "SELECT * FROM respuesta ";
                $resultado3 = mysqli_query($conexion, $consulta3) or die("<strong>ALGO SALIÓ MAL CON LA CONSULTA </strong>");
                $fila3 = mysqli_fetch_array($resultado3); ?>
                <div class="accordion" id="accordionExample">
                    <div class="card bg-agua border-info">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $fila2['detalle_preg']?>
                                </button>
                            </h2>
                        </div>
                
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <label for=""><h4>Alternativas:</h4></label> <br>
                                <P><strong>A</strong>: Me gusta</P>
                                <P><strong>B</strong>: No me gusta</P>
                                <P><strong>C</strong>: Me es indiferente</P>
                            </div>
                            <div class="col d-flex justify-content-end mb-3">
                                <!-- <input class="btn btn-primary btn-sm" type="button" value="Editar"> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>



        </div>
    </div>
</div>

<?php
include('templates/footeradm.php');
?>