<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten aus dem Formular abrufen
    $name = $_POST['name'];
    $subtitel = $_POST['subtitel'];
    $beschreibung = $_POST['beschreibung'];
    $nutzflaeche = $_POST['nutzflaeche'];
    $planungsbeginn = $_POST['planungsbeginn'];
    $fertigstellung = $_POST['fertigstellung'];
    $bauzeit = $_POST['bauzeit'];

    // Dateiupload verarbeiten, falls ein Foto hochgeladen wurde
    if ($_FILES['foto']['error'] === 0) {
        $filename = get_uploaded_file($_FILES['foto']['name'], $_FILES['foto']['tmp_name']);
    } else {
        $filename = '';
    }

    // SQL-Abfrage vorbereiten
    $sql = "INSERT INTO arch_projekte (arch_projekte_name, arch_projekte_subtitel, arch_projekte_beschreibung, arch_projekte_nutzflaeche, arch_projekte_planungsbeginn, arch_projekte_fertigstellung, arch_projekte_bauzeit, arch_projekte_foto) 
            VALUES ('$name', '$subtitel', '$beschreibung', '$nutzflaeche', '$planungsbeginn', '$fertigstellung', '$bauzeit', '$filename')";

    // SQL-Abfrage ausführen
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Erfolgsmeldung setzen
        $success_message = "Projekt erfolgreich gespeichert und hinzugefügt!";
    } else {
        // Fehlermeldung setzen
        $error_message = "Fehler beim Speichern des Projekts.";
    }
} else {
    // Falls die Anfrage keine POST-Anfrage ist, eine Fehlermeldung setzen
    $error_message = "Ungültige Anfrage.";
}

function get_uploaded_file($file, $tmp_file) {
    $newName = time() . '_' . $file;
    $destination = 'img/' . $newName;

    if (move_uploaded_file($tmp_file, $destination)){
        return $newName;
    } else {
        return '';
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="font/fontawesome-6.5.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/bootstrap.min.js" defer></script>
  <title>Projekt hinzufügen | Architektur Mustermann</title>
</head>
<body>
  <header>
    <?php include 'nav_back.php'; ?>
  </header>

  <main class="">
    <section id="add-projekt">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if (isset($success_message)) { ?>
                <h1 class="mb-5 text-uppercase mt-4 h1-undertitle"><?php echo $success_message; ?></h1>
                <a href="list.php" class="btn btn-two">Zurück zur Liste</a>
            <?php } elseif (isset($error_message)) { ?>
                <h1 class="mb-5 text-uppercase mt-4 h1-undertitle"><?php echo $error_message; ?></h1>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  </main>

</body>
</html>
