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
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pulpito";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, img_link,descripcion,link FROM obras";
$result = $conn->query($sql);

		if(isset($_SESSION['usuario'])){
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "	
						<div class='recos-container'>
							<article class='rec-card'>
								<div class='rec-img-container'>
									<a href=''>
										<img class='rec-img' src='" . $row["img_link"]. "'>
									</a>
								</div>
								<div class='rec-body'>
									<div class='rec-title'>
										<b title='SOBRE HÉROES Y TUMBAS  V1' class='rec-name'>
										" . $row["nombre"]. "
										</b>
									</div>
									<div class='rec-description'>
									" . $row["descripcion"]. "
									</div>
									<div class='rec-ver-mas'>
										<a href='" . $row["link"]. "'>Ver más</a>
									</div>
								</div>
							</article>			
						</div>			
					";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		}
		else{
			echo "No estas logueade amigue";
		}
		?>
		<footer class="footer">
				<a href="./vistas/acerca.html">Quienes Somos?</a>
				| 
				<a href="./vistas/acerca.html">Terminos Y Condiciones</a>
		</footer>
	</div>
</body>
</html>




