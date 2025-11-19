<?php
session_start();

if (!isset($_SESSION['booking'])) {
    echo "No booking found.";
    exit;
}

$booking = $_SESSION['booking'];
echo "<h2>Booking Summary</h2>";
echo "Name: " . $booking['name'] . "<br>";
echo "Date: " . $booking['date'] . "<br>";
echo "Room: " . $booking['room'] . "<br>";
?>