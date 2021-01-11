<a href="movie.php?id=<?php echo $item['id'] ?>" class="movieCard-link">
          <article class="movieCard">
            <div class="movieCard-image">
              <img src="<?php echo $item['poster'] ?>" alt="<?php echo $item['title'] ?>">
            </div>
            <div class="movieCard-content">
              <h1 class="movieCard-title"><?php echo $item['title'] ?></h1>
              <p class="movieCard-release"><?php echo $item['release']->format('d m Y') ?></p>
              <p class="movieCard-review"><?php echo substr(strip_tags($item['synopsis']), 0, 100)."..." ?></p>
              <p class="movieCard-director"><b>Directed By</b>: <br> <?php echo $item['director'] ?></p>
            </div>
            <div class="movieCard-score">
                <?php 
                  for($i=0;$i<$item['score']/2;$i++) {
                    echo "<i class='fas fa-star'></i>";
                  }
                ?>
            </div>  
            <div class="movieCard-reviewCount">
              <?php echo count($item['reviews']) ?>
            </div>
          </article>
        </a>