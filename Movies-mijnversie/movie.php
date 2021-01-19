<!-- 

   Opsplitsen in include files
    - moviecard.php
    - footer.php (jaartal via PHP afdrukken)

  Array inlezen en juiste film opzoeken  
    -> $id = $_GET['id'];
    -> Juiste velden afdrukken in de tekst
    -> Reviews overlopen
    -> Gebruik een IF structuur en toon een melding "<p>Er zijn nog geen reviews</p>" als er geen reviews zijn.
        -> bv. iron man 3

  BONUS: Related movies opzoeken uit array en overlopen
    -> hergebruik de MovieCard include file
    -> Toon de volledige Related movies sectie ENKEL als er gerelateerde films zijn
 -->

<?php
include('./includes/movie_array.php');
$id = $_GET['id'];
$movie = $movies[$id];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <title>Iron Man - Marvel Movies</title>
</head>

<body>

  <div class="page-content">
    <div class="container">
      <h1><img src="images/marvel-logo.png" alt="Marvel Studios"></h1>
      <p class="text-center"><a href="index.php" class="back-btn">Back to list</a></p>
      <?php include('./includes/moviedetails.php') ?>
      <?php include('./includes/relatedmovies.php') ?>
    </div>
  </div>

  <?php include('./includes/footer.php') ?>

</body>

</html>