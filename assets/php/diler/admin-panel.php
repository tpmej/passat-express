<?php
// Start sesji.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - PassatExpress</title>
</head>
<body>
    <button onclick="location.href='./dashboard.php'">dashboard.php</button>
    <h1>admin-panel.php</h1>
    <?php
    echo "ID:    " . $_SESSION['id'] . "<br>";
    echo "login: " . $_SESSION['login'] . "<br>";
    echo "super: " . $_SESSION['super'] . "<br>";
    ?>
</body>
</html>