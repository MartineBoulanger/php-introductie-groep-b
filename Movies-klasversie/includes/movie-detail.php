<article class="movieDetail">
    <div class="movieDetail-image">
        <img src="<?php echo $movie['poster'] ?>" alt="<?php echo $movie['title'] ?>">
    </div>
    <div class="movieDetail-content">
        <header class="movieDetail-header">
            <div class="movieDetail-score">
                <?php
                echo str_repeat('<i class="fas fa-star"></i>', round($movie['score'] / 2)) ?>
            </div>
            <h1 class="movieDetail-title"><?php echo $movie['title'] ?></h1>
            <p class="movieDetail-release"><b>Released on</b>: <?php echo $movie['release']->format('d m Y') ?></p>
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
                    include('./includes/movie-review.php');
                }
            } else {
                echo 'Er zijn nog geen reviews voor deze film';
            }
            ?>
        </aside>
    </div>
</article>