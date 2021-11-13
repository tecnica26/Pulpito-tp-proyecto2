<?php
//esto es para incluir el otro archivo
include("conexion.php");
//delete o borrar
$user = "jasicompany";
$pass = "modoincognito";
$newuser = "hola";
$id = 7;

mysqli_query($conexion , "DElETE FROM usuarios WHERE id = '$id'");
mysqli_close($conexion);
?>