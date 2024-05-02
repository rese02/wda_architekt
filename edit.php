<?php
include 'connect.php';

// Überprüfen, ob die Projekt-ID vorhanden und gültig ist
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $projekt_id = $_GET['id'];

    // SQL-Abfrage, um die Daten des Projekts abzurufen
    $sql = "SELECT * FROM wda_architekt.arch_projekte WHERE arch_projekte_id = $projekt_id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $projekt = mysqli_fetch_assoc($result);
    } else {
        echo "Projekt nicht gefunden.";
        exit;
    }
} else {
    echo "Ungültige Projekt-ID.";
    exit;
}

// Wenn das Formular gesendet wurde (nach dem Bearbeiten)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
    // Hier kannst du die aktualisierten Daten verarbeiten und in die Datenbank speichern
    // Zum Beispiel:
    $name = $_POST['name'];
    $subtitel = $_POST['subtitel'];
    $beschreibung = $_POST['beschreibung'];
    // Weitere Felder entsprechend hinzufügen und verarbeiten

    // Verarbeitung des Bilduploads, falls ein neues Bild ausgewählt wurde
    if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $foto_tmp_name = $_FILES['foto']['tmp_name'];
        $foto_name = $_FILES['foto']['name'];
        $foto_extension = pathinfo($foto_name, PATHINFO_EXTENSION);
        $foto_new_name = uniqid('', true) . '.' . $foto_extension;
        $foto_destination = 'img/' . $foto_new_name;

        // Lade das neue Bild hoch und ersetze das alte Bild
        if (move_uploaded_file($foto_tmp_name, $foto_destination)) {
            // Lösche das alte Bild, wenn es existiert
            if (!empty($projekt['arch_projekte_foto'])) {
                unlink('img/' . $projekt['arch_projekte_foto']);
            }
            // Aktualisiere den Datensatz in der Datenbank mit dem neuen Bild
            $update_sql = "UPDATE wda_architekt.arch_projekte SET arch_projekte_name = '$name', arch_projekte_subtitel = '$subtitel', arch_projekte_beschreibung = '$beschreibung', arch_projekte_foto = '$foto_new_name' WHERE arch_projekte_id = $projekt_id";
            $update_result = mysqli_query($conn, $update_sql);

            if ($update_result) {
                echo "Projekt erfolgreich aktualisiert!";
                // Nach dem Speichern direkt zur Liste zurückkehren
                echo '<script>window.location.href = "list.php";</script>';
                exit; // Um sicherzustellen, dass die Weiterleitung wirksam ist
            } else {
                echo "Fehler beim Aktualisieren des Projekts: " . mysqli_error($conn);
            }
        } else {
            echo "Fehler beim Hochladen des Bildes.";
        }
    } else {
        // Wenn kein neues Bild ausgewählt wurde, aktualisiere nur die anderen Daten
        $update_sql = "UPDATE wda_architekt.arch_projekte SET arch_projekte_name = '$name', arch_projekte_subtitel = '$subtitel', arch_projekte_beschreibung = '$beschreibung' WHERE arch_projekte_id = $projekt_id";
        $update_result = mysqli_query($conn, $update_sql);

        if ($update_result) {
            echo "Projekt erfolgreich aktualisiert!";
            // Nach dem Speichern direkt zur Liste zurückkehren
            echo '<script>window.location.href = "list.php";</script>';
            exit; // Um sicherzustellen, dass die Weiterleitung wirksam ist
        } else {
            echo "Fehler beim Aktualisieren des Projekts: " . mysqli_error($conn);
        }
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
  <title>Edit | Architektur Mustermann</title>
</head>
<body>
  <header>
    <?php include 'nav_back.php'; ?>
  </header>

  <main class="">
    <section id="edit-projekt">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="mb-5 text-uppercase mt-4 h1-undertitle">Projekt bearbeiten</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <form method="POST" enctype="multipart/form-data">
              <!-- Hier Daten des Projekts anzeigen -->
              <div class="form-group mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : $projekt['arch_projekte_name']; ?>">
              </div>
              <div class="form-group mb-3">
                <label for="subtitel">Subtitel:</label>
                <input type="text" class="form-control" id="subtitel" name="subtitel" value="<?php echo isset($_POST['subtitel']) ? $_POST['subtitel'] : $projekt['arch_projekte_subtitel']; ?>">
              </div>
              <div class="form-group mb-3">
                <label for="beschreibung">Beschreibung:</label>
                <textarea class="form-control" id="beschreibung" name="beschreibung"><?php echo isset($_POST['beschreibung']) ? $_POST['beschreibung'] : $projekt['arch_projekte_beschreibung']; ?></textarea>
              </div>
              <div class="form-group mb-3">
                <label for="nutzflaeche">Nutzfläche:</label>
                <input type="text" class="form-control" id="nutzflaeche" name="nutzflaeche" value="<?php echo isset($_POST['nutzflaeche']) ? $_POST['nutzflaeche'] : $projekt['arch_projekte_nutzflaeche']; ?>">
              </div>
              <div class="form-group mb-3">
                <label for="planungsbeginn">Planungsbeginn:</label>
                <input type="date" class="form-control" id="planungsbeginn" name="planungsbeginn" value="<?php echo isset($_POST['planungsbeginn']) ? $_POST['planungsbeginn'] : $projekt['arch_projekte_planungsbeginn']; ?>">
              </div>
              <div class="form-group mb-3">
                <label for="fertigstellung">Fertigstellung:</label>
                <input type="date" class="form-control" id="fertigstellung" name="fertigstellung" value="<?php echo isset($_POST['fertigstellung']) ? $_POST['fertigstellung'] : $projekt['arch_projekte_fertigstellung']; ?>">
              </div>
              <div class="form-group mb-3">
                <label for="bauzeit">Bauzeit:</label>
                <input type="text" class="form-control" id="bauzeit" name="bauzeit" value="<?php echo isset($_POST['bauzeit']) ? $_POST['bauzeit'] : $projekt['arch_projekte_bauzeit']; ?>">
              </div>
              <div class="form-group mb-3">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto" onchange="previewImage(this)">
                <img id="foto_vorschau" src="img/<?php echo $projekt['arch_projekte_foto']; ?>" alt="Projektfoto" class="img-fluid mt-2" style="max-width: 300px;">
              </div>

              <!-- Weitere Felder entsprechend hinzufügen -->

              <div class="row justify-content-between">
                <div class="col-md-4">
                  <!-- Nur noch ein Button für Speichern und Zurück -->
                  <button type="submit" class="btn btn-two" name="save">Speichern & Zurück</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script>
    function previewImage(input) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('foto_vorschau').src = e.target.result;
      }
      reader.readAsDataURL(input.files[0]);
    }
  </script>

</body>
</html>
