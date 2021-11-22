<?php
session_start();
if(isset($_SESSION['usuario'])){
	header("Location: ../index.php");
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PULPITO | LOGIN</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<a href="../index.php">Volver</a>
	<br><br>
	<hr>

<div class="content-container">    
	<div class="login-container">
		<h2 class="section-title">Login</h2>
		<form action="" method="POST">
			<div>
				<input autofocus="true" class="form-input" type="text" name="user" placeholder="Username" required="true">
			</div>
			<div>
				<input class="form-input" type="password" name="pass" placeholder="Contraseña" required="true">
			</div>
			<div>
				<input class="form-input form-input-submit" type="submit" name="login" value="Ingresar">
			</div>
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
		header("Location: ../index.php");
	}
	else{
		echo "el usuario no existe o escribio mal algo, intente de nuevo";
	}
		
}
?>
		<small>¿No tienes una cuenta?
			<a class="mute" href="./register.php">Registrate</a>
		</small>
	</div>
</div>


</body>
</html>