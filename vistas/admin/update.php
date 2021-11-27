	


<?php
	
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "", "pulpito");
    
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    
    // Escape user inputs for security
	$nombreactualizar = $mysqli->real_escape_string($_REQUEST['nombreactualizar']);
    $nombreupdate = $mysqli->real_escape_string($_REQUEST['nombreupdate']);
    $descripcionupdate = $mysqli->real_escape_string($_REQUEST['descripcionupdate']);
    $img_linkupdate = $mysqli->real_escape_string($_REQUEST['img_linkupdate']);
    $linkupdate = $mysqli->real_escape_string($_REQUEST['linkupdate']);
    // Attempt insert query execution
    $sql = "UPDATE obras SET nombre = '$nombreupdate', img_link = '$img_linkupdate', descripcion = '$descripcionupdate', link = '$linkupdate' WHERE nombre = '$nombreactualizar'";
    if($mysqli->query($sql) === true){
        echo "Se actualizo correctamente <a href='../../index.php'>VOLVER HOME<a>";
        
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    
    // Close connection
    $mysqli->close();
?>