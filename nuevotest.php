<?php
require_once "recursos/conexion.php";
echo var_dump($_POST);
if(isset($_POST['submit'])){
    $tipotest = isset($_POST['tipotest']) ? $_POST['tipotest'] : false;
    $titulotest = isset($_POST ['titulotest']) ? $_POST['tipotest'] : false;
    $dectest = isset($_POST['desctest']) ? $_POST['desctest'] : false;
    $npreg =isset($_POST['npreg']) ? $_POST['npreg'] : false;

    if(!empty($tipotest) && ($tipotest != "Seleccione...")){
        $tipotest_valido = true;
    }else{
        $tipotest_valido = false;
        $errores['tipotest'] = "Debe seleccionar un tipo de test";
    }

    if(!empty($titulotest)){
        $titulotest_valido = true;
    }else{
        $titulotest_valido = false;
        $errores['titulotest'] = "Debe ingresar un titulo";
    }

    if(!empty($desctest)){
        $desctest_valido = true;
    }else{
        $desctest_valido = false;
        $errores['desctest'] = "Debe ingresar una descripción";
    }

    if(!empty($npreg)){
        $npreg_valido = true;
    }else{
        $npreg_valido = false;
        $errores['npreg'] = "Debe ingresar una cantidad de preguntas";
    }

    $guardar_test = false;
    if(count($errores) == 0){
        $guardar_test = true; 
    }
}
?>