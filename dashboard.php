<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

echo "Welcome, " . $_SESSION['username'] . "!<br>";
echo "<a href='logout.php'>Logout</a>";
?>