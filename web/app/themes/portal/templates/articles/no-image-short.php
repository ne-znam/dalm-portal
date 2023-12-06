<a href="<?php the_permalink(); ?>" class="news-5-article news-5-article--homepage">
    <h4><?php the_title() ?></h4>
    <div class="aras-label--red"><?php echo dn_time_from() ?> · <?php get_the_category()[0]?->name ?></div>
</a>
