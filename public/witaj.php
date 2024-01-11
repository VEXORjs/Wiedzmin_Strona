<?php
session_start();

// Sprawdzanie, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    header("Location: login_form.html");
    exit();
}

// Wyświetlanie powitalnej strony
echo "Witaj, " . $_SESSION['username'] . "!";

// Tutaj można dodać inne funkcje dostępne po zalogowaniu

// Wylogowanie
echo '<br><a href="wyloguj.php">Wyloguj</a>';
?>
