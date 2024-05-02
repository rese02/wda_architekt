<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="font/fontawesome-6.5.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/bootstrap.min.js" defer></script>
  <title>List | Architektur Mustermann</title>
</head>
<body>
  <header>
    <?php include 'nav_back.php'; ?>
  </header>

  <main class="">
    <section id="projekte">
      <hr class="mt-5 d-none d-md-block"> <!-- nur in der Desktop-Ansicht -->
      <hr class="w-50 d-md-none mt-5"> <!-- nur in der mobilen Ansicht  -->
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="mb-5 text-uppercase mt-4 h1-undertitle">Please Edit!</h1>
              </div>
          </div>
          <div class="row">
              <?php
              include 'connect.php';

              if ($conn) {
                  $sql = "SELECT * FROM wda_architekt.arch_projekte";
                  $result = mysqli_query($conn, $sql);

                  if ($result && mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <div class="col-md-6 img-fluid">
                              <img src="img/<?php echo $row['arch_projekte_foto']; ?>">
                              <figcaption class="mt-4">
                                  <h3><?php echo $row['arch_projekte_name'] ?></h3>
                                  <p><?php echo $row['arch_projekte_subtitel'] ?></p>
                                  <p><?php echo $row['arch_projekte_beschreibung'] ?></p>
                                  <p><strong>Nutzfläche:</strong> <?php echo $row['arch_projekte_nutzflaeche'] ?> <br>
                                      <strong>Planungsbeginn:</strong> <?php echo $row['arch_projekte_planungsbeginn'] ?> <br>
                                      <strong>Fertigstellung:</strong>  <?php echo $row['arch_projekte_fertigstellung'] ?><br>
                                      <strong>Bauzeit:</strong>  <?php echo $row['arch_projekte_bauzeit'] ?></p>
                                  <!-- Hinzufügen einer eindeutigen ID für jedes Projekt -->
                                  <a href="edit.php?id=<?php echo $row['arch_projekte_id']; ?>" class="btn btn-two mb-5 mt-3">Edit</a>
                                  <a href="delete.php?id=<?php echo $row['arch_projekte_id']; ?>" class="btn btn-two mb-5 mt-3">Delete</a>
                              </figcaption>
                          </div>
                          <?php
                      }
                  ?>
                  </div> <!-- Ende der Reihe -->
                  <?php
                  } 
              }
              ?>
          </div> <!-- Ende des Containers -->
      </div> <!-- Ende des Abschnitts -->
  </section>

  </main>

</body>
</html>
