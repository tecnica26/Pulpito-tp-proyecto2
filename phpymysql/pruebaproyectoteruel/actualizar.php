<?php
//esto es para incluir el otro archivo
include("conexion.php");
//actualizar 
$user = "jasicompany";
$pass = "modoincognito";
$newuser = "hola";
$id = 9;

mysqli_query($conexion , "UPDATE usuarios SET nombre_usuario = '$newuser' WHERE id = '$id'");
mysqli_close($conexion);
?>