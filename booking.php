<?php
session_start();
?>

<form method="post" action="confirm.php">
  Name: <input type="text" name="name" required><br>
  Date: <input type="date" name="date" required><br>
  Room Type: 
  <select name="room">
    <option>Single</option>
    <option>Double</option>
    <option>Suite</option>
  </select><br>
  <button type="submit">Book</button>
</form>