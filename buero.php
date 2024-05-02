<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="font/fontawesome-6.5.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/bootstrap.min.js" defer></script>
  <title>Büro | Architektur Mustermann</title>
</head>
<body>
  <header>
    
  <?php include 'nav.php'; ?>

  </header>

  <main class="">
    <section id="buero">
      <hr class="mt-5 d-none d-md-block"> <!-- nur in der Desktop-Ansicht -->
      <hr class="w-50 d-md-none mt-5"> <!-- nur in der mobilen Ansicht  -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 img-fluid">
                    <h1 class="mb-5 text-uppercase mt-4 h1-undertitle">Büro</h1>
                    <img src="img/Tom-Lechner.png" alt="Tom-Lechner">
                    <figcaption class="mt-4"> Tom-Lechner | CEO</figcaption>
                </div>
                <div class="col-md-4 mt-7">
                    <img src="img/Christian-Ruthner.png" alt="Christian-Ruthner">
                    <figcaption class="mt-4"> Christian-Ruthner | Technischer Zeichner</figcaption>
                </div>
                <div class="col-md-4 mt-7">
                  <img src="img/Inga-Jesussek.png" alt="Christian-Ruthner">
                  <figcaption class="mt-4"> Christian-Ruthner | Projektplanerin</figcaption>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mt-5">
                  <img src="img/Fritz-Schenne.png" alt="Fritz-Schenne">
                  <figcaption class="mt-4"> Fritz-Schenne | Technischer Zeichner</figcaption>
              </div>
              <div class="col-md-4 mt-5">
                  <img src="img/Lukas-Hafner.png" alt=" Lukas-Hafner">
                  <figcaption class="mt-4"> Lukas-Hafner | Projektplaner</figcaption>
              </div>
              <div class="col-md-4 mt-5">
                <img src="img/Vanessa-Steger.png" alt="Vanessa-Steger">
                <figcaption class="mt-4"> Vanessa-Steger | Architektenassistentin</figcaption>
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
                  <h3 class="mb-5 mt-4 text-uppercase">Infos</h3>
                  <div class="ml-md-3">
                      <p class="fw-bolder text-uppercase">Öffnungszeiten</p>
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