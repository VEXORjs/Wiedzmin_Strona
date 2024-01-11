<?php
// Pobieranie danych z formularza
$username = $_POST['username'];
$password = $_POST['password'];

// Tutaj należy dodać logikę weryfikacji użytkownika
// Na potrzeby przykładu zakładamy, że istnieje użytkownik o nazwie "admin" i haśle "password"
$poprawna_nazwa_uzytkownika = "admin";
$poprawne_haslo = "password";

if ($username === $poprawna_nazwa_uzytkownika && $password === $poprawne_haslo) {
    // Użytkownik prawidłowy, można przekierować na inną stronę
    header("Location: index.html");
    exit();
} else {
    // Błędne dane logowania
    echo "Nieprawidłowa nazwa użytkownika lub hasło";
}
?>
