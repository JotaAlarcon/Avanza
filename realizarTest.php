<?php
include("recursos/Conexion.php");
session_start();
?>
<?php include("templates/header.php"); ?>
<?php include("templates/menualum.php"); ?>


<?php
@$codtest = $_POST['iniciar'];

//TEST
$consulta2 = "SELECT * FROM test WHERE cod_test = '$codtest'";
$resultado1 = mysqli_query($conexion, $consulta2) or die("<strong>Amala consulta 2</strong>");
$encontrados = mysqli_num_rows($resultado1);
if ($encontrados > 0) {
    $fila1 = mysqli_fetch_assoc($resultado1);
    $nomtest = $fila1['nom_test'];
}
?>

<div class="container">
    <div class="row mt-3  rounded slideCar ">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-10 col-md-10 rounded bgInic ">
            <h4 for="pregunta" class="text-center mt-3"><?php echo $nomtest ?></h4><br>
            <div class="m-3">
                <table class="table table-striped">
                    <thead class="thead-green">
                        <tr>
                            <th scope="col">Sentencia</th>
                            <th scope="col">Respuesta</th>
                        </tr>
                        <?php
                        //PREGUNTA
                        $consulta = "SELECT * FROM pregunta WHERE fk_Test = '$codtest'";
                        $consulta3 = "SELECT * FROM respuesta WHERE grupoResp = 'GR01'";
                        $resultado = mysqli_query($conexion, $consulta) or die("<strong>mala consulta 3</strong>");
                        $resultado2 = mysqli_query($conexion, $consulta3) or die("<strong>mala consulta 3</strong>");

                        while ($fila = mysqli_fetch_array($resultado)) {
                            ?>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $fila['detalle_preg'] ?></td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" id="exampleRadios1" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            No me gusta
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Me es indiferente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">
                                            Me gusta
                                        </label>
                                    </div>
                                </td>
                            <?php
                            }
                            ?>
            </div>
            </td>


            </tr>


            <?php
            mysqli_close($conexion);
            ?>
            </tbody>
            </table>
            <div class="text-center">
            <a class="btn btn-success" href="resultadosAlum.php">Finalizar Test</a></div>
        </div>
    </div>
</div>
</div>

<?php include("templates/footer.php"); ?>