<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "supreme_ip";

    // Create connection
    $conn = mysqli_connect ($servername, $username, $password,$db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    date_default_timezone_set("Asia/Dhaka");
?>