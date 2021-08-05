<?php    
    $databaseHost = 'localhost';
    $databaseName = 'sample';
    $dbUsername = 'root';
    $dbPassword = '';    
    $mysqli = new mysqli($databaseHost, $dbUsername, $dbPassword, $databaseName); 
    if(!$mysqli)
    {
        die(mysqli_error($mysqli));
    }  
?>