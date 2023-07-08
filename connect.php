<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "find";

        $conn = mysqli_connect ('localhost','root','','find');
        if(!$conn){
            die("error occured while connecting to database" .mysqli_connect_error());
        }
?>