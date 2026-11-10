<?php
// Odbieranie danych logowania.
$login = $_POST['login'];
$haslo = $_POST['haslo'];

// Połączenie z bazą danych.
$dir = './assets/sql/baza.db';
$db = "sqlite:$dir";
$pdo = new PDO($db);
// Ustawienia od wyświetlania blędów i czytelności tabel.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Sprawdzenie danych logowania.

