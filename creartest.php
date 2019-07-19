<?php
include("recursos/conexion.php");
session_start();
include("templates/header.php");
include("templates/menuadm.php");

?>

<?php
if (isset($_POST['enviar'])) {
    $tipotest = $_POST['tipotest'];
    $idtest = $_POST['idtest'];
    $titulotest = $_POST['titulotest'];
    $desctest = $_POST['desctest'];
    $npreg = $_POST['npreg'];
    $errores;
    echo var_dump($_POST);
    //echo "<h1>" . $titulotest . "</h1>"  ;

    if (!empty($tipotest) && ($tipotest != "Seleccione...")) {
        $tipotest_valido = true;
    } else {
        $tipotest_valido = false;
        $errores['tipotest'] = "Debe seleccionar un tipo de test";
    }

    // if(!empty($idtest)){
    //     $idtest_valido = true;
    // }else{
    //     $idtest_valido = false;
    //     $errores['idtest'] = "debe ingresar un id válido";
    // }

    if (!empty($titulotest)) {
        $titulotest_valido = true;
    } else {
        $titulotest_valido = false;
        $errores['titulotest'] = "Debe ingresar un titulo";
    }

    if (!empty($desctest)) {
        $desctest_valido = true;
    } else {
        $desctest_valido = false;
        $errores['desctest'] = "Debe ingresar una descripción";
    }

    if (!empty($npreg)) {
        $npreg_valido = true;
    } else {
        $npreg_valido = false;
        $errores['npreg'] = "Debe ingresar una cantidad de preguntas";
    }

    $guardar_test = false;

    if (!empty($errores)) {
        $guardar_test = true;
        //echo '<h1>datos validos</h1>';
    } else {
        //echo "<h1>datos validos</h1>";
        //echo "$errores";
    }

    if ($guardar_test = true) {
        $sql = "INSERT INTO test (cod_test, nom_test, cant_preg, desc_test, tipo_test, pregunta_test) VALUES ('$idtest','$titulotest','$npreg','$desctest','$tipotest','GR01')";
        $insert = mysqli_query($conexion, $sql) or die("<strong> FALLO EL INSERT </strong>");
    }
    if ($insert) { ?>
        <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-lg-8">
                    <div class="card p-3 border-info">
                        <div class="card-body text-center">
                        <div class="alert alert-success" role="alert">
                            <strong>Test ingresado Correctamente</strong>
                        </div>
                            <a href="crudtest.php" class="btn btn-warning" type="button" value="Agregar Preguntas">Ir al panel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        //echo "FALLO";
    }
} else {

    ?>


    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-8">
                <div class="card ">
                    <img class="card-img-top" src="" alt="">
                    <div class="card-head bg-warning text-center">
                        <h4 class="card-title pt-2 ml-2">Crear Test</h4>
                    </div>
                    <div class="card-body text-left bg-agua">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <form name="creartest" action="creartest.php" method="POST">
                                        <label for="tipodetest">Seleccione un tipo de test:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="tipodetest">Tipo</label>
                                            </div>

                                            <?php
                                            $consulta = "SELECT * FROM tipo_test";
                                            $resultado = mysqli_query($conexion, $consulta) or die("<strong>A LGO SALIÓ MAL CON LA CONSULTA </strong>");

                                            echo "<select class='custom-select' name='tipotest' id='tipodetest'>";
                                            echo "<option selected>Seleccione...</option>";

                                            while ($row = mysqli_fetch_array($resultado)) {
                                                echo "<option value=\"" . $row['cod_tipo_test'] . "\">" . $row['nom_tipo_test'] . "</OPTION>";
                                            }
                                            mysqli_close($conexion);
                                            echo "</select>";
                                            ?>
                                        </div>



                                        <div class="form-group">
                                            <label for="idtest">ID Test</label>
                                            <input class="col-md-2 form-control" type="text" id="idtest" placeholder="T03" name="idtest">
                                            <label for="titest">Titulo del Test</label>
                                            <input class="col form-control" type="text" id="titest" name="titulotest">

                                        </div>

                                        <div class="form-group">
                                            <label for="desc">Descripcion</label>
                                            <textarea type="text" name="desctest" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="npreg">Seleccione la cantidad de preguntas:</label>
                                            <input type="number" min=1 name="npreg" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="enviar" class="form-control btn btn-warning" data-toggle="modal" data-target="#confirmar" value="Confirmar">



                                            <!-- <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="confirmar" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmar">Aviso</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>El test se creo exitosamente</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success">Aceptar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                        </div>
                                    </form>
                                <?php
                                }  //fin else
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("templates/footeradm.php"); ?>