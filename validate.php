<?php


// validate.php
session_start();

$valid_username = "mahbub";
$valid_password = "123456";

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

// Corrected comparison operator
if ($valid_username === $username && $valid_password === $password) {
    $_SESSION['authenticated'] = 1;    


    // Store the number of failed attempts before successful login
    if (isset($_SESSION['failed_attempts'])) {
        $_SESSION['last_failed_attempts'] = $_SESSION['failed_attempts'];
        unset($_SESSION['failed_attempts']); // Reset
    }


    
    header("Location: /"); 
    exit();
} else {
    if (!isset($_SESSION['failed_attempts'])) {
        $_SESSION['failed_attempts'] = 1;
    } else {
        $_SESSION['failed_attempts'] += 1;
    }

    echo "This is unsuccessful attempt number " . $_SESSION['failed_attempts'];
    echo "<p>You entered an incorrect username or password. Please enter the correct credentials.</p>";
    echo '<p><a href="/login.php">Go back to the login page</a></p>';
}
?>
