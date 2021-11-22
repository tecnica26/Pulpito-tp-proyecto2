<?php
session_start();
if(isset($_SESSION['usuario'])){
	header("Location: index.php");
	
}
?>
<!DOCTYPE html>
<html>
<head>
    <title> login</title>
</head>
<body>
<form method= "POST" action ="";>
	Usuario: <br>
	<input type ="text" name="user"><br>
	Contrasenia:<br>
	<input type ="password" name="pass"><br>
    <input type ="submit" name = "login" value ="login">
	
	


</form>

<?php

if(isset ($_POST['login'])){
	require("conexion.php");
	
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	
	$validar = $conexion->query("SELECT * FROM usuarios where nombre_usuario = '$user' AND contrasenia ='$pass'");
	$contar = $validar->num_rows;
	//echo $contar;
	if($contar == 1){
		$_SESSION['usuario'] = $user;
		header("Location: index.php");
	}
	else{
		echo "el usuario no existe o escribio mal algo, intente de nuevo";
	}
		
}
?>


</body>
</html>