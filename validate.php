<?php

session_start();

$valid_username = "mahbub";
$valid_password = "password";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($valid_username=$username && $valid_password == $password) {
    echo "Login Successful";
} else {
    if (!isset($_SESSION['failed_attempts'])) {
        $_SESSION['failed_attempts'] = 1;
    } else {
        $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    }
    echo "This is unsuccessful attempt number " . $_SESSION['failed_attempts'];
}
?>
