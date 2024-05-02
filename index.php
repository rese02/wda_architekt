<!DOCTYPE html>
<html lang="DE">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="font/fontawesome-6.5.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/bootstrap.min.js" defer></script>
  <script type="text/javascript" src="js/script.js" defer></script>
  <title>Architektur Mustermann </title>
</head>
<body>
  <header>

    <?php include 'nav.php'; ?>

  </header>

  <main class="">
    <h1 class="text-center">Arch.<br>MusterMann</h1>


<!-- random projects from database -->
<section id="aktuelles">
    <hr class="mt-5 d-none d-md-block"> 
    <hr class="w-50 d-md-none mt-5"> 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5 text-uppercase mt-4">Aktuelle Projekte</h2>

                <?php
                // Verbindung zur Datenbank herstellen
                include 'connect.php';
                                    
                // Aktuelles Jahr ermitteln
                $current_year = date("Y");

                // Zufälliges Projekt aus der Datenbank abrufen, das im aktuellen Jahr fertiggestellt wurde
                $sql = "SELECT * FROM wda_architekt.arch_projekte WHERE YEAR(arch_projekte_fertigstellung) = $current_year ORDER BY RAND() LIMIT 1"; 
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Projekt ausgeben
                    while($row = $result->fetch_assoc()) {
                ?>
                        <div class="project">
                            <h2><?php echo $row["arch_projekte_name"]; ?></h2> 
                            <h4><?php echo $row["arch_projekte_subtitel"]; ?></h4> 
                            <p><?php echo $row["arch_projekte_beschreibung"]; ?></p> 
                            <p><?php echo $row["arch_projekte_nutzflaeche"]; ?></p> 
                            <p><?php echo $row["arch_projekte_planungsbeginn"]; ?></p> 
                            <p><?php echo $row["arch_projekte_fertigstellung"]; ?></p> 
                            <p><?php echo $row["arch_projekte_bauzeit"]; ?></p> 
                            <img src="img/<?php echo $row["arch_projekte_foto"]; ?>" alt="<?php echo $row["arch_projekte_name"]; ?>">
                        </div>
                <?php
                    }
                } else {
                    echo "Keine Projekte gefunden";
                }

                $conn->close();
                ?>
            </div>
        </div> 
    </div>
</section>


   
    <!-- studio  -->
    <section>
      <div class="container">
          <div class="row align-items-center">
              <div class="offset-md-6 col-md-6">
                  <hr class="mt-7 d-none d-md-block"> <!-- nur in der Desktop-Ansicht -->
                   <hr class="w-50 d-md-none mt-5"> <!-- nur in der mobilen Ansicht  -->
                  <h3 class="mb-5 mt-4 text-uppercase">Studio</h3>
                  <div class="ml-md-3">
                      <p class="fw-bolder text-uppercase">Über uns</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugiat suscipit ratione, incidunt a atque quia, rem debitis iste eum, sequi magni voluptates. Consequatur officia magni aliquid libero error dolores voluptas. Consequatur officia magni aliquid libero error dolores voluptas, officiis nemo fugiat minima dicta repellendus odit iure temporibus, quisquam asperiores quis maxime delectus maiores et. Laborum incidunt aliquam eligendi, suscipit voluptate ipsa, provident beatae ab ex, nam voluptatibus!</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  

    <section>
        <div class="container">
            <div class="row">
              <hr class="w-50 mt-7 d-none d-md-block"> <!-- nur in der Desktop-Ansicht -->
              <hr class="w-50 d-md-none mt-5"> <!-- nur in der mobilen Ansicht  -->
                <h3 class="mb-5 mt-4 text-uppercase">Ausgewählte Projekte</h3>
                <div class="col-md-5">
                    <img class="img-fluid mb-4" src="img/haus_b.png"  alt="haus_b">
                </div>
                <div class="col-md-7">
                    <img class="img-fluid mb-4" src="img/haus_c.png" alt="haus_c">
                </div>
                <div class="col-md-5">
                    <img class="img-fluid mb-4" src="img/haus_d.png" alt="haus_d">
                </div>
                <div class="col-md-7">
                    <img class="img-fluid" src="img/haus_e.png" alt="haus_e">
                </div>
            </div>
        </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="offset-md-6 col-md-6">
            <hr class="mt-7 d-none d-md-block"> <!-- nur in der Desktop-Ansicht -->
            <hr class="w-50 d-md-none mt-5"> <!-- nur in der mobilen Ansicht  -->
                    <h3 class="mb-5 mt-4 text-uppercase">Dienstleistung</h3>
                    <div class="ml-md-3">
                        <p class="fw-bolder text-uppercase">Werkzeug</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugiat suscipit ratione, incidunt a atque quia, rem debitis iste eum, sequi magni voluptates. Consequatur officia magni aliquid libero error dolores voluptas. Consequatur officia magni aliquid libero error dolores voluptas, officiis nemo fugiat minima dicta repellendus odit iure temporibus, quisquam asperiores quis maxime delectus maiores et. Laborum incidunt aliquam eligendi, suscipit voluptate ipsa, provident beatae ab ex, nam voluptatibus!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <hr class="mt-7 d-none d-md-block"> <!-- nur in der Desktop-Ansicht -->
                   <hr class="w-50 d-md-none mt-5"> <!-- nur in der mobilen Ansicht  -->
                    <h3 class="mb-5 mt-4 text-uppercase">Lassen sie uns beginnen</h3>
                    <div class="ml-md-3">
                        <p>Sind Sie bereit, Ihre Träume zu verwirklichen? Kontaktieren Sie uns noch  heute, und lassen Sie uns gemeinsam den Grundstein für Ihr nächstes  Projekt legen.</p>
                        <a href="kontakt.php" class="btn-two"> 
                          <span>KONTAKT</span>
                        </a>
                    </div>   
                </div>
            </div>
        </div>
    </section>
</main>


<?php include 'footer.php'; ?>

</body>
</html>