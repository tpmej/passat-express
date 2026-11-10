<?php
//Start sesji.
session_start();

// Definicja $blad bo php ryczy.
$blad = null;

// Sprawdzenie czy logowanie-serwer.php zapisał coś do zmiennej $_SESSION[zalogowano].
if (isset($_SESSION['zalogowano'])) {
    // Jeśli tak. Sprawdzenie czy $_SESSION[zalogowano] jest true.
    if ($_SESSION['zalogowano'] === true) {
        header("Location: dashboard.php"); // Przekierowanie do dashboard.php
        unset($_SESSION['zalogowano']); // Czyszczenie statusu zalogowania, aby zapobiec niechcianym przekierowaniom.
        exit; // Koniec skryptu.
    }

    // Jeśli nie.
    $blad = true; // Ustawienie błędu.
    unset($_SESSION['zalogowano']); // Czyszczenie statusu zalogowania, aby błąd pokazał się raz, a nie za każdym wejściem na stronę w tej sesji.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassatExpress - Logowanie</title>
</head>
<body>
    <!--Formularz-->
    <form action="../serwer/logowanie-serwer.php" method="post">
        <p>Nazwa użytkownika:</p>
        <input type="text" name="login">
        <p>Hasło:</p>
        <input type="password" name="haslo">
        <button type="submit">Wyślij</button>
    </form>

        <?php
    if ($blad === true) {
        echo '<p>Zły login lub hasło</p>';
    }
    ?>
</body>
</html>