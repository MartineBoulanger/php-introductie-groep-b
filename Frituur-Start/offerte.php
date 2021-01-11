<?php 
  $banner_img = "images/brandon-morgan-105310-unsplash.jpg"; 
  $banner_text = "Bereken jouw prijs!";
  include('./aanbod_array.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Frituur</title>
</head>
<body>

  <div class="page-content">
  <?php include('./includes/main-nav.php') ?>
  <?php include('./includes/banner.php') ?>

    <main class="content">
      <div class="container">
        <div class="text-center section">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium accusamus eius unde, expedita ullam quisquam quibusdam, eum sequi illo excepturi a distinctio exercitationem rem voluptatem laboriosam quaerat. Reiciendis, incidunt sint.
          </p>
        </div>

				<!-- Uitkomst enkel tonen als formulier verzonden is -->
        <div class="offerte-uitkomst text-center">
          <p>Voor 20 personen</p>
          <h2>€320</h2>
          <p>Inclusief vaste kost: 100eur</p>

          <a class="cta-button" href="offerte.php">Bereken opnieuw!</a>
        </div>

				<!-- Formulier enkel tonen als het nog niet verstuurd is. -->
        <form class="offerte-form">
          <p>
            <label for="aantal"><b>Aantal personen</b>:</label>
            <input type="number" value="20">
          </p>
          <p><b>Kies je formule:</b></p>
          <div class="formules">
          <?php include('./includes/offerte-item.php') ?>
          </div>
          <p class="text-center">
            <input type="submit" value="Berekenen!">
          </p>
        </form>
      </div>
    </main>
  </div>

  <?php include('./includes/main-footer.php') ?>


  
</body>
</html>