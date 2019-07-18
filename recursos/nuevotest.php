<?php
require_once "conexion.php";
session_start();
echo var_dump($_POST);

if(isset($_POST['enviar'])){
    $tipotest = isset($_POST['tipotest']) ;
    $idtest = isset($_POST['idtest']);
    $titulotest = isset($_POST ['titulotest']) ;
    $desctest = isset($_POST['desctest']) ;
    $npreg =isset($_POST['npreg']) ;

    echo '$titulotest'." ". '$npreg';

    if(!empty($tipotest) && ($tipotest != "Seleccione...")){
        $tipotest_valido = true;
    }else{
        $tipotest_valido = false;
        $errores['tipotest'] = "Debe seleccionar un tipo de test";
    }
    
    // if(!empty($idtest)){
    //     $idtest_valido = true;
    // }else{
    //     $idtest_valido = false;
    //     $errores['idtest'] = "debe ingresar un id válido";
    // }

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
        echo '<h1>datos validos</h1>';
     }

    if($guardar_test){
        $sql = "INSERT INTO test (cod_test, nom_test, cant_preg, desc_test, tipo_test)
        VALUES ('$idtest', '$titulotest', '$npreg', '$desctest', '$tipotest')";
        $insert = mysqli_query($conexion, $sql) or die ("<strong> FALLO EL INSERT </strong>");
    }
    if($insert){
        echo "INSERTADO";
    }else {
        echo "FALLO";
    }
}
?>