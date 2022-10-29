<?php


//function db() {
    //set your configs here
    $servername = "127.0.0.1";
    $user = "root";
    $db = "zuriphp";
    $password = "";
    $conn = mysqli_connect($servername, $user, $password, $db);
    if(!$conn){
        die("Database connection failed: ");
    }
    else{
        echo "Connected to  database successfully";
    }

?>
