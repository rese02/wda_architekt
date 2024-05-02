<?php
include 'connect.php';

// Überprüfen, ob die Projekt-ID vorhanden ist
if (isset($_GET['id'])) {
    $projekt_id = $_GET['id'];

    // SQL-Abfrage, um das Projekt zu löschen
    $delete_sql = "DELETE FROM wda_architekt.arch_projekte WHERE arch_projekte_id = $projekt_id";
    $delete_result = mysqli_query($conn, $delete_sql);

    if ($delete_result) {
        $success_message = "Glückwunsch! Das Projekt wurde erfolgreich gelöscht.";
    } else {
        $error_message = "Es gab einen Fehler beim Löschen des Projekts: " . mysqli_error($conn);
    }
} else {
    $error_message = "Projekt-ID nicht angegeben.";
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
  <title>Delete | Architektur Mustermann</title>
</head>
<body>
  <header>
    <?php include 'nav_back.php'; ?>
  </header>

  <main class="">
    <section id="delete-projekt">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="mb-5 text-uppercase mt-4 h1-undertitle">Projekt löschen</h1>
            <?php if (isset($success_message)) { ?>
                <p><?php echo $success_message; ?></p>
            <?php } elseif (isset($error_message)) { ?>
                <p><?php echo $error_message; ?></p>
            <?php } ?>
            <a href="list.php" class="btn btn-two">Zurück zur Liste</a>
          </div>
        </div>
      </div>
    </section>
  </main>

</body>
</html>
