<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "test01";

    $conn = new PDO("mysql:hostname=$hostname;dbname=$dbname;",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Connetion Success.";
?>