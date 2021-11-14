<?php

$conexion = mysqli_connect ('localhost','root','','proyectoteruel')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pulpito</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<?php
		include('./vistas/componentes/header.php')
		?>
		
		<div class="content-container">
			<table border="1">
				<tr>
					<td>id</td>
					<td>nombre_usuario</td>
					<td>contrasenia</td>
				</tr>
				<?php
				$sql = "SELECT * from usuarios";
				$result = mysqli_query ($conexion,$sql);
				
				while ($mostrar = mysqli_fetch_array($result)){
				?>	
				
				<tr>
					<td><?php echo $mostrar ['id']?></td>
					<td><?php echo $mostrar ['nombre_usuario']?></td>
					<td><?php echo $mostrar ['contrasenia']?></td>
				</tr>
				<?php
				}
				?>
			</table>
			
			<table border="1">
				<tr>
					<td>id</td>
					<td>descripcion</td>
					<td>linkvermas</td>
				</tr>
				<?php
				$sql = "SELECT * from obras";
				$result = mysqli_query ($conexion,$sql);
				
				while ($mostrar = mysqli_fetch_array($result)){
				?>	
				
				<tr>
					<td><?php echo $mostrar ['id']?></td>
					<td><?php echo $mostrar ['descripcion']?></td>
					<td><?php echo $mostrar ['linkvermas']?></td>
				</tr>
				<?php
				}
				?>
			</table>
			</div>
		<footer class="footer">
				<a href="">Quienes Somos?</a>
				| 
				<a href="">Terminos Y Condiciones</a>
		</footer>
	</div>
</body>
</html>




