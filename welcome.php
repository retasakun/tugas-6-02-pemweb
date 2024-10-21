<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
    </style>
</head>
<body>

    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>You are logged in successfully.</p>
    <a href="logout.php">Logout</a>

</body>
</html>
