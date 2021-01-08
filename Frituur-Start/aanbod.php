<?php 
  $banner_img = "images/brandon-morgan-19496-unsplash.jpg"; 
  $banner_text = "Onze aanbod!";
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
      </div>
      <section class="section aanbod-container">
        <div class="container">
        <?php foreach ($aanbod as $naam => $item) {
          include('./includes/aanbod-item.php');
        } ?>
        </div>
        <div class="text-center">
          <a href="offerte.php" class="cta-button">Bereken hier uw prijs!</a>
        </div>
      </section>
    </main>
  </div>

  <?php include('./includes/main-footer.php') ?>


  
</body>
</html>