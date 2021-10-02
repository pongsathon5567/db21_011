<?php

    $severname = "localhost";
    $username = "db21_011";
    $password ="db21_011";
    $dbname = "db21_011";
    $conn = new mysqli($severname,$username,$password);
    mysqli_set_charset($conn, "utf8");
    if($conn->connect_error)
    {
        die("Connection failed: ".$conn->connect_error);
    }
    if(!$conn->select_db($dbname))
    {
        die("Connection failed: ".$conn->connect_error);
    }
    
?>