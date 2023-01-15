<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName );

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}

try{
    $conn = new PDO("mysql:host=$serverName;dbname=$dBName", $dBUserName, $dBPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}



