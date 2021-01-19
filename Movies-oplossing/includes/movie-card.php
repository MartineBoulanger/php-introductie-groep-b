<a href="movie.php?id=<?php echo $movie['id'] ?>" class="movieCard-link">
  <article class="movieCard">
    <div class="movieCard-image">
      <img src="<?php echo $movie['poster'] ?>" alt="<?php echo $movie['title'] ?>">
    </div>
    <div class="movieCard-content">
      <h1 class="movieCard-title"><?php echo $movie['title'] ?></h1>
      <p class="movieCard-release"><?php echo $movie['release']->format('d F Y') ?></p>
      <p class="movieCard-review"><?php echo substr(strip_tags($movie['synopsis']), 0, 100) ?>...</p>
      <p class="movieCard-director"><b>Directed By</b>: <br> <?php echo $movie['director'] ?></p>
    </div>
    <div class="movieCard-score">
      <?php echo str_repeat("<i class=\"fas fa-star\"></i>", round($movie['score'] / 2)) ?>
    </div>
    <?php if (count($movie['reviews'])) { ?>
      <div class="movieCard-reviewCount">
        <i class="far fa-comment"></i> <?php echo count($movie['reviews']) ?>
      </div>
    <?php } ?>
  </article>
</a>