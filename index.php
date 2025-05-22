<?php
session_start();

// Redirect if not authenticated
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: /login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mahbub</title>
</head>
<body>

<h1>Assignment 1</h1>
<p>Welcome, <?= htmlspecialchars($_SESSION['username']) ?></p>
<p>Today is <?= date("l, F j, Y, g:i A") ?></p>

<?php
if (isset($_SESSION['last_failed_attempts'])) {
    echo "<p>You had {$_SESSION['last_failed_attempts']} failed login attempt(s) before successfully logging in.</p>";
    unset($_SESSION['last_failed_attempts']);
}
?>

<p><a href="/logout.php">Click here to logout</a></p>

</body>

<footer>
    <p>&copy; 2025 Mahbub</p>
</footer>
</html>
