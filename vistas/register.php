<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pulpito | REGISTER</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<a href="../index.php">Volver</a>
	<br><br>
	<hr>



	<div class="content-container">    
		<div class="login-container">
			<h2 class="section-title">Ingresa Tus Datos</h2>
			<form action="" method="POST">
				<div>
					<input autofocus="true" class="form-input" type="text" name="user" placeholder="Username" required="true">
				</div>
				<div>
					<input class="form-input" type="password" name="pass" placeholder="Contraseña" required="true">
				</div>
				<div>
					<input class="form-input form-input-submit" type="submit" name="reg" value="Registrarme">
				</div>
			</form>
			
			<small>Ya tienes una cuenta?
				<a class="mute" href="./login.php">Ingresa</a>
			</small>
		</div>
	</div>
	
	<?php

if(isset($_POST['reg'])){
	require("conexion.php");
	
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	
	$consulta = $conexion->query("SELECT *FROM usuarios WHERE nombre_usuario ='$user'");
	$contar = $consulta->num_rows;
	if ($contar > 0){
		echo "Ponete otro nombre pa";
	}
	else{
		
	
	
	$insertar = $conexion->query("INSERT INTO usuarios(nombre_usuario,contrasenia) VALUES ('$user','$pass')");
	if ($insertar){
		echo "te has registrado correctamente";
	    }
	}
}
//en register y en (login) en la parte de pass modificar el md5 si se quiere logear el dibu porque su contraseña estaba sin md5

?>

	</body>
</html>