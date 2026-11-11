<?php
//Start sesji.
session_start();

// Odbieranie danych logowania.
$login = $_POST['login'] ?? ''; // Odbieranie loginu.
$haslo = $_POST['haslo'] ?? ''; // Odbieranie hasła.

// Połączenie z bazą danych.
$dir = __DIR__ . '/../../sql/baza.db'; // Ścieżka bazy danych.
$db = "sqlite:$dir"; // Obiekt bazy danych (sqlite).
$pdo = new PDO($db); // PHP Data Objects bazy danych.
// Ustawienia od wyświetlania blędów i czytelności tabel.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Obsługa błędów.
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Czytelność tabel.

// Sprawdzenie danych logowania.
// Zapytanie do tabeli.    
$stmt = $pdo->prepare("SELECT * FROM uzytkownicy WHERE login = ? AND haslo = ?"); // Przygotowanie zapytania z 2 miejscami do podstawienia.
$stmt->execute([$login, $haslo]); // Wykonanie zapytania z podstawieniem $login oraz $haslo.
$user = $stmt->fetch(); // Pobranie wyniku zapytania, lub false.
// Sprawdzanie obecności wprawadzonych danych logowania.
// Jeśli dane są.
if ($user) {
    session_regenerate_id(true);
    $_SESSION['zalogowano'] = true;
    $_SESSION['id']    = $user['id'];
    $_SESSION['login'] = $user['login'];
    $_SESSION['super'] = $user['super'];
} 
// Jeśli ich nie ma.
else {
    $_SESSION['zalogowano'] = false;
    $_SESSION['login'] = $login;    
}

// Powrót do strony logowania.
header("Location: ../diler/logowanie.php");
exit;