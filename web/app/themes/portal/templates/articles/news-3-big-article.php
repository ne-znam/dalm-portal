<a href="<?php the_permalink(); ?>" class="news-3-big-article">
	<header>
		<?php if ($promo_tag = get_field('promo_tag')): ?>
		<div class="aras-promo--medium"><?php echo $promo_tag ?></div>
		<?php endif; ?>
		<?php the_post_thumbnail(); ?>
	</header>
	<h3><?php the_title() ?></h3>
	<p><?php the_field('subtitle'); ?></p>
</a>
