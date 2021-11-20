<!DOCTYPE html>
<html>
<head>
    <title> index</title>
</head>
<body>


<form method="POST" action="">
    usuarios: <br>
	<input type ="text" name="user"><br>
	contrasena:<br>
	<input type ="password" name="pass"><br>
    <input type ="submit" name = "reg" value ="Register">
</form>

<?php

if(isset($_POST['reg'])){
	require("conexion.php");
	
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);

	$consulta = $conexion->query("SELECT *FROM usuarios WHERE nombre ='$user'");
	$contar = $consulta->num_rows;
	if ($contar > 0){
		echo "Ese nombre ya esta en uso";
	}
	else{
		
	
	
	$insertar = $conexion->query("INSERT INTO usuarios(nombre,contrasena) VALUES ('$user','$pass')");
	
	if ($insertar){
		echo "te has registrado correctamente";
	    }
	}
	
}
//en register y en (login) en la parte de pass modificar el md5 si se quiere logear el dibu porque su contraseña estaba sin md5

?>

</body>
</html>
