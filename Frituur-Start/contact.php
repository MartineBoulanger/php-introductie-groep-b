<?php 
  $banner_img = "images/elli-o-43178-unsplash.jpg"; 
  $banner_text = "Contacteer ons!";
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

        <div class="message">
          Het bericht is verstuurd!
        </div>

        <form class="contact-form" method="post">
          <p>
            <label for="naam">Naam</label>
            <input type="text" id="naam">
          </p>
          <p>
            <label for="email">Email</label>
            <input type="text" id="email">
          </p>
          <p>
            <label for="bericht">Bericht</label>
            <textarea id="bericht"></textarea>
          </p>
          <p>
            <label>
              <input type="checkbox"> 
              Ja, ik heb de privacy policy gelezen en ik ga akkoord met de voorwaarden.
            </label>
          </p>
          <p>
            <input type="submit" value="Verstuur bericht!">
          </p>
        </form>
      </div>
    </main>
  </div>

  <?php include('./includes/main-footer.php') ?>


  
</body>
</html>