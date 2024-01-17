<div class="featured-image-container">
    <div class="slider-article-img">
        <?php the_post_thumbnail(); ?>
        <?php if ($promo_tag = get_field('promo_tag')) : ?>
        <div class="aras-promo--big"><?php echo $promo_tag ?></div>
        <?php endif; ?>
    </div>

    <div class="slider-article-title">
        <a href="<?php the_permalink(); ?>" class="content">
            <div class="meta-container">
                <div class="aras-tag"><?php echo get_the_category()[0]->name ?></div>
                <div class="aras-label--red"><?php the_time('d/m/y · H:i'); ?></div>
            </div>

            <h2><?php the_title() ?></h2>

            <h3><?php the_field('subtitle'); ?></h3>
        </a>
    </div>
</div>
