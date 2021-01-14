<?php
$related = $movie['related'];
?>
<section class="relatedMovies">
    <?php
    if (empty($related)) {
        echo '';
    } else {
        echo '<h1 class="relatedMovies-title">Related movies</h1>';
    }
    ?>
    <section class="movies">
        <?php foreach ($related as $movie_id) {
            $movie = $movies[$movie_id];
            include('./includes/moviecard.php');
        } ?>
    </section>
</section>