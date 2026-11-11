<?php
// Start sesji.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PassatExpress</title>
</head>
<body>
    <button onclick="location.href='./logowanie.php'">logowanie.php</button>
    <h1>dashboard.php</h1>
    <?php
    echo "ID:    " . $_SESSION['id'] . "<br>";
    echo "login: " . $_SESSION['login'] . "<br>";
    echo "super: " . $_SESSION['super'] . "<br>";
    ?>
    magiczny przycisk:
    <?php
    if ($_SESSION['super']==1) {
        echo '<button onclick="location.href=\'./admin-panel.php\'">admin-panel.php</button>';
    }
    ?>
    test test kolejny test test test
</body>
</html>