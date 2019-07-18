<?php
$servidor = "localhost"; //http://integracion.cyberls.net/phpMyAdmin/
$usuario = "root"; //root
$contrasena = ""; //inacap321
$basedatos = "avanza"; //Avanza


$conexion = mysqli_connect($servidor,$usuario,$contrasena) or die ("<strong> NO SE HA PODIDO ESTABLECER LA CONEXIÓN CON EL SERVIDOR </strong>");
mysqli_set_charset($conexion,"utf8");

$db = mysqli_select_db($conexion,$basedatos) or die ("<strong> NO SE HA PODIDO ESTABLECER LA BASE DE DATOS </strong>");
?>