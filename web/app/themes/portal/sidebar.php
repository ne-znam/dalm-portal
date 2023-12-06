<?php get_template_part('templates/widgets/najnovije'); ?>

<div class="featured-article-section-container">
    <div class="tag-container">
        <a href="#" class="aras-tag ">Vezane vijesti</a>
    </div>
    <div class="featured-article-container">
        <?php $q = new WP_Query([
            'posts_per_page' => 4,
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'no_found_rows' => true,
            'ignore_sticky_posts' => true,
        ]);
while ($q->have_posts()) {
    $q->the_post();
    get_template_part('templates/articles/small-left-image');
}
?>
    </div>
</div>

<div class="theme-box-section-container">
    <div class="theme-container">
        <!-- Theme box -->
        <a href="#" class="theme-box">
            <div class="theme-box__image-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/6aaafdd6b7baa61cbfa6184a33b0104d.jpg" alt="">
            </div>
            <h3 class="theme-box__title">Tvrđave Splitsko-dalmatinske županije</h3>
        </a>
        <!-- Theme box -->
        <a href="#" class="theme-box">
            <div class="theme-box__image-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/b20c0992b0bf5156a952158822ed4999.jpg" alt="">
            </div>
            <h3 class="theme-box__title"></h3>
        </a>
        <!-- Theme box -->
        <a href="#" class="theme-box">
            <div class="theme-box__image-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/803a8e3547ab9a4b6edc7731d80cec42.jpg" alt="">
            </div>
            <h3 class="theme-box__title"></h3>
        </a>
    </div>
</div>
