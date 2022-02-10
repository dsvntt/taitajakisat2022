<?php

include_once "includes/db.php";

$email = $_POST['new-email'];

$email = trim($email);
$email = stripslashes($email);
$email = strip_tags($email);
$email = htmlspecialchars($email);
$email = mysqli_real_escape_string($email);

$name = $_POST['new-name'];

$name = trim($name);
$name = stripslashes($name);
$name = strip_tags($name);
$name = htmlspecialchars($name);
$name = mysqli_real_escape_string($name);

$pnumber = $_POST['new-pnumber'];

$pnumber = trim($pnumber);
$pnumber = stripslashes($pnumber);
$pnumber = strip_tags($pnumber);
$pnumber = htmlspecialchars($pnumber);
$pnumber = mysqli_real_escape_string($pnumber);

var_dump($_POST);