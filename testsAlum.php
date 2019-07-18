<?php
include("recursos/Conexion.php");
session_start();
include("templates/header.php");
include("templates/menualum.php");

?>

    <div class="container">
        <div class="row mt-3 rounded slideCar">
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8 justify-content-center">
                <table class="table table-striped text-center">
                    <h3 class="text-center">Lista de test</h3><br>
                    <form action="realizarTest.php" method="POST" >
                    <tbody>
                            <?php

                            $consulta = "SELECT * FROM test";

                            $resultado = mysqli_query($conexion, $consulta) or die("<strong>ALGO SALIÓ MAL CON LA CONSULTA </strong>");
                            while ($fila = mysqli_fetch_array($resultado)) {
                                $tip = $fila['tipo_test'];
                                switch ($tip) {
                                    case "tipt01":
                                        $tipo = "Personalidad";
                                        break;
                                    case "tipt02":
                                        $tipo = "Psico-Social";
                                        break;
                                    case "tipt03":
                                        $tipo = "Interes Profesional";
                                }
                                ?>
                                <tr>
                                    <td class="text-bold"><?php echo $fila['nom_test'] ?></td>
                                    <td><?php echo $fila['desc_test'] ?></td>
                                    <td><input type="hidden" value="<?php echo $fila['cod_test']?>"></td>
                                    <td><button type="submit" id="iniciar" name="iniciar" value="<?php echo $fila['cod_test']?>" class="btn btn-success">iniciar</button>
                                    </td>
                                </tr>
                            <?php }
                            mysqli_close($conexion);
                            ?>
                    </tbody>
                    </form>
                </table>
            </div>
        </div>
    </div>

    <?php include("templates/footer.php"); ?>