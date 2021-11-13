<?php
//esto es para incluir el otro archivo
include("conexion.php");
//insertar desde aca a la base de datos
$user = "seba";
$pass = "1234567";

mysqli_query($conexion , "INSERT INTO usuarios(nombre_usuario, contrasenia) values ('$user','$pass')");
//ESTO ES PARA CERRAR LA CONEXION LO DE ABAJO
mysqli_close($conexion);
?>

