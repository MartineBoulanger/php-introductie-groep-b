<section class="aanbod">
    <h1><?php echo $naam ?></h1>
    <p><?php echo $item['tagline'] ?></p>
    <p class="aanbod-price">&euro;<?php echo $item['price'] ?> p.p.</p>
    <ul class="aanbod-featurelist">
        <?php
            foreach ($item['features'] as $feature) {
                echo "<li>$feature</li>";
            }
        ?>
    </ul>
</section>