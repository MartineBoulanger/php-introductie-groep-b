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
$id = $_GET['id']; // gaat de id uit de url halen -> movie.php?id=3 -> $id = 3;
$movie = $movies[$id]; // $movies[3]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/meta.php') ?>
  <?php include('includes/styles.php') ?>
  <title><?php echo $movie['title'] ?> - Marvel Movies</title>
</head>

<body>

  <div class="page-content">
    <div class="container">
      <?php include('includes/logo.php') ?>
      <p class="text-center"><a href="index.php" class="back-btn">Back to list</a></p>

      <?php include('./includes/movie-detail.php') ?>

      <?php if (count($movie['related'])) { ?>
        <section class="relatedMovies">
          <h1 class="relatedMovies-title">Related movies</h1>
          <section class="movies">
            <?php
            $relatedMovies = $movie['related'];
            foreach ($movies as $movie) {
              if (in_array($movie['id'], $relatedMovies)) {
                include('./includes/movie-card.php');
              }
            }
            ?>
          </section>
        </section>
      <?php } ?>
    </div>
  </div>

  <?php include('./includes/footer.php') ?>

</body>

</html>