<?php

$conexion = mysqli_connect ('localhost','root','','proyectoteruel')
?>

<!DOCTYPE html>
<html>
<head>
    <title> mostrar datos</title>
</head>
<body
<br>
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
	</table<>
	
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
	</table<>


		


</body>
</html>