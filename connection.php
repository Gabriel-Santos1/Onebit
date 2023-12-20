<?php 

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "company";

    if(mysqli_connect($server, $user, $pass, $bd)){
        //echo "connect";
    } 
    else
        //echo "Error";
?>