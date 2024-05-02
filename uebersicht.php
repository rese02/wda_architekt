<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="font/fontawesome-6.5.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/bootstrap.min.js" defer></script>
  <title>Übersicht</title>
</head>
<body>
  <header>
    <?php include 'nav.php'; ?>
  </header>

  <main>
    <section>
      <hr class="mt-5 d-none d-md-block"> 
      <hr class="w-50 d-md-none mt-5"> 
      <div class="container">
        <div class="row">
          <?php
          // Verbindung zur Datenbank herstellen
          include 'db_connect.php';
          
          if ($conn) {
            $sql = "SELECT * FROM wda_architekt.arch_projekte";
            $result = mysqli_query($conn, $sql);
          
            if ($result && mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="col-md-6">
                  <div class="img-fluid">
                    <img src="img/<?php echo $row['foto']; ?>" alt="<?php echo $row['name']; ?>">
                    <figcaption class="mt-4">
                      <h3><?php echo $row['name']; ?></h3>
                      <p><?php echo $row['subtitel']; ?></p>
                      <p><?php echo $row['beschreibung']; ?></p>
                      <p><strong>Nutzfläche:</strong> <?php echo $row['nutzflaeche']; ?> <br>
                         <strong>Planungsbeginn:</strong> <?php echo $row['planungsbeginn']; ?> <br>
                         <strong>Fertigstellung:</strong>  <?php echo $row['fertigstellung']; ?><br>
                         <strong>Bauzeit:</strong>  <?php echo $row['bauzeit']; ?></p>
                    </figcaption>
                  </div>
                </div>
          <?php
              }
            } else {
                echo "Keine Projekte gefunden";
            }
          }
          ?>
        </div>
      </div>
    </section>
  </main>

</body>
</html>
