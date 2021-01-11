<article class="movieDetail">
    <div class="movieDetail-image">
        <img src="<?php echo $item['poster'] ?>" alt="<?php echo $item['title'] ?>">
    </div>
    <div class="movieDetail-content">
        <header class="movieDetail-header">
            <div class="movieDetail-score">
                <?php 
                  for($i=0;$i<$item['score']/2;$i++) {
                    echo "<i class='fas fa-star'></i>";
                  }
                ?>
            </div>  
            <h1 class="movieDetail-title"><?php echo $item['title'] ?></h1>
            <p class="movieDetail-release"><b>Released on</b>: <?php echo $item['release']->format('d m Y') ?></p>                <p class="movieDetail-director"><b>Directed by</b>: <?php echo $item['director'] ?></p>
        </header>
        <div class="movieDetail-synopsis">
            <?php echo $item['synopsis'] ?>
        </div>
        <aside class="movieDetail-reviews">
            <h1 class="movieDetail-reviews-title">Reviews</h1>
                <article class="movieReview">
                    <?php 
                        foreach ($movies as $movie => $item) {
                            foreach ($item['reviews'] as $review) {
                                echo print_r($review);
                            }
                        }
                    ?>
                </article>       
        </aside>
    </div>
</article>