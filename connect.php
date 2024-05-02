<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost";
$username = "root";
$password = "root";
$database = "wda_architekt";

$conn = new mysqli($servername, $username, $password, $database);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

?>