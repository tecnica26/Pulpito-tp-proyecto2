<?php

$conexion = mysqli_connect ('localhost','root','','proyectoteruel')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<div class="container">
		<header class="header">
			<h1>PULPITO</h1>
			<div class="sign-buttons">
				<a href="./login.php">Ingresar</a>
				<a href="">Registrarme</a>
			</div>
		</header>
		<div class="content-container">    
            <div class="login-container">
                <h2 class="section-title">Ingresa Tus Datos</h2>
                <form action="/" method="POST">
                    <div>
                        <input autofocus="true" class="form-input" type="text" name="username" placeholder="Username" required="true">
                    </div>
                    <div>
                        <input class="form-input" type="password" name="password" placeholder="Contraseña" required="true">
                    </div>
                    <div>
                        <input class="form-input form-input-submit" type="submit" value="Registrarme">
                    </div>
                </form>
                <small>Ya tienes una cuenta?
                    <a class="mute" href="./login.php">Ingresa</a>
                </small>
            </div>
		</div>
		<footer class="footer">
				<a href="">Quienes Somos?</a>
				| 
				<a href="">Terminos Y Condiciones</a>
		</footer>
	</div>
</body>
</html>
