<?php
session_start();

$valid_username = "admin";
$valid_password = "1234";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
    exit();
} else {
    $_SESSION['error'] = "Invalid username or password!";
    header("Location: index.php");
    exit();
}
?>
