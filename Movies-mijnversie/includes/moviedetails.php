<article class="movieDetail">
    <div class="movieDetail-image">
        <img src="<?php echo $movie['poster']; ?>" alt="<?php echo $movie['title']; ?>">
    </div>
    <div class="movieDetail-content">
        <header class="movieDetail-header">
            <div class="movieDetail-score">
                <?php
                for ($i = 0; $i < ceil($movie['score']) / 2; $i++) {
                    echo '<i class="fas fa-star"></i>';
                }
                ?>
            </div>
            <h1 class="movieDetail-title"><?php echo $movie['title']; ?></h1>
            <p class="movieDetail-release"><b>Released on</b>: <?php echo $movie['release']->format('d M Y') ?></p>
            <p class="movieDetail-director"><b>Directed by</b>: <?php echo $movie['director']; ?></p>
        </header>

        <div class="movieDetail-synopsis">
            <?php echo $movie['synopsis']; ?>
        </div>
        <aside class="movieDetail-reviews">
            <h1 class="movieDetail-reviews-title">Reviews</h1>

            <?php
            $reviews = $movie['reviews'];
            $empty = true;
            ?>
            <?php foreach ($reviews as $review) { ?>
                <article class="movieReview">
                    <?php
                    if ($review != '') {
                        $empty = false;
                    }
                    echo $review;
                    ?>
                </article>
            <?php } ?>
            <?php
            if ($empty) {
                echo "<p>Er zijn nog geen reviews</p>";
            }
            ?>
        </aside>
    </div>
</article>