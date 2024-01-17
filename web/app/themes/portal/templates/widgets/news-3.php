<?php
/**
 * @var $args array
 * @var $category WP_Term
 */
$category = $args['category'] ?? null;
$container_class = $args['container_class'] ?? '';
$title = $args['title'] ?? '';
if ($category) {
    $category = get_category_by_slug($category);
}
?>
<div class="<?php echo $container_class ?> news-3-container">
    <div class="tag-container">
        <?php if ($category) : ?>
        <a href="<?php get_category_link($category) ?>" class="aras-tag "><?php echo $category->name ?></a>
        <?php else : ?>
        <a href="#" class="aras-tag "><?php echo $title ?></a>
        <?php endif; ?>
    </div>
    <?php
    $q = [
        'posts_per_page' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'ignore_sticky_posts' => true,
        'no_found_rows' => true,
    ];
    if ($category) {
        $q['cat'] = $category->term_id;
    }
    $q = new WP_Query($q);
    $open = false;
    while ($q->have_posts()) {
        $q->the_post();
        if ($q->current_post == 0) {
            get_template_part('templates/articles/news-3-big-article');
            echo ' <div class="featured-article-container">';
            $open = true;
        } else {
            get_template_part('templates/articles/small-left-image');
        }
    }
    if ($open) {
        echo '</div>';
    }
    wp_reset_postdata();
    ?>
    <?php
    if (isset($args['banner']) && $args['banner']) :
        ?>
    <!-- Square banner - variation 1 -->
    <a href="#" class="square-banner">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/square-banner.png" alt=""/>
    </a>
    <?php endif; ?>
</div>
