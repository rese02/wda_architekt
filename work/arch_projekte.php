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

// Zufällige Projekte aus der Datenbank abrufen
$sql = "SELECT * FROM projekte ORDER BY RAND() LIMIT 1"; // Hier limitierst du die Anzahl der zufälligen Projekte
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Projekte ausgeben
    while($row = $result->fetch_assoc()) {
        echo "<div class='project'>";
        echo "<h2>" . $row["projektname"] . "</h2>";
        echo "<p>" . $row["beschreibung"] . "</p>";
        echo "</div>";
    }
} else {
    echo "Keine Projekte gefunden";
}

if ($result->num_rows > 0) {
  // Projekte ausgeben
  while($row = $result->fetch_assoc()) {
      echo "<div class='project'>";
      echo "<h2>" . $row["arch_projekte_name"] . "</h2>"; // Spalte für den Projektnamen
      echo "<h4>" . $row["arch_projekte_subtitel"] . "</h4>"; 
      echo "<p>" . $row["arch_projekte_beschreibung"] . "</p>"; 
      echo "<p>" . $row["arch_projekte_nutzflaeche"] . "</p>"; 
      echo "<p>" . $row["arch_projekte_planungsbeginn"] . "</p>"; 
      echo "<p>" . $row["arch_projekte_fertigstellung"] . "</p>"; 
      echo "<p>" . $row["arch_projekte_bauzeit"] . "</p>"; 
      echo "<img>" . $row["arch_projekte_foto"] . "</img>"; 
      echo "</div>";
  }
} else {
  echo "Keine Projekte gefunden";
}


$conn->close();
?>
