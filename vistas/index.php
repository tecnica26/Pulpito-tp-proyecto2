<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> index</title>
</head>
<body>


<?php
if(isset($_SESSION['usuarios'])){
echo "Bienvenido  ". $_SESSION ['usuarios']."<br><br>" ;
echo "<a href = 'logout.php' >Salir</a>";
}

else{
	echo "<a href = 'login.php' >Debes logearte</a> o <a href = 'register.php' >Debes registrarte</a> ";
}
?>
</body>
</html>