<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "demo";
    $connect = mysqli_connect($servername, $username, $password, $db_name);
    
    if(!$connect){
        die('Could not Connect My Sql:'.mysqli_connect_error());
    }
?>