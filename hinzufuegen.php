<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="font/fontawesome-6.5.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/bootstrap.min.js" defer></script>
  <title>Hinzufügen | Architektur Mustermann</title>
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
            <h1 class="mb-5 text-uppercase mt-4 h1-undertitle">Projekt hinzufügen</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <form method="POST" action="hinzufuegen_action.php" enctype="multipart/form-data">
              <div class="form-group mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group mb-3">
                <label for="subtitel">Subtitel:</label>
                <input type="text" class="form-control" id="subtitel" name="subtitel" required>
              </div>
              <div class="form-group mb-3">
                <label for="beschreibung">Beschreibung:</label>
                <textarea class="form-control" id="beschreibung" name="beschreibung" required></textarea>
              </div>
              <div class="form-group mb-3">
                <label for="nutzflaeche">Nutzfläche:</label>
                <input type="text" class="form-control" id="nutzflaeche" name="nutzflaeche" required>
              </div>
              <div class="form-group mb-3">
                <label for="planungsbeginn">Planungsbeginn:</label>
                <input type="date" class="form-control" id="planungsbeginn" name="planungsbeginn" required>
              </div>
              <div class="form-group mb-3">
                <label for="fertigstellung">Fertigstellung:</label>
                <input type="date" class="form-control" id="fertigstellung" name="fertigstellung" required>
              </div>
              <div class="form-group mb-3">
                <label for="bauzeit">Bauzeit:</label>
                <input type="text" class="form-control" id="bauzeit" name="bauzeit" required>
              </div>
              <div class="form-group mb-3">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto" onchange="previewImage(this)" required>
                <img id="foto_vorschau" src="" alt="Projektfoto" class="img-fluid mt-2" style="max-width: 300px;">
              </div>
              <!-- Weitere Felder entsprechend hinzufügen -->
              <div class="row justify-content-between">
                <div class="col-md-4">
                  <a href="list.php" class="btn btn-two">Zurück</a>
                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-two">Speichern und Hinzufügen</button>
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
