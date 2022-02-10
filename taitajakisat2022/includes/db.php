<?php

$servername = "localhost";
$user = "root";
$password = "";
$database = "palsta_db";


$connect = new mysqli($servername, $user, $password, $database);

if ($connect->connect_error){
    die("Connection failed: " . $connect->connect_error);
}

$connect->set_charset("utf8");

?>