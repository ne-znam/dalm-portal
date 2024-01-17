<?php
get_header();


?>
	<article id="content-section" class="container--fluid content-section content-section--category">

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

        <?php
        $category = get_queried_object();
        $q = z_get_zone_query($category->slug, ['posts_per_page' => 2]);
        while($q->have_posts()) {
            $q->the_post();
            if ($q->current_post == 0) {
                ?><div class="row-2__main-news">
                    <a href="<?php the_permalink(); ?>" class="main-news-box main-news-box--content-on-image">
                        <div class="content">
                            <!-- Tag(s) and publishing date -->
                            <div class="meta-container">
	                            <?php if ($promo_tag = get_field('promo_tag')) : ?>
                                    <div class="aras-tag"><?php echo $promo_tag ?></div>
	                            <?php endif; ?>
                                <!--<div class="aras-label--white aras-label--underlined">Prije 15 min</div>-->
                            </div>

                            <!-- Article title -->
                            <div class="category-aktualni-title">
                                <h2><?php the_title() ?></h2>

                                <!-- Subtitle -->
                                <h3><?php the_field('subtitle'); ?></h3>
                            </div>
                        </div>
                        <!-- Article's featured image or gallery -->
                        <div class="featured-image-container">
                            <?php the_post_thumbnail(); ?>
	                        <?php if ($promo_tag = get_field('promo_tag')) : ?>
                                <div class="aras-promo--big"><?php echo $promo_tag ?></div>
	                        <?php endif; ?>
                        </div>
                    </a>
                </div><?php
            } else {
                ?><div class="row-2__news-4">
                    <!-- News 4 article -->
                    <div class="news-4-article">
                        <?php the_post_thumbnail(); ?>
                        <div class="overlay-helper">
                            <div class="tags-header">
	                            <?php if ($promo_tag = get_field('promo_tag')) : ?>
                                <a href="<?php the_permalink(); ?>" class="aras-tag "><?php echo $promo_tag ?></a>
	                            <?php endif; ?>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <a href="<?php the_permalink(); ?>">Piše <span><?php echo get_coauthors()[0]->display_name ?></span></a>
                        </div>
                    </div>
                </div><?php
            }
        }
        ?>

		<div class="row-2__column">
            <?php /*
			<!-- Column - variation 1 -->
			<div class="column-box column-box--without-border">
				<div class="column-box__content">
					<div class="column-box__avatar-container">
						<img src="/images/9ff71418a187666c6418d519771f3092.png" alt="">
					</div>
					<div class="name-container">
						<a href="#" class="aras-tag aras-tag--white-outline">Tomislav Pili</a>
					</div>
					<div class="news-5-container">
						<a href="#" class="news-5-article">
							<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Ubojstvo u Zagrebu: Policija otkrila što se događalo u klubu Ritz</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Grad Trogir osigurava maturantima besplatne e-pripreme za državnu ...</h4>
						</a>
						<a href="#" class="news-5-article">
							<h4>Evo kako danas izgleda mjesto odigravanja Hajdukove ...</h4>
						</a>
					</div>
					<a href="#" class="aras-btn">Učitaj više</a>
				</div>
			</div>

             */ ?>
		</div>

		<div class="row-3__tag-container m-20">
			<div class="tag-container">
				<a href="#" class="aras-tag ">Vijesti</a>
			</div>
		</div>

        <?php
        while(have_posts()) {
	        the_post();
            ?>
            <div class="m-20 news-3-container">
                <!-- "Vijesti" News 3 article module with featured articles -->
                <a href="<?php the_permalink(); ?>" class="news-3-big-article">
                    <header>
	                    <?php if ($promo_tag = get_field('promo_tag')) : ?>
                            <div class="aras-promo--medium"><?php echo $promo_tag ?></div>
	                    <?php endif; ?>
                        <?php the_post_thumbnail(); ?>
                    </header>
                    <h3><?php the_title() ?></h3>
                    <p><?php the_field('subtitle'); ?></p>
                </a>
            </div>
            <?php
        }
        ?>

		<div class="sidebar-area--1">
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/639bf5b56dbf441b2f6e6955dac7ed89.png" alt=""/>
			</a>
			<!-- Square banner - variation 1 -->
			<a href="#" class="square-banner">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/design/assets/images/639bf5b56dbf441b2f6e6955dac7ed89.png" alt=""/>
			</a>
		</div>
	</article>

<?php
get_footer();
