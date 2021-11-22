<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "", "pulpito");
    
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    
    // Escape user inputs for security
    $nombre = $mysqli->real_escape_string($_REQUEST['nombredelete']);
    
    // Attempt insert query execution
    $sql = "DELETE FROM obras WHERE nombre = '$nombre'";
    if($mysqli->query($sql) === true){
        echo "Se elimino correctamente";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }
    
    // Close connection
    $mysqli->close();
?>