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

include('includes/movie_array.php');
$id = $_GET['id']; // movie.php?id=3 -> $id = 3;
$movie = $movies[$id]; // $movies[3] --> derde film

// foreach($movies as $m) {
//   if ($m['id'] == $id) {
//     $movie = $m;
//   }
// }

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
      <article class="movieDetail">
        <div class="movieDetail-image">
          <img src="<?php echo $movie['poster'] ?>" alt="<?php echo $movie['title'] ?>">
        </div>
        <div class="movieDetail-content">
          <header class="movieDetail-header">
            <div class="movieDetail-score">
              <?php echo str_repeat("<i class=\"fas fa-star\"></i>", round($movie['score'] / 2)) ?>
            </div>
            <h1 class="movieDetail-title"><?php echo $movie['title'] ?></h1>
            <p class="movieDetail-release"><b>Released on</b>: <?php echo $movie['release']->format('d F Y') ?></p>
            <p class="movieDetail-director"><b>Directed by</b>: <?php echo $movie['director'] ?></p>
          </header>
          <div class="movieDetail-synopsis">
            <?php echo $movie['synopsis'] ?>
          </div>
          <aside class="movieDetail-reviews">
            <h1 class="movieDetail-reviews-title">Reviews</h1>
            <?php
            if (count($movie['reviews'])) {
              foreach ($movie['reviews'] as $review) {
                include('includes/movie-review.php');
              }
            } else {
              echo "<p>Er zijn nog geen reviews.</p>";
            }
            ?>
          </aside>
        </div>
      </article>
      
      <?php if (count($movie['related'])) { ?>
        <section class="relatedMovies">
          <h1 class="relatedMovies-title">Related movies</h1>
          <section class="movies">
            <?php
              $relatedMovies = $movie['related'];
              foreach($movies as $movie) {
                if(in_array($movie['id'], $relatedMovies)) {
                  include('./includes/movie-card.php');
                }
              }
            ?>
          </section>
        </section>
      <?php } ?> 
    </div>
  </div>
  <?php include('includes/footer.php') ?>
</body>

</html>