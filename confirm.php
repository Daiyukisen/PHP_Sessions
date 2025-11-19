<?php
session_start();

$_SESSION['booking'] = [
    'name' => $_POST['name'],
    'date' => $_POST['date'],
    'room' => $_POST['room']
];

header("Location: summary.php");
exit;
?>