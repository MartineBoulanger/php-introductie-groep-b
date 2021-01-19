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

include('includes/movie_array.php');
// $movies -> array -> foreach($movies as $movie)
if (isset($_GET['sort'])) {
    $sortOption = $_GET['sort'];
    $sortArray = [];
    foreach($movies as $movie => $item) {
      $sortArray[] = $item[$sortOption]; //$item['director'] $item['release'] ...
    }
    array_multisort($sortArray, $_GET['sort_direction'] == 'asc' ? SORT_ASC : SORT_DESC, $movies);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/meta.php') ?>
  <?php include('includes/styles.php') ?>
  <title>Overzicht - Marvel Movies</title>
</head>

<body>
  <div class="page-content">
    <div class="container">
      <?php include('includes/logo.php') ?>
      <?php include('includes/sort-form.php') ?>
      <section class="movies">
        <?php
        foreach ($movies as $movie) {
          include('includes/movie-card.php');
        }
        ?>
      </section>
    </div>
  </div>
  <?php include('includes/footer.php') ?>
</body>

</html>