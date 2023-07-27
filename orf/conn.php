<?php 
    $servername = "sql307.epizy.com";
    $username = "epiz_31932881";
    $password = "HQPIhRiZ0bu";
    $db = "epiz_31932881_onlineroomfiner";
    $con = new mysqli($servername,$username,$password,$db);
    if(!$con)
    {
        die ("Failed to connect to the server" .$con->connect_error());
    }
    
?>