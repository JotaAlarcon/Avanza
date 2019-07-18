<?php
include("recursos/Conexion.php");
session_start();
include("templates/header.php");
include("templates/menualum.php"); ?>

<?php
$consulta = "SELECT * FROM test WHERE cod_test = 'T01'";
$resultado = mysqli_query($conexion, $consulta) or die("<strong>ALGO SALIÓ MAL CON LA CONSULTA </strong>");
$fila = mysqli_fetch_array($resultado);

?>

<div class="container">
    <h3 class="text-center mt-3">Tus Resultados</h3>
    <div class="row mt-3 justify-content-center">
        <div class="col-md-12 col-lg-8 bg-verdeagua2 border-success rounded ">
            <h4 class="mt-3 text-center"><strong><?php echo $fila['nom_test'] ?></strong></h4>
            <p class="text-center"><?php echo $fila['desc_test'] ?></p>
            <hr>
        
            <h5>Puntuacion de intereses</h5>
            <div class= "form-group form-inline d-flex bd-highlight">
            <label class="mr-auto bd-highlight" for="">Actividad al aire libre: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="10" readonly="true">
            </div>

            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés mecánico: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="25" readonly="true">
            </div>

            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés por el cálculo: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="18" readonly="true">
            </div>

            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés científico: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="6" readonly="true">
            </div>

            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés persuasivo: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="8" readonly="true">
            </div>
            
            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés artístico-plástico: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="4" readonly="true">
            </div>

            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés literario: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="4" readonly="true">
            </div>

            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés musical: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="0" readonly="true">
            </div>

            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés por el servicio social: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="10" readonly="true">
            </div>

            <div class= "form-group form-inline">
            <label class="mr-auto bd-highlight" for="">Interés por el trabajo de oficina: </label>
            <input class="bd-highlight form-control col-sm-2 col-lg-2 mx-sm-3" type="text" value="2" readonly="true">
            </div>

            <hr>

            <h5>Alta puntuacion en los siguientes intereses:</h5>
            <p><strong>1. Interés mecánico: 25 pts</strong><br> Un alto puntaje aquí indica interés para trabajar con máquinas y herramientas, construir o arreglar objetos mecánicos, artefactos eléctricos, muebles, etc.</p>

            <p><strong>2. Interés por el cálculo: 18 pts</strong><br> Lo poseen aquellas personas a quienes les gusta trabajar con números. Muchos ingenieros revelan también un marcado interés por las actividades relacionadas con el cálculo.</p>
<hr>
            <p>Segun tu puntuación, tu interes apunta hacia la mecánica y el cálculo.
            Te recomendamos seguir una ingenieria industrial.
            </p>
            
       
           
        </div>
    </div>
</div>
<?php include("templates/footer.php"); ?>