<?php 
    $server="localhost";
    $username="root";
    $password="root";
    $database="riode_db";

    $conn=mysqli_connect($server, $username, $password, $database );

    if(!$conn){
        echo " <script> alert(' Connection Failed') </script> ";
    }
?>