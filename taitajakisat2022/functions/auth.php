<?php

$login = filter_var(trim($_POST['login-login']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['login-password']),
    FILTER_SANITIZE_STRING);


include_once ('../includes/db.php');

$loginSql = "SELECT * FROM users WHERE login = '$login' AND password = '$pass'";

$result = $connect->query($loginSql);

$user = $result->fetch_assoc();

if ($user == null) {
    echo "Käyttäjää ei löydy";
    exit();
}

setcookie('user', $user['login'], time() + 3600, '/');

$connect->close();

header('Location: ../support.php');
