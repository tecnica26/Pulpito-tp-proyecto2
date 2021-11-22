<?php
session_start();
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





<header class="header">
			<h1>
                <a href="index.php">PULPITO</a>    
            </h1>
			<div class="sign-buttons">

			
			<?php
if(isset($_SESSION['usuario'])){
echo "Bienvenido  ". $_SESSION ['usuario']."<br><br>" ;
echo "<a href = 'vistas/logout.php' >Salir</a>";
}

else{
	
	echo "<a href='./vistas/login.php'>Ingresar</a> <a href='./vistas/register.php'>Registrarme</a> ";
}
?>
			</div>
</header>

		
		<div class="content-container">
		<!-- if estas logueado,nostrar -->
		<div class="recos-container">

			<article class="rec-card">
				<div class="rec-img-container">
					<a href="">
						<img class="rec-img" src="https://contentv2.tap-commerce.com/cover/large/9789878317090_1.jpg?id_com=1113" alt="SOBRE HÉROES Y TUMBAS  V1 image">
					</a>
				</div>
				<div class="rec-body">
					<div class="rec-title">
						<b title="SOBRE HÉROES Y TUMBAS  V1" class="rec-name">
							SOBRE HÉROES Y TUMBAS  V1
						</b>
					</div>
					<div class="rec-description">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, perspiciatis.
					</div>
					<div class="rec-ver-mas">
						<a href="">Ver más</a>
					</div>
				</div>
			</article>
			<article class="rec-card">
				<div class="rec-img-container">
					<a href="">
						<img class="rec-img" src="https://contentv2.tap-commerce.com/cover/large/9789878317090_1.jpg?id_com=1113" alt="SOBRE HÉROES Y TUMBAS  V1 image">
					</a>
				</div>
				<div class="rec-body">
					<div class="rec-title">
						<b title="SOBRE HÉROES Y TUMBAS  V1" class="rec-name">
							SOBRE HÉROES Y TUMBAS  V1
						</b>
					</div>
					<div class="rec-description">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, perspiciatis.
					</div>
				
					<div class="rec-ver-mas">
						<a href="">Ver más</a>
					</div>
				</div>
			</article>
			<article class="rec-card">
				<div class="rec-img-container">
					<a href="">
						<img class="rec-img" src="https://contentv2.tap-commerce.com/cover/large/9789878317090_1.jpg?id_com=1113" alt="SOBRE HÉROES Y TUMBAS  V1 image">
					</a>
				</div>
				<div class="rec-body">
					<div class="rec-title">
						<b title="SOBRE HÉROES Y TUMBAS  V1" class="rec-name">
							SOBRE HÉROES Y TUMBAS  V1
						</b>
					</div>
					<div class="rec-description">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, perspiciatis.
					</div>
					<div class="rec-ver-mas">
						<a href="">Ver más</a>
					</div>
				</div>
			</article>
		
		</div>
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
					<td><?php echo $mostrar ['nombre']?></td>
				</tr>
				<?php
				}
				?>
			</table>
			<!-- if no estas login,,,no mostrar -->
				<!-- <p>no estas logueado amigue</p>
				<a href="./vistas/login.php">logueate perro anashex</a> -->
			</div>
		<footer class="footer">
				<a href="./vistas/acerca.html">Quienes Somos?</a>
				| 
				<a href="./vistas/acerca.html">Terminos Y Condiciones</a>
		</footer>
	</div>
</body>
</html>




