<div class="news-5-section-container">
	<div class="tag-container">
		<a href="#" class="aras-tag ">Najnovije</a>
		<a href="#" class="aras-tag aras-tag--red-outline">Najčitanije</a>
	</div>
	<div class="news-5-container">
		<?php $q = new WP_Query([
			'posts_per_page' => 5,
			'post_type' => 'post',
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'no_found_rows' => true,
			'ignore_sticky_posts' => true,
		]);
		while ($q->have_posts()) {
			$q->the_post();
			get_template_part('templates/articles/no-image-short');
		}
		wp_reset_postdata();
		?>
	</div>
	<a href="#" class="aras-btn aras-btn--disabled">Učitaj više</a>
</div>
