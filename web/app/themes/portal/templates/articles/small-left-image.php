<a href="<?php the_permalink(); ?>" class="featured-article ">
	<!-- header element for fitting the image in the specified dimension -->
	<header>
		<?php if ($promo_tag = get_field('promo_tag')): ?>
			<div class="aras-promo--small"><?php echo $promo_tag ?></div>
		<?php endif ?>
		<?php the_post_thumbnail('small-image'); ?>
	</header>
	<h3><?php the_title(); ?></h3>
</a>
