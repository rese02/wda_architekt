<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="font/fontawesome-6.5.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/bootstrap.min.js" defer></script>
  <title>Kontakt | Architektur Mustermann</title>
</head>
<body>
  <header>
    
  <?php include 'nav.php'; ?>

  </header>

  <main class="">
    <section id="buero">
      <hr class="mt-5 d-none d-md-block"> <!-- nur in der Desktop-Ansicht -->
      <hr class="w-50 d-md-none mt-5"> <!-- nur in der mobilen Ansicht  -->
        <div class="container-fluid">
          <h1 class="mb-5 text-uppercase mt-4 h1-undertitle">Kontakt</h1>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="offset-1 col-11">
              <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.693939989076!2d13.421130576445886!3d47.37889170367412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4776d35ac0a1d647%3A0x4a064ba2d50df488!2sLP%20architektur%20%7C%20ZT%20GmbH!5e0!3m2!1sde!2sit!4v1713641644369!5m2!1sde!2sit" width="1050" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                      <p class="fw-bolder text-uppercase">Adresse</p>
                      <p>Untere Marktstraße 2 <br>
                        5541 Altenmarkt/PG <br>
                        Österreich</p>
                      <p>Email: <a href="mailto:">office@mustermann-arch.at</a></p>
                      <p>Telefon: <Tel class=":">+43 123 456 789</Tel></p>  
                  </div>
              </div>
          </div>
      </div>
  </section>

</main>


<?php include 'footer.php'; ?>

</body>
</html>