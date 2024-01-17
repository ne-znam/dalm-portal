<?php

get_header();

?>
<article id="content-section" class="container--fluid content-section content-section--items-list">

    <div class="row-1__landscape-banner">
        <!-- Landscape banner component -->
        <a href="#">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/1aafcc976ef7d8c780139326d6c12432.png" alt="">
        </a>
    </div>
    <div class="row-1__square-banner">
        <!-- Square banner - variation 1 -->
        <a href="#" class="square-banner">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/Image.png" alt=""/>
        </a>
    </div>

    <div class="mod-items-list-tags tags-header">
        <a href="#" class="aras-tag "><?php get_queried_object()->name ?></a>
    </div>
<?php

while(have_posts()) {
	the_post();
	?>
	<a href="<?php the_permalink(); ?>" class="category-card">
		<?php the_post_thumbnail(); ?>
		<h3><?php the_title() ?></h3>
	</a>
	<?php
}

?>
</article>
	<?php

get_footer();
