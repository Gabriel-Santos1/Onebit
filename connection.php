<?php 

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "company";

    if($conn = mysqli_connect($server, $user, $pass, $bd)){
        //echo "connect";
    } 
    else
        //echo "Error";
?>