<?php
//Con la siguiente linea importaremos nuestra conexión
include("recursos/Conexion.php");
session_start();

//recibimos elementos del archivo index.html y los pasamos a variable locales
@$run = $_POST['run'];
@$pass = $_POST['pass'];

// Iniciamos nuestra consulta a la BASE de Datos( almacenada en una variable local)
$consulta = "SELECT * FROM usuario WHERE rut_usr = '" . $run . "' AND pass_usr = '" . $pass . "'";
/* llamamos a la función mysqli_query para ejecutar la consulta en la conexión correcta
		para esto mysqli_query requiere de 2 parametros:
			1) La conexión que indicara la BD en el Servidor determinado.
			2) La consulta de Base de Datos en cuestión
*/
$resultado = mysqli_query($conexion, $consulta) or die("<strong>Algo Salio mal con la CONSULTA :( </strong>");

$encontrados = mysqli_num_rows($resultado);
if ($encontrados > 0) {
	//guardamos los datos del usuario válido en el arreglo global de sesion
	$filaEncontrada = mysqli_fetch_assoc($resultado);
	$_SESSION['run'] = $filaEncontrada['rut_usr'];
	$_SESSION['nombreCompleto'] = $filaEncontrada['nom_usr'] . " " . $filaEncontrada['ape_usr'];
	$_SESSION['tipousr'] = $filaEncontrada['tipo_usuario'];
	$run = $filaEncontrada['rut_usr'];
	$nombre = $filaEncontrada['nom_usr'];
	$apellido = $filaEncontrada['ape_usr'];
	$mail = $filaEncontrada['mail_usr'];
	$fono = $filaEncontrada['fono_usr'];
	$pass = $filaEncontrada['pass_usr'];
} else {
	//Si la sesión no esta iniciada redirecionara al index
	if ($_SESSION['tipousr'] == "") {
		header("location: /index.html");
	}
}



//Ahora mostramos el resultado de la consulta de Base de Datos

$consulta2 = "SELECT * FROM usuario";
$resultado2 = mysqli_query($conexion, $consulta2) or die("<strong>Algo Salio mal con la CONSULTA :( 222 </strong>");
include("templates/header.php");
if ($_SESSION['tipousr'] == "tip01") { //ADMINISTRADOR
	header("location: /avanza/crudtest.php");
} else if ($_SESSION['tipousr'] == "tip02") { //ALUMNO LISTO
	include("templates/menualum.php");
	?>
	<div class="container">
		<div class="row mt-3 justify-content-center">
			<div class="col-lg-5 col-md-5 bg-somb border-success rounded">
				<div class="row mt-3 align-items-center">
					<div class="col-lg-4 col-md-4 text-center">
						<img src="icon/management.png" width="" alt="">
						<a href="">Editar perfil</a>
					</div>
					<div class="col-lg-8 col-md-8">
						<h5 class="">Datos de tu perfil: </h5>
						<label for="run">Rut: <?php echo $run ?></label><br>
						<label for="nombre">Nombre: <?php echo $nombre ?></label><br>
						<label for="apellido">Apellido: <?php echo $apellido ?></label><br>
						<label for="mail">Mail: <?php echo $mail ?></label><br>
						<label for="fono">Fono: <?php echo $fono ?></label>
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-md-1"></div>
			<div class="col-lg-5 col-md-5 bg-som border-success rounded">
				<div class="row mt-3 ">
					<div class="col-lg-4 col-md-4 text-center">
						<img src="icon/tarea.png" width="" alt="">
					</div>
					<div class="col-lg-8 col-md-8">
						<h5 class="">Test Disponibles: </h5>
						<div class="container">
							<div class="row">
								<table class="table table-striped">
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
												<td><?php echo $fila['nom_test'] ?></td>
											</tr>
										<?php }
										mysqli_close($conexion);
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
} else if ($_SESSION['tipousr'] == "tip03") {
	include("templates/menuprof.php");
	header("location: /avanza/portalProfe.php");
} else if ($_SESSION['tipousr'] == "tip04") {
	include("templates/menuins.php");
} else { }
?>




<?php
if ($_SESSION['tipousr'] == "tip01") {
	include("templates/footeradm.php");
} else if ($_SESSION['tipousr'] == "tip02") {
	include("templates/footer.php");
} else if ($_SESSION['tipousr'] == "tip03") {
	include("templates/footer.php");
} else if ($_SESSION['tipousr'] == "tip04") {
	include("templates/footer.php");
} else { }
?>