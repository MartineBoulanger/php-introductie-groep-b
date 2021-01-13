<!-- 

  Opsplitsen in include files
    - sortform.php
    - moviecard.php
    - footer.php (jaartal via PHP afdrukken)

  includes/moviearray inladen
  Array overlopen en elke film afdrukken met juiste gegevens
    - Synopsis afkorten op 100 tekens zodat het niet te lang wordt. Verwijder ook de html tags.
    - Aantal sterren tonen op (max 5 sterren) -> berekenen en afronden
    - link naar movie.php met ID in de url -> movie.php?id=3
      - op de volgende pagina kan je dat nummer gebruiken om de gekozen film uit te lezen

  BONUS: Array Sorteren via formulier
    $sort = $_GET['sort'];
    -> http://shiflett.org/blog/2011/sorting-multi-dimensional-arrays-in-php
    -> https://www.w3schools.com/php/func_array_multisort.asp

 -->
<?php
include('./includes/movie_array.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <title>Overzicht - Marvel Movies</title>
</head>

<body>
  <div class="page-content">
    <div class="container">
      <h1><img src="images/marvel-logo.png" alt="Marvel Studios"></h1>

      <div class="movie-sort">
        <?php include('./includes/sortform.php') ?>
      </div>

      <section class="movies">
        <?php foreach ($movies as $movie => $item) {
          include('./includes/moviecard.php');
        } ?>
      </section>
    </div>
  </div>

  <?php include('./includes/footer.php') ?>

</body>

</html>