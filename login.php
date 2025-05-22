<?php
// login.php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login Page</h1>

<?php
// Display failed attempts, if any
if (isset($_SESSION['failed_attempts'])) {
    echo "<p>This is unsuccessful attempt number " . $_SESSION['failed_attempts'] . "</p>";
}
?>

<p>Please enter your username and password:</p>

<form action="/validate.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
