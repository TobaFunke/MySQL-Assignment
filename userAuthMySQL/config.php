<?php

//function db() {
    //set your configs here
    $host = "127.0.0.1";
    $user = "root";
    $db = "zuriphp";
    $password = "";
    $conn = mysqli_connect($host, $user, $db, $password);
    if(!$conn){
        die("Database connection failed: ");
    }
    else{
        echo "Connected to database successfully";
    }

 ?>   


