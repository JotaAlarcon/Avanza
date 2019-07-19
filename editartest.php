<?php
include("templates/header.php");
include("templates/menuadm.php");
include("recursos/Conexion.php");
session_start();
?>
<?php
@$codtest = $_GET['ver'];
$consulta = "SELECT * FROM test WHERE cod_test = '$codtest'";
$resultado = mysqli_query($conexion, $consulta) or die("<strong>ALGO SALIÓ MAL CON LA CONSULTA </strong>");
$fila = mysqli_fetch_array($resultado);

?>
<?php
//echo var_dump($_POST);
if (isset($_POST['enviar'])) {
    $cod_test = $_POST['cod_test'];
    if (isset($_POST['preg'])) {
        $preg = $_POST['preg'];
    } else { }
    if (isset($_POST['resp1'])) {
        $resp1 = $_POST['resp1'];
    } else { }
    if (isset($_POST['resp2'])) {
        $resp2 = $_POST['resp2'];
    } else { }
    if (isset($_POST['resp3'])) {
        $resp3 = $_POST['resp3'];
    } else { }




    
    if (!empty($preg)) {
        $preg_valido = true;
    } else {
        $preg_valido = false;
        echo '<div class="alert alert-primary" role="alert">
            <strong>seleccione la respuesta para la alternativa a</strong>
        </div>';
        //$errores['tipotest'] = "Debe seleccionar un tipo de test";
    }

    if (!empty($resp1) && ($resp1 != "Seleccione...")) {
        $resp1_valido = true;
    } else {
        $resp1_valido = false;
        echo '<div class="alert alert-primary" role="alert">
            <strong>seleccione la respuesta para la alternativa a</strong>
        </div>';
        //$errores['tipotest'] = "Debe seleccionar un tipo de test";
    }
    if (!empty($resp2) && ($resp2 != "Seleccione...")) {
        $resp2_valido = true;
    } else {
        $resp2_valido = false;
        echo '<div class="alert alert-primary" role="alert">
            <strong>seleccione la respuesta para la alternativa b</strong>
        </div>';
        //$errores['tipotest'] = "Debe seleccionar un tipo de test";
    }
    if (!empty($resp3) && ($resp3 != "Seleccione...")) {
        $resp3_valido = true;
    } else {
        $resp3_valido = false;
        echo '<div class="alert alert-primary" role="alert">
            <strong>seleccione la respuesta para la alternativa c</strong>
        </div>';
        //$errores['tipotest'] = "Debe seleccionar un tipo de test";
    }

    if ($resp1_valido && $resp2_valido && $resp3_valido) {
        // $buscartest = "SELECT * FROM test";
        // $restest = mysqli_query($conexion, $buscartest)or die("FALLO DE CONSULTA POR TEST");

        // $buscarpreg = "SELECT * FROM pregunta"or die("FALLO DE CONSULTA POR PREGUNTA");
        // $restest = mysqli_query($conexion, $buscarpreg);
        $num = rand(5, 100);
        $sql = "INSERT INTO pregunta (cod_pregunta, detalle_preg, fk_test) VALUES ('$num','$preg','$cod_test')";
        $insert = mysqli_query($conexion, $sql) or die("<strong> FALLO EL INSERT </strong>");
        if ($insert) {
            echo '<div class="alert alert-success" role="alert">
            <strong>Pregunta ingresada correctamente</strong>
        </div>';
        } else {
            echo '<div class="alert alert-success mt3" role="alert">
            <strong>Error al ingresar la pregunta</strong>
            </div>';
        }
    }
} else { }
?>






<div class="container">
    <div class="row mt-3 d-flex justify-content-center">
        <!-- <div class="col-lg-6">
            <div class="card ">
                <img class="card-img-top" src="" alt="">
                <div class="card-head bg-warning text-center">
                    <h4 class="card-title pt-2 ml-2">Editar Test</h4>
                </div>
                <div class="card-body text-left bg-agua">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <form action="#">
                                    <label for="tipodetest">Seleccione un tipo de test:</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="tipodetest">Tipo</label>
                                        </div>
                                        <select class="custom-select" id="tipodetest">
                                            <option selected>Seleccione...</option>
                                            <option value="1">Personalidad</option>
                                            <option value="2">Psico-social</option>
                                            <option value="3">Interes profesional</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="titest">Titulo del Test</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="desc">Descripcion</label>
                                        <textarea type="text" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="npreg">Seleccione la cantidad de preguntas:</label>
                                        <input type="number" min=1 class="form-control">
                                    </div>
                                    <div class="row ">
                                    <div class="col d-flex justify-content-between ">
                                        <div class="form-group">
                                            <a href="#" class="form-control btn btn-warning">Guardar cambios</a>
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="form-control btn btn-success">Agregar preguntas</a>
                                            
                                        </div>
                                    </div>



                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-lg-12">
            <div class="card">
                <img class="card-img-top" src="" alt="">
                <div class="card-head bg-warning text-center">
                    <h4 class="card-title pt-2 ml-2">Preguntas y respuestas</h4>
                </div>
                <div class="card-body text-left bg-agua">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <form action="editartest.php" method="POST">
                                    <!-- <label for="idpreg">ID pregunta:</label>
                                    <div class="form-group">
                                        <input class="form-control col-md-2" type="text" readonly="true" value="P001">
                                    </div> -->
                                    <label for="tipotest">Seleccione un Test: </label>
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="tipodetest">Código</label>
                                            </div>

                                            <?php
                                            $consulta = "SELECT * FROM test";
                                            $resultado = mysqli_query($conexion, $consulta) or die("<strong>A LGO SALIÓ MAL CON LA CONSULTA </strong>");

                                            echo "<select class='custom-select' name='cod_test' id='cod_test' value='cod_test'>";
                                            echo "<option selected>Seleccione...</option>";

                                            while ($row = mysqli_fetch_array($resultado)) {
                                                echo "<option value=\"" . $row['cod_test'] . "\">" . $row['cod_test'] . "</OPTION>";
                                            }
                                            mysqli_close($conexion);
                                            echo "</select>";
                                            ?>
                                        </div>
                                    <label for="titpreg">Ingrese la pregunta:</label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="preg" id="preg" cols="30" rows="2"></textarea>
                                    </div>
                                    <div class="card bg-warning border-dark">
                                        <div class="card-body">
                                            <p class="card-text">Recuerde que cada pregunta debe estar correctamente redactada, de tal manera que no genere confusión, y resultados incorrectos</p>
                                        </div>
                                    </div>
                                    <!-- <label for="imgpreg">Selecciones una imagen o ruta de imagen.</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Ingrese ruta de la imagen" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-info" type="button" id="button-addon2">Examinar</button>
                                        </div>



                                    </div>
                                    <div class="form-group ">
                                        <a href="#" class="form-control btn btn-outline-danger">Eliminar Imagen</a>
                                    </div> -->

                            </div>
                            <div class="col-lg-6">
                                <label for="">Ingrese las respuestas posibles:</label>

                                <div class="form-check">
                                    <label for="resp1">Alternativa a:</label>
                                    <select class="form-control" name="resp1" id="resp1">
                                        <option value="nada">Seleccione...</option>
                                        <option value="me_gusta">Me gusta</option>
                                        <option value="no_me_gusta">No me gusta</option>
                                        <option value="indiferente">Me es indiferente</option>
                                    </select>
                                </div>

                                <div class="form-check">
                                    <label for="resp2">Alternativa b:</label>
                                    <select class="form-control" name="resp2" id="resp2">
                                        <option value="nada">Seleccione...</option>
                                        <option value="me_gusta">Me gusta</option>
                                        <option value="no_me_gusta">No me gusta</option>
                                        <option value="indiferente">Me es indiferente</option>
                                    </select>
                                </div>

                                <div class="form-check">
                                    <label for="resp1">Alternativa c:</label>
                                    <select class="form-control" name="resp3" id="resp3">
                                        <option value="nada">Seleccione...</option>
                                        <option value="me_gusta">Me gusta</option>
                                        <option value="no_me_gusta">No me gusta</option>
                                        <option value="indiferente">Me es indiferente</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="col mt-3 d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link btn-outline-warning" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Siguiente</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div> -->

                        </div>
                        <div class="row justify-conten-center">
                            <div class="col mt-3 ">
                                <div class="form-group ">
                                    <input class="btn btn-outline-success btn-block" type="submit" value="Confirmar" name="enviar">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>


<?php include("templates/footeradm.php"); ?>