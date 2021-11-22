<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "", "pulpito");
    
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    
    // Escape user inputs for security
    $nombre = $mysqli->real_escape_string($_REQUEST['nombre']);
    $descripcion = $mysqli->real_escape_string($_REQUEST['descripcion']);
    $img_link = $mysqli->real_escape_string($_REQUEST['img_link']);
    
    // Attempt insert query execution
    $sql = "INSERT INTO obras (nombre, img_link,descripcion, img_link) VALUES ('$nombre','$img_link', '$descripcion', '$img_link')";
    if($mysqli->query($sql) === true){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    
    // Close connection
    $mysqli->close();
?>