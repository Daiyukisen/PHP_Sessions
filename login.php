<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === 'admin' && $pass === '1234') {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<form method="post">
  Username: <input type="text" name="username" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Login</button>
</form>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>