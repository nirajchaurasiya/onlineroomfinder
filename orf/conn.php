<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "orf";
    $con = new mysqli($servername,$username,$password,$db);
    if(!$con)
    {
        die ("Failed to connect to the server" .$con->connect_error());
    }
    
?>