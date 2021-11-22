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
		<form action="/" method="POST">
			<div>
				<input autofocus="true" class="form-input" type="text" name="username" placeholder="Username" required="true">
			</div>
			<div>
				<input class="form-input" type="password" name="password" placeholder="Contraseña" required="true">
			</div>
			<div>
				<input class="form-input form-input-submit" type="submit" value="Ingresar">
			</div>
		</form>
		<small>¿No tienes una cuenta?
			<a class="mute" href="./register.php">Registrate</a>
		</small>
	</div>
</div>


</body>
</html>